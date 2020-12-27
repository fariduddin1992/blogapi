@extends('master')
@section('content')
<main class="page_main_wrapper">
	<!-- START NEWSTRICKER -->

	<!--  END OF /. NEWSTRICKER -->
	<!-- START POST BLOCK SECTION -->
	@include('layouts.slider')
	<!-- END OF /. POST BLOCK SECTION -->
	<div class="container">
		<div class="row row-m">
			<!-- START MAIN CONTENT -->
			<div class="col-sm-8 col-p main-content">
				<div class="post-inner categoty-style-1">
					<!-- post body -->
					<div class="post-body">
						{{-- <div class="row row-m">
							@foreach ($Categorypost as $Categoryposts)
							@if($Categoryposts->name == "Phone")
							@foreach($Categoryposts->posts as $post)
							<div class="col-sm-6 col-p">
								<article>
									<figure>
										<a
											href="{{url($Categoryposts->name.'/'.$post->subcategory->name.'/'.$post->id.'/'.$post->slug)}}"><img
							src="{{url('public/images/post_images',$post->image)}}" height="242" width="345" alt=""
							class="img-responsive listImage"></a>

						<span class="post-category">{{$post->subcategory->name}}</span>

						</figure>
						<div class="post-info">
							<h3>
								<a
									href="{{url($Categoryposts->name.'/'.$post->subcategory->name.'/'.$post->id.'/'.$post->slug)}}">{{$post->title}}</a>
							</h3>
						</div>
						</article>
					</div>
					@endforeach
					@endif
					@endforeach

				</div> --}}
				<div class="row row-m">
					@foreach ($posts as $post)
					<p></p>
					@if($post ->category->name !== "Phone")
					<div class="col-sm-6 col-p">
						<article>
							<figure>
								<a
									href="{{url($post->category->name.'/'.$post ->subcategory_id.'/'.'aritcles'.'/'.$post->id.'/'.$post->slug)}}"><img
										src="{{url('public/images/post_images',$post->image)}}" height="242" width="345"
										alt="" class="img-responsive listImage"></a>

								<span class="post-category"></span>

							</figure>
							<div class="post-info">
								<h3>
									<a href="">{{$post->title}}</a>
								</h3>
							</div>
						</article>
					</div>
					@endif
					@endforeach

				</div>
			</div>

		</div>

		<!--  END OF /. POST CATEGORY STYLE TWO (Travel news) -->
	</div>
	<div class="col-sm-4 col-p brands">
		<h3>Category</h3>
		<ul>
			@foreach ($Categorypost as $Categoryposts)
			{{-- @if($Categoryposts->posts->id>0) --}}
			@foreach ($Categoryposts->subcategories as $subcategory)
			<li>
				<a
					href={{url($Categoryposts->name.'/'.$Categoryposts->id.'/'.$subcategory->name.'/'.$subcategory->id)}}>{{$subcategory->name}}</a>
			</li>
			@endforeach
			{{-- @endif --}}
			@endforeach
		</ul>
	</div>

	</div>
	</div>
	<!-- END OF /. SIDE CONTENT -->
	</div>
	</div>

	</div>
	</div>
	</div>
	</div>

</main>

@endsection