@extends('master')
@section('content')
{{-- @section('title', $post_category[0]->subcategory->name ." Price in Bangladesh 2020" .'|'."findertechno") --}}
@section('canonical', url()->current())
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
                {{-- <h1><strong>{{$post_category[0]->subcategory->name}}</strong></h1> --}}
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

    <!-- END OF /. POST BLOCK SECTION -->
    <div class="container">
        <div class="row row-m">
            <!-- START MAIN CONTENT -->
            <div class="col-sm-8 col-p  main-content">
                <div class="">
                    <div class="post-inner categoty-style-1">
                        <!-- post body -->
                        <div class="post-body">
                            <div class="row row-m">
                                @foreach ($subCateogryPosts as $subCateogryPost)
                                <div class="col-sm-6 col-p">
                                    <article>
                                        <figure>
                                            <a
                                                href="{{url($subCateogryPost->category->name.'/'.$subCateogryPost->subcategory_id.'/'.'aritcles'.'/'.$subCateogryPost->id.'/'.$subCateogryPost->slug)}}"><img
                                                    src="{{url('public/images/post_images',$subCateogryPost->image)}}"
                                                    height="242" width="345" alt=""
                                                    class="img-responsive listImage"></a>
                                            <span class="post-category">Spans</span>
                                        </figure>
                                        <div class="post-info">
                                            <h3><a href="">{{$subCateogryPost->title}}</a>
                                            </h3>
                                        </div>
                                        {{-- <div class="price-info">
                                            <a
                                                href="{{url($post_categories->category->name.'/'.$post_categories->subcategory->name.'/'.$post_categories->id.'/'.$post_categories->slug)}}">
                                        <h6><span>৳</span>&nbsp{{$post_categories->price}}</h6>
                                        </a>

                                </div> --}}
                                </article>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- Post footer -->
                    <div class="post-footer">
                        <div class="row thm-margin">
                            <div class="col-xs-12 col-sm-12 col-md-12 thm-padding">
                                <!-- pagination -->
                                <ul class="pagination">
                                    {{ $subCateogryPosts->links() }}
                                </ul> <!-- /.pagination -->
                            </div>
                        </div>
                    </div> <!-- /.Post footer-->
                </div>
            </div>
        </div>
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

        <div class="col-sm-4 col-p brands">
            <h3>Category</h3>
            <ul>
                @foreach ($Categorypost as $Categoryposts)
                @foreach ($Categoryposts->subcategories as $subcategory)
                <li>
                    <a
                        href={{url($Categoryposts->name.'/'.$Categoryposts->id.'/'.$subcategory->name.'/'.$subcategory->id)}}>{{$subcategory->name}}</a>
                </li>
                @endforeach
                @endforeach
            </ul>
        </div>


    </div>
    </div>
</main>
@endsection