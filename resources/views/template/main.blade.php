<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>{{$title}}</title>

    <!-- DataTables -->
    <link rel="stylesheet" href="{{url("")}}/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{url("")}}/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <script src="{{url("")}}/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{url("")}}/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url("")}}/assets/style/css/adminlte.min.css">
    <!-- summernote -->
    <link rel="stylesheet" href="{{url("")}}/assets/plugins/summernote/summernote-bs4.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{url("")}}/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{url("")}}/assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{url("")}}/assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Topbar -->
        @include('template/navbar')

        <!-- Sidebar -->
        @include('template/sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">{{$title}}</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">{{$title}}</a></li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    @yield('views')
                </div>
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        @include('template/footer')
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{url("")}}/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{url("")}}/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{url("")}}/assets/style/js/adminlte.min.js"></script>
    <!-- DataTables -->
    <script src="{{url("")}}/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{url("")}}/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{url("")}}/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{url("")}}/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- jquery-validation -->
    <script src="{{url("")}}/assets/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="{{url("")}}/assets/plugins/jquery-validation/additional-methods.min.js"></script>
    <!-- Select2 -->
    <script src="{{url("")}}/assets/plugins/select2/js/select2.full.min.js"></script>
    <!-- Summernote -->
    <script src="{{url("")}}/assets/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="{{url("")}}/assets/plugins/sweetalert2/sweetalert2.min.js"></script>
    <script src="{{url("")}}/assets/plugins/summernote/summernote-bs4.min.js"></script>
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2({
                theme: 'bootstrap4',
            })
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

        })
        window.setTimeout(function() {
            $(".alert-success").fadeTo(1000, 0).slideUp(1000, function() {});
            $(".alert-danger").fadeTo(1000, 0).slideUp(1000, function() {});
        }, 2000);
    </script>
</body>

</html>
