@extends('admin.layout.master')

@section('title')
    Category List
@endsection

@section('content')

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>List</small>
                        </h1>
                    </div>

                    {{-- @if(View::hasSection('success'))
                        {{-- <div class="alert alert-success">  </div> --}}
                        {{-- @yield('success')
                    @endif --}} 

                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" 
                        {{-- id="dataTables-example" --}}
                        >
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $Category)
                                <tr class="odd gradeX" align="center">
                                    <td>{{ $Category->id }}</td>
                                    <td>{{ $Category->name }}</td>

                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href=" {{ route('admin.category.delete',$Category->id ) }} "> Delete </a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href=" {{ route('admin.category.edit',$Category->id) }} "> Edit </a></td>
                                </tr>

                            @endforeach

                        </tbody>
                    </table>
                    {{-- {!! $categories->links() !!} --}}
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>

@endsection