@extends('admin.layout.admin')
@section('title', $title)

@push('styles')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
@endpush

@section('content')

    <!-- Main Container -->
    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div
                    class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center ribbon ribbon-success ribbon-bookmark">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">All Journals</h1>
                    <span class="ribbon-box"># {{ $journals->count() }} </span>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">

            <!-- Dynamic Table with Export Buttons -->
            <div class="block block-rounded">
                <div class="block-content block-content-full">
                    <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                        <thead class="table-dark">
                            <tr>
                                <th class="text-center">#</th>
                                <th>Journal Title</th>
                                <th class="d-none d-sm-table-cell">Authtor</th>
                                <th class="d-none d-sm-table-cell">Author Email</th>
                                <th class="d-none d-sm-table-cell">Status</th>
                                <th class="d-none d-sm-table-cell">Uploaded by</th>
                                <th style="width: 15%;">Uploaded Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($journals) > 0)
                                @foreach ($journals as $journal)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="d-none d-sm-table-cell"><em
                                                class="text-dark">{{ $journal->title }}</em> </td>
                                        <td>{{ $journal->author_name }}</td>
                                        <td class="d-none d-sm-table-cell"><em
                                                class="text-muted">{{ $journal->author_email }}</em> </td>
                                        <td class="d-none d-sm-table-cell">
                                            <input data-id="{{$journal->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $journal->status ? 'checked' : '' }}>
                                            {{-- <input type="checkbox" class="toggle-class" data-id="{{ $journal['id'] }}" data-toggle="toggle" data-style="slow" data-on="Enabled" data-off="Disabled" {{ $journal['status'] == true ? 'checked' : ''}}> --}}
                                        </td>
                                        <td class="d-none d-sm-table-cell"><em
                                                class="text-muted">{{ $journal->uploaded_by }}</em> </td>
                                        <td> <em class="text-muted">{{ $journal->created_at }}</em> </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <form action="{{ route('journal.delete', $journal->id) }}" method="POST">

                                                    <a href="{{ url('journal/' . Str::slug($journal->title) . '/' . $journal->id) }}"
                                                        class="btn btn-sm btn-alt-primary js-bs-tooltip-enabled"
                                                        data-bs-toggle="tooltip" title="View Journal"
                                                        data-bs-original-title="View Journal">
                                                        <i class="fa fa-eye"></i>
                                                    </a>

                                                    @csrf
                                                    @method('DELETE')

                                                    {{-- <button type="submit" onclick="return confirm('Are you sure you want to delete this record ?')" class="btn btn-sm btn-alt-danger js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="Delete Category" data-bs-original-title="Delete Category">
                                                <i class="fa fa-trash"></i>
                                            </button> --}}
                                                    {{-- <button type="button"
                                                        class="btn btn-sm btn-alt-danger js-bs-tooltip-enabled"
                                                        data-bs-toggle="tooltip" title="Reject Journal "
                                                        data-bs-original-title="Reject">
                                                        <i class="fa fa-eye-slash"></i>
                                                    </button> --}}

                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <div id="basic-alert" class="p-5">
                                    <div class="preview">
                                        <div class="alert alert-dark show mb-2 text-center" role="alert">No Category To
                                            Display</div>
                                    </div>
                                </div>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END Dynamic Table with Export Buttons -->
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

@endsection


@push('scripts')

    {{-- <script>
        $(function() {
            $('#toggle-two').bootstrapToggle({
                on: 'Enabled',
                off: 'Disabled'
            });
        })
    </script> --}}

    <script>
        $('.toggle-class').on('change', function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            var id = $(this).data('id');
            $.ajax({
                type: 'GET',
                dataType: 'JSON',
                url: '{{ route('journalStatus') }}',
                data: {
                    'status': status,
                    'id': id
                },
                success: function(data) {
                    console.log('successful');
                    setTimeout(() => {
                        $('#notifDiv').fadeOut();
                    }, 3000);
                }
            });

        });
    </script>

    <!-- jQuery (required for DataTables plugin) -->
    <script src="{{ asset('/js/lib/jquery.min.js') }}"></script>

    <!-- Page JS Plugins -->
    <script src="{{ asset('/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('/js/plugins/datatables-buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('/js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('/js/plugins/datatables-buttons-jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('/js/plugins/datatables-buttons-pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('/js/plugins/datatables-buttons-pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('/js/plugins/datatables-buttons/buttons.print.min.js') }}"></script>
    <script src="{{ asset('/js/plugins/datatables-buttons/buttons.html5.min.js') }}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('/js/pages/be_tables_datatables.min.js') }}"></script>
@endpush
