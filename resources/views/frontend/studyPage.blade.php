@extends('master')
@section('content')

@if(Request::is('frontend/study'))
<style>
  button.navbar-toggle.hide {
    display: none;
  }
</style>
@else
<style>
  button.navbar-toggle.hide {
    display: block;
  }
</style>
@endif
<div class="container-fluid">
  <div class="row">
    <div class="col-md-2 nopadding">
      <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class=" border-right" id="sidebar-wrapper">
          <div class="w3-col l3" id="leftmenu">
            <div class="w3-light-grey w3-animate-left" id="leftmenuinner">
              <a href="javascript:void(0)" onclick="close_menu()" class="w3-closebtn w3-hide-large w3-large"
                style="padding:3px 12px;">×</a>

              @foreach ($sidebarMenu as $sidebarMenus)

              <a target="_top"
                href="{{url($sidebarMenus->category->name.'/'.$sidebarMenus->subcategory->id.'/'.'tutorial'.'/'.$sidebarMenus->id.'/'.$sidebarMenus->slug)}}"
                class="active">{{$sidebarMenus->title}}</a>
              @endforeach
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="col-sm-6 col-p  main-content">
      <div class="theiaStickySidebar">
        @foreach ($subCateogryPost as $subCateogryPosts)
        <div class="post_details_inner">
          <div class="post_details_block">
            <figure class="social-icon">
              <img src="assets/images/details-690x460-1.jpg" class="img-responsive" alt="" />
              <div>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#" class="hidden-xs"><i class="fa fa-linkedin"></i></a>
                <a href="#" class="hidden-xs"><i class="fa fa-pinterest-p"></i></a>
              </div>
            </figure>
            <h2>{{$subCateogryPosts->title}}</h2>
            <ul class="authar-info">
              <li><a href="#" class="link">by david hall</a></li>
              <li>May 29,2016</li>
              <li><a href="#" class="link">{{$subCateogryPosts->total_view}}</a></li>
            </ul>
            <p>{!!$subCateogryPosts->description !!}</p>
          </div>
          <!-- Post footer -->
          <div class="post-footer">
            <div class="row thm-margin">
              <div class="col-xs-12 col-sm-12 col-md-12 thm-padding">
                <!-- pagination -->
                <ul class="pagination">
                  {{-- <li class="disabled"><span class="ti-angle-left"></span></li>
                  <li class="active"><span>1</span></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li class="disabled"><span class="extend">...</span></li>
                  <li>
                  </li>
                  <li><a href="#">12</a></li>
                  <li><a href="#"><i class="ti-angle-right"></i></a></li> --}}
                  {{ $subCateogryPost->links() }}
                </ul> <!-- /.pagination -->
              </div>
            </div>
          </div>
        </div>
        @endforeach

        <!-- START RELATED ARTICLES -->
        {{-- <div class="post-inner post-inner-2">
          <!--post header-->
          <div class="post-head">
            <h2 class="title"><strong>Related </strong> Articles</h2>
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
                            href="{{url($related_post->category->name.'/'.'aritcles'.'/'.$related_post->id.'/'.$related_post->slug)}}">
        <img src="{{url('public/images/post_images',$related_post->image)}}" class="img-responsive"
          alt={{$related_post->title}} title={{$related_post->title}}>
        <div class="link-icon"><i class="fa fa-play"></i></div>
        </a>
      </div>
      <h5><a href="{{url($related_post->category->name.'/'.'aritcles'.'/'.$related_post->id.'/'.$related_post->slug)}}"
          class="title">
          {{ $related_post->title }}
        </a></h5>
    </div>
  </div>
  @endforeach
</div>
</div>
</div>

<!-- item two -->
</div>
</div>
<!-- Post footer -->
<div class="post-footer">
  <div class="row thm-margin">
    <div class="col-xs-12 col-sm-8 col-md-9 thm-padding">
      <a href="#" class="more-btn">More popular posts</a>
    </div>
    <div class="hidden-xs col-sm-4 col-md-3 thm-padding">
      <div class="social">
        <ul>
          <li>
            <div class="share transition">
              <a href="#" target="_blank" class="ico fb"><i class="fa fa-facebook"></i></a>
              <a href="#" target="_blank" class="ico tw"><i class="fa fa-twitter"></i></a>
              <a href="#" target="_blank" class="ico gp"><i class="fa fa-google-plus"></i></a>
              <a href="#" target="_blank" class="ico pin"><i class="fa fa-pinterest"></i></a>
              <i class="ti-share ico-share"></i>
            </div>
          </li>
          <li><a href="#"><i class="ti-heart"></i></a></li>
          <li><a href="#"><i class="ti-twitter"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
</div> --}}
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
                    <div class="comment-header"> <cite class="comment-author">- Mozammel Hoque</cite>
                      <time datetime="2012-10-27" class="comment-datetime">25 October 2016 at 12.27 pm</time>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium
                      vitae, praesentium optio, sapiente distinctio illo?</p>
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
                      <div class="comment-header"> <cite class="comment-author">- Tahmina Akthr</cite>
                        <time datetime="2012-10-27" class="comment-datetime">25 October 2016 at 12.27 pm</time>
                      </div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium
                        vitae, praesentium optio, sapiente distinctio illo?</p>
                      <a href="#" class="btn btn-news"> Reply</a>
                    </div>
                  </div>
                </li>
                <li>
                  <!-- Avatar -->
                  <div class="comment-avatar"><img src="assets/images/avatar-1.jpg" alt=""></div>
                  <div class="comment-box">
                    <div class="comment-content">
                      <div class="comment-header"> <cite class="comment-author">- Mozammel Hoque</cite>
                        <time datetime="2012-10-27" class="comment-datetime">25 October 2016 at 12.27 pm</time>
                      </div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium
                        vitae, praesentium optio, sapiente distinctio illo?</p>
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
                    <div class="comment-header"> <cite class="comment-author">- Tahmina Akthr</cite>
                      <time datetime="2012-10-27" class="comment-datetime">25 October 2016 at 12.27 pm</time>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium
                      vitae, praesentium optio, sapiente distinctio illo?</p>
                    <a href="#" class="btn btn-news"> Reply</a>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div> --}}
<!-- END OF /. COMMENT -->
<!-- START COMMENTS FORMS -->
{{-- <form class="comment-form" action="#" method="post">
          <h3><strong>Leave</strong> a Comment</h3>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="name">full name*</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Your name*">
              </div>
            </div>
            <div class="col-sm-6">
              <label for="email">Email*</label>
              <div class="form-group">
                <input type="text" class="form-control" id="email" name="email" placeholder="Your email address here">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="name">website</label>
                <input type="text" class="form-control" id="website" name="website" placeholder="Your website url">
              </div>
            </div>
            <div class="col-sm-6">
              <label for="email">Subject</label>
              <div class="form-group">
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Write subject here">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="email">message</label>
            <textarea class="form-control" id="message" name="message" placeholder="Your Comment*" rows="5"></textarea>
          </div>
          <a href="#" class="btn btn-news"> Submit</a>
        </form> --}}
<!-- END OF /. COMMENTS FORMS -->
</div>
</div>
<div class="col-sm-4 col-p rightSidebar">
  <div class="theiaStickySidebar">
    <!-- START ADVERTISEMENT -->
    <div class="add-inner">
      <img src="assets/images/add320x270-1.jpg" class="img-responsive" alt="">
    </div>
    <!-- END OF /. ADVERTISEMENT -->
    <!-- START SOCIAL ICON -->
    {{-- <div class="social-media-inner">
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
        </div> --}}
    <!-- END OF /. SOCIAL ICON -->
    <!-- START NAV TABS -->
    <div class="tabs-wrapper">
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Most
            Viewed</a></li>
        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Popular
            news</a></li>
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
                    <a href="" class="thumb">
                      <img src="{{url('public/images/post_images',$lastestPosts->image)}}" alt={{$lastestPosts->title}}
                        title={{$lastestPosts->title}} class="img-responsive popularImage"
                        title={{$lastestPosts->tilte}}></a>
                  </a>
                </div>
                <div class="post-info-2">
                  <h5><a
                      href="{{url($lastestPosts->category->name.'/'.'aritcles'.'/'.$lastestPosts->id.'/'.$lastestPosts->slug)}}"
                      class="title">{{$lastestPosts->title}}</a></h5>
                  <ul class="authar-info">
                    <li><i class="ti-timer"></i>{{$lastestPosts->created_at->format('M D,Y')}}
                    </li>
                  </ul>
                </div>
              </div>

              @endforeach
            </div>
          </div>
        </div>
        <!-- Tab panels two -->
        <div role="tabpanel" class="tab-pane fade" id="profile">
          <div class="news-list">
            @foreach ($popularPosts as $popularPost)
            <div class="news-list-item">
              <div class="img-wrapper">
                <a href="{{url($popularPost->category->name.'/'.'aritcles'.'/'.$popularPost->id.'/'.$popularPost->slug)}}"
                  class="thumb"><img src="{{url('public/images/post_images',$popularPost->image)}}"
                    alt={{$popularPost->title}} class="img-responsive popularImage" title={{$popularPost->tilte}}>
                </a>

                </a>
              </div>
              <div class="post-info-2">
                <h5><a
                    href="{{url($popularPost->category->name.'/'.'aritcles'.'/'.$popularPost->id.'/'.$popularPost->slug)}}"
                    class="title">{{$popularPost->title}}</a></h5>
                <ul class="authar-info">
                  <li><i class="ti-timer"></i>
                    {{$popularPost->created_at->format('M D,Y')}}
                  </li>
                  <li class="view"><a href="#">{{$popularPost->total_view}} view</a>
                  </li>
                </ul>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    <!-- END OF /. NAV TABS -->
  </div>
</div>
</div>
</div>
</div>


</div>


<!-- /#wrapper -->

<!-- Bootstrap core JavaScript -->
{{-- <script src="{{url('public/assets/sidebar/vendor/jquery/jquery.min.js')}}"></script> --}}
{{-- <script src="{{url('public/assets/sidebar/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script> --}}



<!-- Menu Toggle Script -->


</body>

</html>
@endsection