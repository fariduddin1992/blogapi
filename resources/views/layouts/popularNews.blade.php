<!-- Tab panels one -->
<div class="tab-content">
    <div role="tabpanel" class="tab-pane fade in active" id="home">

        <div class="most-viewed">
            <ul id="most-today" class="content tabs-content">
                	@php
                        $popularPost =  App\Models\Post::where('total_view', '>', 0)
                                        ->select('id','title')
                                        ->orderBy('total_view', 'desc')
                                        ->limit(5)
                                        ->get();	
                    @endphp
                        <?php $i=1;?>
				@foreach ($popularPost as $popularPosts)
                    <li><span class="count">{{$i++}}</span><span class="text"><a href="#">{{$popularPosts->title}}</a></span></li>
                @endforeach
            </ul>
        </div>
    </div>
    <!-- Tab panels two -->
    <div role="tabpanel" class="tab-pane fade" id="profile">
        <div class="popular-news">
            <div class="p-post">
                <h4><a href="#">It is a long established fact that a reader will be distracted by </a></h4>
                <ul class="authar-info">
                    <li class="date"><a href="#"><i class="ti-timer"></i> May 15, 2016</a></li>
                    <li class="like"><a href="#"><i class="ti-thumb-up"></i>15 likes</a></li>
                </ul>
                <div class="reatting-2">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
            </div>
            <div class="p-post">
                <h4><a href="#">It is a long established fact that a reader will be distracted by </a></h4>
                <ul class="authar-info">
                    <li class="date"><a href="#"><i class="ti-timer"></i> May 15, 2016</a></li>
                    <li class="like"><a href="#"><i class="ti-thumb-up"></i>15 likes</a></li>
                </ul>
                <div class="reatting-2">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
            </div>
            <div class="p-post">
                <h4><a href="#">It is a long established fact that a reader will be distracted by </a></h4>
                <ul class="authar-info">
                    <li class="date"><a href="#"><i class="ti-timer"></i> May 15, 2016</a></li>
                    <li class="like"><a href="#"><i class="ti-thumb-up"></i>15 likes</a></li>
                </ul>
                <div class="reatting-2">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- END OF /. NAV TABS -->