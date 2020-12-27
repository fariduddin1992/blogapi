@extends('master')
@section('content')
<div class="page-title">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6">
        <h1><strong>Contact</strong></h1>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6">
        <ol class="breadcrumb">
          <li><a href="{{url('/')}}">Home</a></li>
          <li class="active"><a href="contact.html">Contact</a></li>
        </ol>
      </div>
    </div>
  </div>
</div>
<main class="page_main_wrapper">
  <div class="container">
    <div class="row row-m">
      <div class="col-sm-8 main-content col-p">
        <div class="theiaStickySidebar">
          <!-- START CONTACT FORM AREA -->
          <div class="contact_form_inner">
            <div class="panel_inner">

              <div class="panel_body">
                <form class="comment-form" action="{{url('/frontend/contactus/store')}}" method="post">
                  @csrf
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
                  {{-- <a href="#" class="btn btn-news"> Submit</a> --}}
                  <input type="submit" name="sub" class="btn btn-news" />
                </form>
              </div>
            </div>
          </div>
          <!-- END OF CONTACT FORM AREA -->
          <div class="post-inner post-inner-2">
            <!--post header-->
            <div class="post-head">
              <h2 class="title"><strong>Related </strong> Post</h2>
            </div>
            <!-- post body -->
            <div class="post-body">
              <div id="post-slider-2" class="owl-carousel owl-theme">
                <!-- item one -->
                {{-- <div class="item">
                  <div class="news-grid-2">
                    <div class="row row-margin">
                      @foreach ($related_posts as $related_post)
                      <div class="col-xs-6 col-sm-4 col-md-4 col-padding">
                        <div class="grid-item">
                          <div class="grid-item-img">
                            <a
                              href="{{url($related_post->category->name.'/'.'aritcles'.'/'.$related_post->id.'/'.$related_post->slug)}}">{{$related_post->slug}}">
                <img src="{{url('public/images/post_images',$related_post->image)}}" class="img-responsive"
                  alt={{$related_post->title}} title={{$related_post->title}}>
                <div class="link-icon"><i class="fa fa-play"></i></div>
                </a>
              </div>
              <h5><a
                  href="{{url($related_post->category->name.'/'.'aritcles'.'/'.$related_post->id.'/'.$related_post->slug)}}">{{$related_post->slug}}"
                  class="title">
                  {{ $related_post->title }}
                </a>
              </h5>

            </div>
          </div>

          @endforeach
        </div>
      </div>
    </div> --}}

  </div>
  </div>

  </div>
  </div>
  </div>
  <div class="col-sm-4 col-p brands">
    <h3>Brands</h3>
    <ul>
      {{-- @foreach ($Categorypost as $Categoryposts)
          @if($Categoryposts->name == "Phone")
          @foreach ($Categoryposts->subcategories as $subcategory)
          <li><a href={{url('mobile',$subcategory->name)}}>{{$subcategory->name}}</a></li>
      @endforeach
      @endif
      @endforeach
    </ul>
  </div> --}}
  </div>
  </div>
</main>
@endsection