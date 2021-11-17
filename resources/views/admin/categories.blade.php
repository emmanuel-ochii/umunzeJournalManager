@extends('admin.layout.admin')
@section('title',$title)
@push('styles')
<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="{{asset('/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css')}}">
<link rel="stylesheet" href="{{asset('/js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css')}}">
@endpush

@section('content')

      <!-- Main Container -->
      <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
          <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center ribbon umunze ribbon-bookmark">
                <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">All Categories</h1>
                <a href="{{route('category.create')}}" class="btn btn-umunze-brown text-white">Create Category</a>
            </div>
          </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
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
            <!-- Dynamic Table with Export Buttons -->
            <div class="block block-rounded">
                <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                    <thead class="table-dark">
                    <tr>
                        <th class="text-center">#</th>
                        <th>Category Name</th>
                        <th class="d-none d-sm-table-cell">Number Of Journals</th>
                        <th >Created Date</th>
                        <th >Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @if(count($categories) > 0)
                            @foreach ($categories as $category)
                                <tr>
                                    <td class="text-center">{{$loop->iteration}}</td>
                                    <td class="fw-semibold">{{$category->category_name}}</td>
                                    <td class="d-none d-sm-table-cell"><em class="text-muted">21</em> </td>
                                    <td> <em class="text-muted">{{$category->created_at}}</em> </td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <form action="{{ route('category.destroy',$category->id) }}" method="POST">

                                                <a href="{{ route('category.edit',$category->id)}}" class="btn btn-sm btn-alt-primary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="Update Category" data-bs-original-title="Update Category">
                                                    <i class="fa fa-eye"></i>
                                                </a>

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" onclick="return confirm('Are you sure you want to delete this record ?')" class="btn btn-sm btn-alt-danger js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="Delete Category" data-bs-original-title="Delete Category">
                                                    <i class="fa fa-trash"></i>
                                                </button>

                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <div id="basic-alert" class="p-5">
                                <div class="preview">
                                    <div class="alert alert-dark show mb-2 text-center" role="alert">No Category To Display</div>
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
<!-- jQuery (required for DataTables plugin) -->
<script src="{{asset('/js/lib/jquery.min.js')}}"></script>

<!-- Page JS Plugins -->
<script src="{{asset('/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js')}}"></script>
<script src="{{asset('/js/plugins/datatables-buttons/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('/js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js')}}"></script>
<script src="{{asset('/js/plugins/datatables-buttons-jszip/jszip.min.js')}}"></script>
<script src="{{asset('/js/plugins/datatables-buttons-pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('/js/plugins/datatables-buttons-pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('/js/plugins/datatables-buttons/buttons.print.min.js')}}"></script>
<script src="{{asset('/js/plugins/datatables-buttons/buttons.html5.min.js')}}"></script>

<!-- Page JS Code -->
<script src="{{asset('/js/pages/be_tables_datatables.min.js')}}"></script>
@endpush
