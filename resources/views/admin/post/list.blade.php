@extends('admin.layout.master')

@section('title')

Posts List

@endsection

@section('content')

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Post
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
                                <th>Title</th>
                                <th>Image</th>
                                <th>New Post</th>
                                <th>Category </th>
                                <th>Hightlight Post</th>
                                <th>Hidden</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $Post)
                                <tr class="odd gradeX" align="center">
                                    <td> {{ $Post->id }} </td>

                                    <td> {{ $Post->title }} </td>
                                    
                                    <td><img src=" {{ $Post->imageUrl() }} " alt="  " width="100px" height="auto"></td>

                                    <td> {{ $Post->new_posts == 1 ? "x" : ""}}</td>

                                    {{-- <td> {{ $Post->categories_id }}</td> --}}

                                    <td> {{ $Post->category->name }} </td>

                                    <td> {{ $Post->highlight_post == 1 ? "x" : ""}}</td>

                                    <td> {{ $Post->hidden == 1 ? "x" : ""}}</td>

                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{ route('admin.post.delete',$Post->id ) }}"> Delete </a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ route('admin.post.edit',$Post->id ) }}"> Edit </a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {!! $posts->Links() !!}

                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>

@endsection