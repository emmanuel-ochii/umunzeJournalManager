@extends('layouts.landing')

@push('styles')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css') }}">
@endpush

@section('content')


    <!-- Main Container -->
    <main id="main-container">

        <!-- Hero -->
        <div class="bg-imageProfile">
            <div class="bg-black-25">
                <div class="content content-full">
                    <div class="py-5 text-center">
                        <a class="img-link" href="">
                            <img class="img-avatar img-avatar96 img-avatar-thumb"
                                src="{{ asset('/media/avatars/avatar10.jpg') }}" alt="">
                        </a>
                        <h1 class="fw-bold my-2 text-white">George Taylor</h1>
                        <h2 class="h4 fw-bold text-white-75">
                            Senior Lecturer
                        </h2>
                        <a href="">
                            <button type="button" class="btn btn-umunze-brown m-1"><i
                                    class="fab fa-fw fa-linkedin-in opacity-50 me-1"></i> </button>
                        </a>
                        <a href="mailto:exampl@gmail.com">
                            <button type="button" class="btn btn-secondary m-1"> <i
                                    class="fa fa-fw fa-envelope opacity-50 me-1"></i> Message </button>
                        </a>
                        <a href="">
                            <button type="button" class="btn btn-primary m-1"><i
                                    class="fab fa-fw fa-twitter opacity-50 me-1"></i> </button>
                        </a>
                        <a href="tel:123445553">
                            <button type="button" class="btn btn-umunze-green m-1"><i
                                    class="fa fa-fw fa-phone-alt opacity-50 me-1"></i> </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content content-full content-boxed">
            <!-- Latest Friends -->
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            @if ($message = Session::get('deleted'))
                <div class="alert alert-danger">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <h2 class="content-heading text-umunze-green"> <i class="si si-book-open me-1 text-dark"></i> Manage
                Journals({{ $journals->count() }})
            </h2>
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
                                            @if ($journal->status == 1)
                                                <span class="badge bg-success">Published</span>
                                            @else
                                                <span class="badge bg-danger">Rejected</span>
                                            @endif
                                        </td>
                                        <td class="d-none d-sm-table-cell"><em
                                                class="text-muted">{{ $journal->uploaded_by }}</em> </td>
                                        <td> <em class="text-muted">{{ $journal->created_at }}</em> </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="{{ url('journal/' . Str::slug($journal->title) . '/' . $journal->id) }}"
                                                    class="btn btn-sm btn-alt-primary js-bs-tooltip-enabled"
                                                    data-bs-toggle="tooltip" title="View Journal"
                                                    data-bs-original-title="View Journal">
                                                    <i class="fa fa-eye"></i>
                                                </a>

                                                <a href="{{ route('journal.delete', $journal->id) }}" type="submit"
                                                    onclick="return confirm('Are you sure you want to delete this record ?')"
                                                    class="btn btn-sm btn-alt-danger js-bs-tooltip-enabled"
                                                    data-bs-toggle="tooltip" title="Delete Category"
                                                    data-bs-original-title="Delete Category">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                                <a href="{{ route('journal.edit', $journal->id) }}"
                                                    class="btn btn-sm btn-alt-primary js-bs-tooltip-enabled"
                                                    data-bs-toggle="tooltip" title="Update Journal"
                                                    data-bs-original-title="Update Journal">
                                                    <i class="fa fa-edit"></i>
                                                </a>
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
            <!-- END Cover Link Stories -->
            <div class="text-end">
                <a href="{{ route('user.userJournals') }}">
                    <button type="button" class="btn btn-alt-primary">
                        View All <i class="fa fa-arrow-right ms-1"></i>
                    </button>
                </a>
            </div>
            <!-- END Latest Friends -->

        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->


@endsection

@push('scripts')

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
