@extends('master')
@section('content')
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <h1><strong>{{$post_category[0]->category->name}}</strong></h1>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <ol class="breadcrumb">
                    <li><a href="{{url('/')}}">Home</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>

<main class="page_main_wrapper">
    <!-- START POST BLOCK SECTION -->
    <section class="slider-inner">
        <div class="container">
            <div class="row thm-margin">
                <div class="col-xs-12 col-sm-6 col-md-6 thm-padding">
                    <div class="slider-wrapper">
                        <div>
                            <!-- Slider item one -->
                            @foreach ($post_category as $post_categories)
                            @if($post_categories->is_featured == 1)
                            @if ($loop->index == 0)
                            <div class="item">
                                <div class="slider-post post-height-1">
                                    <a href="{{url($post_categories->category->name.'/'.'aritcles'.'/'.$post_categories->id.'/'.$post_categories->slug)}}"
                                        class="news-image"><img
                                            src="{{url('public/images/post_images',$post_categories->image)}}" alt=""
                                            class="img-responsive"></a>

                                    <div class="post-text">
                                        <span class="post-category">Business</span>
                                        <h2><a
                                                href="{{url($post_categories->category->name.'/'.'aritcles'.'/'.$post_categories->id.'/'.$post_categories->slug)}}">{{$post_categories->title}}
                                            </a></h2>
                                        <ul class="authar-info">
                                            <li class="authar"><a href="#"></a></li>
                                            <li class="date">May 29,2016</li>
                                            <li class="view"><a href="#">25 views</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endif
                            @endforeach

                            <!-- /.Slider item one -->

                            <!-- /.Slider item two -->

                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 thm-padding">
                    <div class="row slider-right-post thm-margin">
                        @foreach ($post_category as $post_categories)
                        @if($post_categories->is_featured == 1)
                        @if ($loop->index > 0)
                        <div class="col-xs-6 col-sm-6 col-md-6 thm-padding">
                            <div class="slider-post post-height-2">
                                <a href="{{url($post_categories->category->name.'/'.'aritcles'.'/'.$post_categories->id.'/'.$post_categories->slug)}}"
                                    class="news-image"><img
                                        src="{{url('public/images/post_images',$post_categories->image)}}" alt=""
                                        class="img-responsive"></a>
                                <div class="post-text">
                                    <span class="post-category">Travel</span>
                                    <h4><a href="#">{{$post_categories->title}}</a></h4>
                                    <ul class="authar-info">
                                        <li class="authar hidden-xs hidden-sm"><a href="#">by david hall</a></li>
                                        <li class="hidden-xs">May 29,2017</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endif
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF /. POST BLOCK SECTION -->
    <div class="container">
        <div class="row row-m">
            <!-- START MAIN CONTENT -->
            <div class="col-sm-8 col-p  main-content">
                <div class="theiaStickySidebar">
                    <div class="post-inner categoty-style-1">
                        <!-- post body -->
                        <div class="post-body">
                            <div class="row row-m">
                                @foreach ($post_category as $post_categories)
                                @if($post_categories->is_featured !== 1)
                                <div class="col-sm-6 col-p">
                                    <article>
                                        <figure>
                                            <a href="#"><img
                                                    src="{{url('public/images/post_images',$post_categories->image)}}"
                                                    height="242" width="345" alt="" class="img-responsive"></a>
                                            <span class="post-category">Business</span>
                                        </figure>
                                        <div class="post-info">
                                            <h3><a href="#">{{$post_categories->title}}</a></h3>
                                            <ul class="authar-info">
                                                <li><i class="ti-timer"></i> May 15, 2016</li>
                                                <li><a href="#" class="link"><i class="ti-thumb-up"></i>15 likes</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                        <!-- Post footer -->
                        {{-- <div class="post-footer">
                            <div class="row thm-margin">
                                <div class="col-xs-12 col-sm-12 col-md-12 thm-padding">
                                    <!-- pagination -->
                                    <ul class="pagination">
                                        <li class="disabled"><span class="ti-angle-left"></span></li>
                                        <li class="active"><span>1</span></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li class="disabled"><span class="extend">...</span></li>
                                        <li>
                                        <li><a href="#">12</a></li>
                                        <li><a href="#"><i class="ti-angle-right"></i></a></li>
                                    </ul> <!-- /.pagination -->
                                </div>
                            </div>
                        </div> <!-- /.Post footer--> --}}
                    </div>
                </div>
            </div>
            <!-- END OF /. MAIN CONTENT -->
            <!-- START SIDE CONTENT -->
            <div class="col-sm-4 col-p rightSidebar">
                <div class="theiaStickySidebar">
                    <!-- START SOCIAL ICON -->
                    <div class="social-media-inner">
                        <ul class="social-media clearfix">
                            <li>
                                <a href="#" class="rss">
                                    <i class="fa fa-rss"></i>
                                    <div>2,035</div>
                                    <p>Subscribers</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="fb">
                                    <i class="fa fa-facebook"></i>
                                    <div>3,794</div>
                                    <p>Fans</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="g_plus">
                                    <i class="fa fa-google-plus"></i>
                                    <div>941</div>
                                    <p>Followers</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="you_tube">
                                    <i class="fa fa-youtube-play"></i>
                                    <div>7,820</div>
                                    <p>Subscribers</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="twitter">
                                    <i class="fa fa-twitter"></i>
                                    <div>1,562</div>
                                    <p>Followers</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="pint">
                                    <i class="fa fa-pinterest"></i>
                                    <div>1,310</div>
                                    <p>Followers</p>
                                </a>
                            </li>
                        </ul> <!-- /.social icon -->
                    </div>
                    <!-- END OF /. SOCIAL ICON -->
                    <!-- START ADVERTISEMENT -->
                    {{-- <div class="add-inner">
                        <img src="assets/images/add320x270-1.jpg" class="img-responsive" alt="">
                    </div> --}}
                    <!-- END OF /. ADVERTISEMENT -->
                    <!-- START NAV TABS -->
                    <div class="tabs-wrapper">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                                    data-toggle="tab">Latest News</a></li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab"
                                    data-toggle="tab">Popular news</a></li>
                        </ul>
                        <!-- Tab panels one -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home">

                                <div class="most-viewed">
                                    <div class="news-list">
                                        @foreach ($lastestPost as $lastestPosts)
                                        <div class="news-list-item">
                                            <div class="img-wrapper">
                                                <a href="{{url($lastestPosts->category->name.'/'.'aritcles'.'/'.$lastestPosts->id.'/'.$lastestPosts->slug)}}"
                                                    class="thumb">
                                                    <a href="" class="thumb"><img
                                                            src="{{url('public/images/post_images',$lastestPosts->image)}}"
                                                            alt={{$lastestPosts->title}}
                                                            class="img-responsive popularImage"
                                                            title={{$lastestPosts->tilte}}></a>

                                                </a>
                                            </div>
                                            <div class="post-info-2">
                                                <h5><a href="{{url($lastestPosts->category->name.'/'.'aritcles'.'/'.$lastestPosts->id.'/'.$lastestPosts->slug)}}"
                                                        class="title">{{$lastestPosts->title}}</a></h5>
                                                <ul class="authar-info">
                                                    <li><i class="ti-timer"></i> May 15, 2016</li>
                                                </ul>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- Tab panels two -->
                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                <div class="popular-news">
                                    <div class="p-post">
                                        <div class="news-list">
                                            <div class="news-list-item">
                                                <div class="img-wrapper">
                                                    <a href="#" class="thumb">
                                                        <img src="{{url('/')}}/public/assets/images/115x85-4.jpg" alt=""
                                                            class="img-responsive">
                                                        <div class="link-icon">
                                                            <i class="fa fa-camera"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="post-info-2">
                                                    <h5><a href="#" class="title">Cooking Recipes Anytime And
                                                            Anywhere</a></h5>
                                                    <ul class="authar-info">
                                                        <li><i class="ti-timer"></i> May 15, 2016</li>
                                                        <li class="like hidden-xs hidden-sm"><a href="#"><i
                                                                    class="ti-thumb-up"></i>15 likes</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="news-list-item">
                                                <div class="img-wrapper">
                                                    <a href="#" class="thumb">
                                                        <img src="assets/images/115x85-3.jpg" alt=""
                                                            class="img-responsive">
                                                        <div class="link-icon">
                                                            <i class="fa fa-camera"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="post-info-2">
                                                    <h5><a href="#" class="title">Cooking Recipes Anytime And
                                                            Anywhere</a></h5>
                                                    <ul class="authar-info">
                                                        <li><i class="ti-timer"></i> May 15, 2016</li>
                                                        <li class="like hidden-xs hidden-sm"><a href="#"><i
                                                                    class="ti-thumb-up"></i>15 likes</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="news-list-item">
                                                <div class="img-wrapper">
                                                    <a href="#" class="thumb">
                                                        <img src="assets/images/115x85-2.jpg" alt=""
                                                            class="img-responsive">
                                                        <div class="link-icon">
                                                            <i class="fa fa-camera"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="post-info-2">
                                                    <h5><a href="#" class="title">Cooking Recipes Anytime And
                                                            Anywhere</a></h5>
                                                    <ul class="authar-info">
                                                        <li><i class="ti-timer"></i> May 15, 2016</li>
                                                        <li class="like hidden-xs hidden-sm"><a href="#"><i
                                                                    class="ti-thumb-up"></i>15 likes</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END OF /. NAV TABS -->
                </div>
            </div>
            <!-- END OF /. SIDE CONTENT -->
        </div>
    </div>
</main>
@endsection