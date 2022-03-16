@extends('dashboard.common.app')

@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">USERS</h1>
                    <!-- DataTales Users -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Users</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#Counter</th>
                                            <th>full Name</th>
                                            <th>User Name</th>
                                            <th>E-mail</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>#Counter</th>
                                            <th>full Name</th>
                                            <th>User Name</th>
                                            <th>E-mail</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th>Option</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                        @if(count($users) > 0)

                                      @foreach ($users as $K => $user)
                                      <tr>
                                        <td>{{ $K + 1 }}</td>
                                        <td>{{ $user->first_name }}</td>
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>{{ $user->address }}</td>
                                        <td>{{ 'hello' }}</td>
                                    </tr>
                                    @else
                                    <tr>
                                        No Data
                                    </tr>
                                      @endforeach
                                      @endif
                                    </tbody>
                                </table>
                            </div>
                                {!! $users->render() !!}
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

@endsection
