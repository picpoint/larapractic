@extends('layouts.layout')


@section('title', 'Посты :: Home')


@section('header')
    <section id="cta" class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 align-self-center">
                    <h2>A digital marketing blog</h2>
                    <p class="lead"> Aenean ut hendrerit nibh. Duis non nibh id tortor consequat cursus at mattis felis. Praesent sed lectus et neque auctor dapibus in non velit. Donec faucibus odio semper risus rhoncus rutrum. Integer et ornare mauris.</p>
                    <a href="#" class="btn btn-primary">Try for free</a>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="newsletter-widget text-center align-self-center">
                        <h3>Subscribe Today!</h3>
                        <p>Subscribe to our weekly Newsletter and receive updates via email.</p>
                        <form class="form-inline" method="post">
                            <input type="text" name="email" placeholder="Add your email here.." required class="form-control" />
                            <input type="submit" value="Subscribe" class="btn btn-default btn-block" />
                        </form>
                    </div><!-- end newsletter -->
                </div>
            </div>
        </div>
    </section>
@endsection


@section('content')
    <div class="page-wrapper">
        <div class="blog-custom-build">

            @foreach($posts as $post)
                <div class="blog-box wow fadeIn">
                    <div class="post-media">
                        <a href="marketing-single.html" title=""></a>
{{--                        <a href="{{ route('posts.single', ['slug' => $post->slug]) }}" title="">    --}}
                            <img src="{{ $post->getImage() }}" alt="" class="img-fluid">
                            {{--<img src="/public/assets/front/upload/market_blog_01.jpg" alt="" class="img-fluid">--}}
                            <div class="hovereffect">
                                <span></span>
                            </div>
                            <!-- end hover -->
                        </a>
                    </div>
                    <!-- end media -->
                    <div class="blog-meta big-meta text-center">
                        <h4><a href="marketing-single.html" title="">{{ $post->title }}</a></h4>
                        <p>{!! $post->description !!}</p>
                        {{--<small><a href="{{ route('categories.single', ['slug' => $post->category->slug]) }}" title="">{{ $post->category->title }}</a></small>--}}
                        <small><a href="#" title="">{{ $post->category->title }}</a></small>
                        <small><a href="marketing-single.html" title="">{{ $post->getPostDate() }}</a></small>
                        <small><a href="#" title=""><i class="fa fa-eye"></i>{{ $post->views }}</a></small>
                    </div><!-- end meta -->
                </div><!-- end blog-box -->

                <hr class="invis">
            @endforeach

        </div>
    </div>

    <hr class="invis">

    <div class="row">
        <div class="col-md-12">
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    {{ $posts->links() }}
                    {{--<li class="page-item"><a class="page-link" href="#">1</a></li>--}}
                    {{--<li class="page-item"><a class="page-link" href="#">2</a></li>--}}
                    {{--<li class="page-item"><a class="page-link" href="#">3</a></li>--}}
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div><!-- end col -->
    </div><!-- end row -->
    </div><!-- end col -->
@endsection