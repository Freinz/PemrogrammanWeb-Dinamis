<!DOCTYPE html>
<html lang="en">

<head>

    <title>Data Pengguna</title>
    @include('components.head')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('components.left-sidebar')
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

                    {{-- @if (auth()->user()->level == "Admin") --}}
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">User Data</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Profile Picture</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Level</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach ($usr as $item)
                                        <tr>
                                            <td><img class="img-profile rounded-circle" src="{{ asset('img/' . $item->foto) }}" width="100" height="100"></td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->level }}</td>
                                            <td><a href="{{url('change-user/'. $item->id)}}">Modify</a> | <a href="{{url('delete-user/'. $item->id)}}">Delete</a> </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>    
                    {{-- @else
                    <div class="text-center">
                        <div class="error mx-auto" data-text="404">404</div>
                        <p class="lead text-gray-800 mb-5">Page Not Found</p>
                        <p class="text-gray-500 mb-0">It looks like you found a glitch in the matrix...</p>
                        <a href="{{url('/')}}">&larr; Back to Dashboard</a>
                    </div>
                    @endif --}}


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
