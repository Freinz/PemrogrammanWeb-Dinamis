<!DOCTYPE html>
<html lang="en">

<head>

    

    <title>Tugas Web 2</title>

    @include('components.head')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        @if(auth()->user()->level == "Admin" || auth()->user()->level == "Habib" )
        @include('components.left-sidebar')
        @endif
        <!-- End of Sidebar -->

       

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('components.top-bar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                
                <div class="container-fluid">
                    @include('components.content')

                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('components.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    @include('components.modal-logout')

    <!-- Bootstrap core JavaScript-->
    @include('components.script')

</body>

</html>