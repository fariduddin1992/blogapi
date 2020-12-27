<div class="row">

    @foreach ($popularPosts as $popularPost)
        @if ($loop->index == 0)
        <div class="col-sm-6 main-post-inner bord-right">
                <article>
                    <figure>
                        <a href="#"><img src="{{url('public/assets/images/340x215-3.jpg')}}" height="242"
                                width="345" alt="" class="img-responsive"></a>
                        <span class="post-category">Travel</span>
                    </figure>
                    <div class="post-info">
                    <h3><a href="#">{{ $popularPost->title }}</a></h3>
                        <ul class="authar-info">
                            <li><i class="ti-timer"></i> May 15, 2016</li>
                            <li class="like"><a href="#"><i class="ti-thumb-up"></i>15 likes</a></li>
                        </ul>
                        <p class="p">Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque
                            laudantium, totamrem aperiam, eaque ipsa quae ab illo inventore</p>
                    </div>
                </article>
            </div>
        @endif
    @endforeach
    

    <div class="col-sm-6">
        <div class="news-grid-2">
            <div class="row row-margin">
                    @foreach ($popularPosts as $popularPost)
                    @if ($loop->index > 0)
                    <div class="col-xs-6 col-sm-6 col-md-6 col-padding">
                            <div class="grid-item">
                                <div class="grid-item-img">
                                    <a href="#">
                                        <img src="{{url('public/assets/images/165x110-1.jpg')}}" class="img-responsive"
                                            alt="">
                                        <div class="link-icon"><i class="fa fa-play"></i></div>
                                    </a>
                                </div>
                                <h5><a href="#" class="title">{{ $popularPost->title }}</a></h5>
                                <ul class="authar-info">
                                    <li>May 15, 2016</li>
                                    <li class="like hidden-sm"><a href="#">15 likes</a></li>
                                </ul>
                            </div>
                        </div>
                    @endif
                    @endforeach

            </div>
        </div>
    </div>
</div>