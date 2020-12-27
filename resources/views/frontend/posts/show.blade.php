@extends('master')
@section('content')

@if($post->category->name =="Phone")
@section('title', $post->subcategory->name ." price in Bangladesh ".date('Y') .'|'."findertechno")
@else
@section('title', $post->title)
@endif

@section('description',substr($post->meta_description,0,600))
@section('canonical', url()->current())

@section('facebook_meta')
<meta property="og:url"
    content="{{url($post->category->name.'/'.$post ->subcategory_id.'/'.'aritcles'.'/'.$post->id.'/'.$post->slug)}}">
<meta property="og:type" content="website" />
<meta property="og:title" content="{{$post->title}}">
<meta property="og:description" content="{{$post->meta_description}}">
<meta property="og:image" content="{{url('public/images/post_images',$post->image)}}">
<meta property="og:image:secure_url" content="{{url('public/images/post_images',$post->image)}}">
@endsection
@section('twitter_meta')
<meta name="twitter:title"
    content="{{$post->subcategory->name ." price in Bangladesh ".date('Y') .'|'."findertechno"}}">
<meta name="twitter:description" content="{{$post->meta_description}}">
<meta name="twitter:image" content={{url('public/images/post_images',$post->image)}}>
<meta name="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{url($post->name.'/'.$post->subcategory->name.'/'.$post->id.'/'.$post->slug)}}">
@endsection
<main class="page_main_wrapper">
    <!-- START PAGE TITLE -->
    <div class="page-title">
        <div class="container">

        </div>
    </div>
    <!-- END OF /. PAGE TITLE -->
    <div class="container">
        <div class="row row-m">
            <!-- START MAIN CONTENT -->
            <div class="col-sm-8 col-p  main-content">
                <div class="">
                    <div class="post_details_inner">
                        <div class="post_details_block details_block2">

                            <h1>{{ $post->title }}</h1>
                            <ul class="authar-info">
                                <li><a href="#" class="link">{{$post->user->name}}</a></li>
                                <li>{{$post->created_at->format('M D,Y')}}</li>
                                <li><a href="#" class="link">{{$post->total_view}} view</a></li>
                            </ul>
                            <figure class="social-icon">
                                <img src="{{url('public/images/post_images',$post->image)}}" class="img-responsive"
                                    alt={{$post->title}} tilte={{$post->title}} />
                            </figure>
                            <p>{!! $post->description !!}</p>
                        </div>
                        <!-- Post footer -->



                    </div>

                    <!-- START RELATED ARTICLES -->
                    <div class="post-inner post-inner-2">
                        <!--post header-->
                        <div class="post-head">
                            <h2 class="title"><strong>Related </strong> Post</h2>
                        </div>
                        <!-- post body -->
                        <div class="post-body">
                            <div id="post-slider-2" class="owl-carousel owl-theme">
                                <!-- item one -->
                                <div class="item">
                                    <div class="news-grid-2">
                                        <div class="row row-margin">
                                            @foreach ($related_posts as $related_post)

                                            <div class="col-xs-6 col-sm-4 col-md-4 col-padding">
                                                <div class="grid-item">
                                                    <div class="grid-item-img">
                                                        <a
                                                            href="{{url($related_post->category->name.'/'.$post->subcategory->name.'/'.$post->id.'/'.$post->slug)}}">
                                                            <img src="{{url('public/images/post_images',$related_post->image)}}"
                                                                class="img-responsive relatedpostImage"
                                                                alt={{$related_post->title}}
                                                                title={{$related_post->title}}>
                                                            {{-- <div class="link-icon"><i class="fa fa-play"></i></div> --}}
                                                        </a>
                                                    </div>
                                                    <h5 class="relatedpostTitle"><a
                                                            href="{{url($related_post->name.'/'.$post->subcategory->name.'/'.$post->id.'/'.$post->slug)}}"
                                                            class="title">
                                                            {{ $related_post->title }}
                                                        </a>
                                                    </h5>

                                                </div>
                                            </div>

                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <!-- item two -->
                            </div>
                        </div>

                    </div>
                    <!-- END OF /. RELATED ARTICLES -->
                    <!-- START COMMENT -->
                    {{-- <div class="comments-container">
                        <h3>Comments (3)</h3>
                        <ul class="comments-list">
                            <li>
                                <div class="comment-main-level">
                                    <!-- Avatar -->
                                    <div class="comment-avatar"><img src="assets/images/avatar-1.jpg" alt=""></div>
                                    <div class="comment-box">
                                        <div class="comment-content">
                                            <div class="comment-header"> <cite class="comment-author">- Mozammel
                                                    Hoque</cite>
                                                <time datetime="2012-10-27" class="comment-datetime">25 October 2016 at
                                                    12.27 pm</time>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis
                                                animi et iure laudantium vitae, praesentium optio, sapiente distinctio
                                                illo?</p>
                                            <a href="#" class="btn btn-news"> Reply</a>
                                        </div>
                                    </div>
                                </div>
                                <ul class="comments-list reply-list">
                                    <li>
                                        <!-- Avatar -->
                                        <div class="comment-avatar"><img src="assets/images/avatar-1.jpg" alt=""></div>
                                        <div class="comment-box">
                                            <div class="comment-content">
                                                <div class="comment-header"> <cite class="comment-author">- Tahmina
                                                        Akthr</cite>
                                                    <time datetime="2012-10-27" class="comment-datetime">25 October 2016
                                                        at 12.27 pm</time>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis
                                                    animi et iure laudantium vitae, praesentium optio, sapiente
                                                    distinctio illo?</p>
                                                <a href="#" class="btn btn-news"> Reply</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <!-- Avatar -->
                                        <div class="comment-avatar"><img src="assets/images/avatar-1.jpg" alt=""></div>
                                        <div class="comment-box">
                                            <div class="comment-content">
                                                <div class="comment-header"> <cite class="comment-author">- Mozammel
                                                        Hoque</cite>
                                                    <time datetime="2012-10-27" class="comment-datetime">25 October 2016
                                                        at 12.27 pm</time>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis
                                                    animi et iure laudantium vitae, praesentium optio, sapiente
                                                    distinctio illo?</p>
                                                <a href="#" class="btn btn-news"> Reply</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="comment-main-level">
                                    <!-- Avatar -->
                                    <div class="comment-avatar"><img src="assets/images/avatar-1.jpg" alt=""></div>
                                    <div class="comment-box">
                                        <div class="comment-content">
                                            <div class="comment-header"> <cite class="comment-author">- Tahmina
                                                    Akthr</cite>
                                                <time datetime="2012-10-27" class="comment-datetime">25 October 2016 at
                                                    12.27 pm</time>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis
                                                animi et iure laudantium vitae, praesentium optio, sapiente distinctio
                                                illo?</p>
                                            <a href="#" class="btn btn-news"> Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div> --}}
                    <!-- END OF /. COMMENT -->
                    <!-- START COMMENTS FORMS -->
                    <form class="comment-form" action="#" method="post">
                        <h3><strong>Leave</strong> a Comment</h3>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="name">full name*</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Your name*">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="email">Email*</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email" name="email"
                                        placeholder="Your email address here">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="name">website</label>
                                    <input type="text" class="form-control" id="website" name="website"
                                        placeholder="Your website url">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="email">Subject</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="subject"
                                        placeholder="Write subject here">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">message</label>
                            <textarea class="form-control" id="message" name="message" placeholder="Your Comment*"
                                rows="5"></textarea>
                        </div>
                        <a href="#" class="btn btn-news"> Submit</a>
                    </form>
                    <!-- END OF /. COMMENTS FORMS -->
                </div>
            </div>
            <!-- END OF /. MAIN CONTENT -->
            <!-- START SIDE CONTENT -->
            <div class="col-sm-4 col-p brands">
                <h3>Article</h3>
                </p>
                <ul>
                    @foreach ($subCateogryPosts as $subCateogryPost)
                    <li><a
                            href="{{url($subCateogryPost->category->name.'/'.$subCateogryPost->subcategory_id.'/'.'aritcles'.'/'.$subCateogryPost->id.'/'.$subCateogryPost->slug)}}">{{$subCateogryPost->title}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <!-- END OF /. SIDE CONTENT -->
        </div>
    </div>
</main>

@endsection