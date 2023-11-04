<script src="{{asset('backend/assets/js/vendor.min.js')}}"></script>

        <!--C3 Chart-->
        <script src="{{asset('backend/assets/libs/d3/d3.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/c3/c3.min.js')}}"></script>

        <script src="{{asset('backend/assets/libs/echarts/echarts.min.js')}}"></script>

        <script src="{{asset('backend/assets/js/pages/dashboard.init.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('backend/assets/js/app.min.js')}}"></script>



        <script src="{{asset('backend/assets/libs/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/datatables/dataTables.bootstrap4.min.js')}}"></script>
        <!-- Buttons examples -->
        <script src="{{asset('backend/assets/libs/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/datatables/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/jszip/jszip.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/pdfmake/pdfmake.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/pdfmake/vfs_fonts.js')}}"></script>
        <script src="{{asset('backend/assets/libs/datatables/buttons.html5.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/datatables/buttons.print.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/datatables/buttons.colVis.js')}}"></script>

        <!-- Responsive examples -->
        <script src="{{asset('backend/assets/libs/datatables/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/datatables/responsive.bootstrap4.min.js')}}"></script>

        <!-- Datatables init -->
        <script src="{{asset('backend/assets/js/pages/datatables.init.js')}}"></script>
        <script>
            $(document).ready(function() {
                 $('#datatable').DataTable().destroy();

                $('#datatable').DataTable({
               "language": {
                      search: 'Search Record',
                      searchPlaceholder: 'Filter  Results '
                    },
              dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
                        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                        dom: 'lBfrtip',
              buttons: [
                            // {
                            //     extend: 'csv', className: 'btn-sm', exportOptions: {
                            //         page: ':all'
                            //     }
                            // },
                            {
                                extend: 'excel', title: 'List of teacher', className: 'btn-sm ', exportOptions: {
                                    // page: ':all'
                                    columns: [ 0, 1, 2,3,4 ]
                                }
                            },
                            {
                                extend: 'pdf', title: 'List of teacher', className: 'btn-sm', exportOptions: {
                                    // page: ':all'
                                    columns: [ 0, 1, 2,3,4  ]
                                }

                            },
                            {
                                extend: 'print', title: 'List of teacher', className: 'btn-sm', exportOptions: {
                                    // page: ':all'
                                    columns: [ 0, 1, 2,3,4  ]
                                }
                            }
                        ]
               });

            } );
        </script>
