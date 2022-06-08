@extends('web.layout.master')

@section('content')
<div class="page-title lb single-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 hidden-xs-down hidden-sm-down ">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Blog</a></li>
                    {{-- <form action=" {{ route('') }} " method="post"></form> --}}
                    <div class="input-group">
                        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                        <button type="button" class="btn btn-outline-primary">search</button>
                    </div>
                </ol>
            </div><!-- end col -->       
            
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end page-title -->

<section class="section">
    <div class="container">
        <div class="row"> 
            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <div class="sidebar">
                    <div class="widget">
                        <div class="trend-videos">
                            <div class="blog-box">
                                <div class="blog-meta">
                                    @foreach ($categories as $category)
                                        <h4><a href="{{ route('web.category', $category->slug) }}" title=""> {{ $category->name }} </a></h4>

                                    @endforeach
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                        </div><!-- end videos -->
                    </div><!-- end widget -->
                </div>
            </div>
            
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper">
                    <div class="blog-grid-system">
                        <div class="row">
                            @foreach ($posts as $post)
                                <div class="col-md-6">
                                    <div class="blog-box">
                                        <div class="post-media">
                                            <a href="{{ route('web.post', $post->slug) }}" title="">
                                                <img src="{{ $post->imageUrl() }}" alt="" class="img-fluid" > 
                                                <div class="hovereffect">
                                                    <span></span>
                                                </div>
                                            </a>
                                        </div><!-- end media -->
                                        <div class="blog-meta big-meta">
                                            <span class="color-orange"><a href="tech-category-01.html" title="">{{ $post->category->name }}</a></span>
                                            <h4><a href="{{ route('web.post', $post->slug) }}" title=""> {{ $post->title }} </a></h4>
                                            <p>{{ $post->description }}</p>
                                            <small class="firstsmall"><a class="bg-orange" href="{{ route('web.category', $post->category->slug) }}" title=""> {{ $post->category->name}} </a></small>
                                            <small> {{ \Carbon\Carbon::parse($post->created_at)->format('d-m-Y') }}</small>
                                            <small>by {{ $post->user->name }}</small>
                                            <small><i class="fa fa-eye"></i> {{ $post->view_counts }} </small>
                                        </div><!-- end meta -->
                                    </div><!-- end blog-box -->
                                </div><!-- end col -->
                            @endforeach
                        </div><!-- end row -->
                    </div><!-- end blog-grid-system -->
                </div><!-- end page-wrapper -->

                <hr class="invis3">

                <div class="row">
                    <div class="col-md-12">
                        {!! $posts->links() !!}
                    </div><!-- end col -->
                </div><!-- end row -->
                
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
@endsection
