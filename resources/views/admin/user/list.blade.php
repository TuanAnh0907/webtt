@extends('admin.layout.master')

@section('title')

Users List

@endsection

@section('content')

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" 
                    {{-- id="dataTables-example" --}}
                    >
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Is-Admin</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $User)
                                <tr class="even gradeC" align="center">
                                    <td> {{ $User->id }}</td>
                                    <td> {{ $User->name }}</td>
                                    <td> {{ $User->email }} </td>
                                    <td> {{ $User->is_admin ? "x" : "" }} </td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{ route('admin.user.delete', $User->id)}}"> Delete </a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ route('admin.user.edit', $User->id)}}"> Edit </a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $users->Links() !!}
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>

@endsection