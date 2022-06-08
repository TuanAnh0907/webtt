@extends('admin.layout.master')

@section('title')

Users Create

@endsection

@section('content')

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
                            <small>Create</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="{{ route('admin.user.store')}}" method="POST" >
                            @csrf
                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" name="name" placeholder="Please Enter Username" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="email" placeholder="Please Enter Email " />
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="password"  name="password" placeholder="Please Enter Password " />
                            </div>
                            <div class="form-group">
                                <label> Confirm Password</label>
                                <input class="form-control" type="password" name="confirm" placeholder="Please Enter Confirm Password " />
                            </div>
                            <div class="form-group">
                                <label>Role</label>
                                <label class="radio-inline">
                                    <input name="is_admin" value="0" checked="true" type="radio"> User
                                </label>
                                <label class="radio-inline">
                                    <input name="is_admin" value="1" checked="true" type="radio"> Admin
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">User Create</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>

@endsection