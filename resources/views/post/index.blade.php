<head>
<link rel="stylesheet" type="text/css"
        href="assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css"
        href="assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css">
        
    <!-- Custom CSS -->
    <link href="{{ asset('/') }}css/style.min.css" rel="stylesheet">
</head>

    <div class="row justify-content-center">
        <div class="col-lg-8 margin-tb">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center mt-5">
                        <h2>CRUD</h2>
                    </div>
                </div>
                <div class="col-md-12 text-end mt-4">
                    <a class="btn btn-primary" href="{{ route('posts.create') }}"> + Create New Post</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Table</h4>
                                <h6 class="card-subtitle">Data table example</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                            <th>No</th>
                    <th>Name</th>
                    <th>Body</th>
                    <th>Name</th>
                    <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
              @foreach ($post as $post)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->body }}</td>
                   <td>{{ $post->user->name }}</td>
                    <td>
                        <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                              
                            <a class="btn btn-info btn-sm text-white" href="{{ route('posts.show',$post->id) }}">Show</a>
                         
                             @if($post->user_id==auth()->id())
                            <a class="btn btn-primary btn-sm" href="{{ route('posts.edit',$post->id) }}">Edit</a>
                          
                            @csrf
                            @method('DELETE')
              
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            @endif
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>



                        ============================================================ -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/node_modules/popper/popper.min.js"></script>
    <script src="assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('/')}}js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="{{asset('/')}}js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="{{asset('/')}}js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('/')}}js/custom.min.js"></script>
    <!-- This is data table -->
    <script src="assets/node_modules/datatables/jquery.dataTables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    
    </script>



   

