@extends('admin.layout.master')

@section('title')
    
    Category Edit
@endsection

@section('content')

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>Edit</small>
                        </h1>
                   
                    {{-- @if (count($errors))
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $err)}
                                {{ $err }}
                            @endforeach
                        </div>
                    @endif --}}

                </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <div class="col-lg-7" style="padding-bottom:120px">
                            <form action="{{ route('admin.category.update',$category->id) }}" method="POST">
                                @csrf
                                @method('put')
                                <div class="form-group">
                                    <label>Category Name</label>
                                    <input class="form-control" name="name" value="{{ $category->name }}" placeholder="Please Enter Category Name" />
                                </div>
                                
                                <button type="submit" class="btn btn-default">Category Update</button>
                                <button type="reset" class="btn btn-default">Reset</button>
                            <form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>

@endsection