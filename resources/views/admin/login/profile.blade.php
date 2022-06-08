@extends('admin.layout.master')

@section('title')

Users Edit

@endsection

@section('content')

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Profile
                            <small>Edit</small>
                        </h1>
                        @if(count($errors))
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                                {{ $err }}
                            @endforeach
                        </div>
                        @endif
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="{{ route('admin.profile.update')}}" method="POST" >
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" value="{{ auth()->user()->name }}" name="name" placeholder="Please Enter Username" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" value="{{ auth()->user()->email }}" type="email"  placeholder="Please Enter Email " readonly />
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="password"  name="password" placeholder="Please Enter Password " />
                            </div>
                            <div class="form-group">
                                <label> Confirm Password</label>
                                <input class="form-control"  type="password" name="confirm" placeholder="Please Enter Confirm Password " />
                            </div>
                            
                            <button type="submit" class="btn btn-default">User Update</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>

@endsection