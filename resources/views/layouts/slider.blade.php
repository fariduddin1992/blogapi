<section class="slider-inner">
  <div class="container">
    <div class="row thm-margin">
      <div class="col-xs-12 col-sm-12 col-md-12 thm-padding">
        <div class="slider-wrapper">
          <div id="owl-slider" class="owl-carousel owl-theme">
            <!-- Slider item one -->
            <?php  $featuredPost = App\Models\Post::where('is_featured','=',1)->where('is_approved',1)->limit(10)->orderBy('id','desc')->get();
            ?>
            @foreach ($featuredPost as $featuredPosts)
            @if($featuredPosts->category->name == "Phone")
            <div class="item">
              <div class="slider-post post-height-1">
                <a href="{{url($featuredPosts->category->name.'/'.$featuredPosts->subcategory->name.'/'.$featuredPosts->id.'/'.$featuredPosts->slug)}}"
                  class="news-image">
                  <img src="{{url('public/images/post_images',$featuredPosts->image)}}" alt={{$featuredPosts->title}}
                    title={{$featuredPosts->title}} class="img-responsive"></a>
                <div class="post-text">
                  <h1><a
                      href="{{url($featuredPosts->category->name.'/'.$featuredPosts->subcategory->name.'/'.$featuredPosts->id.'/'.$featuredPosts->slug)}}">{{$featuredPosts->title}}</a>
                  </h1>
                  <ul class="authar-info">
                    {{-- <li class="authar"><a href="#">{{$featuredPosts->user->name}}</a></li> --}}
                    <li class="date">{{$featuredPosts->created_at->format('M D,Y')}}</li>
                    {{-- <li class="view"><a href="#">{{$featuredPosts->total_view}} view</a></li> --}}
                  </ul>
                </div>
              </div>
            </div>
            @endif

            @endforeach
            <!-- /.Slider item one -->
          </div>
        </div>
      </div>

    </div>
  </div>
  </div>
</section>