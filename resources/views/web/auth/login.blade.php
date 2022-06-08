@extends('web.layout.master')
@section('content')
        <section class="section wb mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-wrapper">
                            <div class="row">
                                @if (session('error'))
                                    <div class="col-lg-6">
                                        <div class="alert-danger"> {{ session('error') }} </div>
                                    </div>
                                @endif

                                <div class="col-lg-6">
                                    <div class=""><h2> LOGIN FOR MEMBER </h2></div>
                                    <form class="form-wrapper" method="post" action=" {{ route('web.auth.login') }}">
                                        @csrf
                                        <input type="text" name="email" class="form-control" placeholder="Your name">
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                        <button type="submit" class="btn btn-primary"> Login </button>
                                    </form>
                                </div>
                                <div class="widget d-inline">
                                    <h2 class="widget-title">Follow Us</h2>
    
                                    <div class="row text-center">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                            <a href="#" class="social-button facebook-button">
                                                <i class="fa fa-facebook"></i>
                                                <p>27k</p>
                                            </a>
                                        </div>
    
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                            <a href="#" class="social-button twitter-button">
                                                <i class="fa fa-twitter"></i>
                                                <p>98k</p>
                                            </a>
                                        </div>
    
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                            <a href="#" class="social-button google-button">
                                                <i class="fa fa-google-plus"></i>
                                                <p>17k</p>
                                            </a>
                                        </div>
    
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                            <a href="#" class="social-button youtube-button">
                                                <i class="fa fa-youtube"></i>
                                                <p>22k</p>
                                            </a>
                                        </div>
                                    </div>
                                </div><!-- end widget -->
                            </div>
                        </div><!-- end page-wrapper -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
        @endsection