@extends('editor.layout.editor')

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
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center ribbon ribbon-danger ribbon-bookmark">
                <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Rejected Journals</h1>
                <span class="ribbon-box">20 </span>
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
                <thead class="bg-danger text-light">
                  <tr>
                    <th class="text-center">#</th>
                    <th>Journal Title</th>
                    <th class="d-none d-sm-table-cell">Authtor</th>
                    <th class="d-none d-sm-table-cell">Author Email</th>
                    <th style="width: 15%;">Uploaded Date</th>
                    <th style="width: 15%;"> Date Rejected </th>
                    <th style="width: 15%;"> Reason for Rejection </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center">1</td>
                    <td class="fw-semibold"> <a href="">Carl Wells</a> </td>
                    <td class="d-none d-sm-table-cell"><em class="text-muted">Margos Huklker</em> </td>
                    <td class="d-none d-sm-table-cell"> <em class="text-muted">@example.com</em> </td>
                    <td> <em class="text-muted">8 days ago</em> </td>
                    <td> <em class="text-muted">8 days ago</em> </td>
                    <td> <p class="text-muted">Lorem Ipsum text here...</p></td>
                  </tr>
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
