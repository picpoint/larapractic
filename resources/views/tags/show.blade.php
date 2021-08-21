@extends('layouts.category_layout')


@section('title', 'Посты :: Tags')


@section('content')
    <div class="page-wrapper">
        <div class="blog-custom-build">

            {{--@foreach($tags as $tag)--}}
                {{--<div class="blog-box wow fadeIn">--}}
                    {{--<div class="post-media">--}}
                        {{--<a href="marketing-single.html" title=""></a>--}}
                        {{--<a href="{{ route('posts.single', ['slug' => $post->slug]) }}" title="">--}}
                        {{--<img src="{{ $post->getImage() }}" alt="" class="img-fluid">--}}
                        {{--<img src="/public/assets/front/upload/market_blog_01.jpg" alt="" class="img-fluid">--}}
                        {{--<div class="hovereffect">--}}
                            {{--<span></span>--}}
                        {{--</div>--}}
                        {{--<!-- end hover -->--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    {{--<!-- end media -->--}}
                    {{--<div class="blog-meta big-meta text-center">--}}
                        {{--<h4><a href="#" title="">{{ $post->title }}</a></h4>--}}
                        {{--<p>{!! $post->description !!}</p>--}}
                        {{--<small><a href="{{ route('categories.single', ['slug' => $post->category->slug]) }}" title="">{{ $post->category->title }}</a></small>--}}
                        {{--<small><a href="#" title="">{{ $post->category->title }}</a></small>--}}
                        {{--<small><a href="marketing-single.html" title="">{{ $post->getPostDate() }}</a></small>--}}
                        {{--<small><a href="#" title=""><i class="fa fa-eye"></i>{{ $post->views }}</a></small>--}}
                    {{--</div><!-- end meta -->--}}
                {{--</div><!-- end blog-box -->--}}

                {{--<hr class="invis">--}}
            {{--@endforeach--}}

        </div>
    </div>

    <hr class="invis">

    <div class="row">
        <div class="col-md-12">
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    {{--{{ $posts->links() }}--}}
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div><!-- end col -->
    </div><!-- end row -->
    </div><!-- end col -->
@endsection