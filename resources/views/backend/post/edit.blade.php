@extends('backend.master')
@section('adminContent')
<div class="row grid-margin">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Post</h4>
        @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif
        <form class="cmxform" id="commentForm" method="post" action="{{url('/admin/post/edit',$post->slug)}}"
          enctype="multipart/form-data">
          {{ csrf_field() }}
          <fieldset>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="cname">Title (requireds)</label>

                  <input id="cname" class="form-control" name="title" value="{{$post->title}}" type="text" required>
                </div>
                <div class="form-group">
                  <label for="cname">Price</label>

                  <input id="cname" class="form-control" name="price" value="{{$post->price}}" type="text">
                </div>
                <div class="form-group">
                  <label for="cname">Meta description</label>
                  <input id="cname" class="form-control" value="{{$post->meta_description}}" name="meta_description"
                    type="text">
                </div>

                <div class="form-group">
                  <label>Post Category</label>
                  <select class="form-control" name="category_id" id="category_id" data-dependent="category">

                    <option value="">Please Select a category</option>

                    @foreach ($category as $categorys)


                    @if($post->category_id === $categorys->id)
                    <option value="{{$categorys->id}}" selected>{{$categorys->name}}</option>
                    @endif
                    <option value="{{$categorys->id}}">{{$categorys->name}}</option>

                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <select id="subcategory" name="subcategory_id" class="form-control input-lg dynamic"
                    data-dependent="city">
                    <option value="0">Select State</option>
                    @foreach ($subCategory as $subCategorys)
                    @if($post->subcategory_id === $subCategorys->id)
                    <option value="{{$subCategorys->id}}" selected>{{$subCategorys->name}}</option>
                    @endif
                    <option value="{{$subCategorys->id}}">{{$subCategorys->name}}</option>

                    @endforeach
                  </select>
                </div>


                <div class="form-group">
                  <label for="exampleTextarea1">Description</label>
                  <textarea class="form-control" id="summernoteExample" rows="4"
                    name="description">{{$post->description}}</textarea>
                </div>
              </div>

              <div class="col-lg-12">
                <div class="row">
                  <div class="col-md-3">
                    <img src="{{url('public/images/post_images',$post->image)}}" alt="Girl in a jacket" width="200"
                      height="100">
                  </div>
                  <div class="col-md-9">
                    <div class="form-group">
                      <label>Post Image upload</label>
                      <input type="file" name="image" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" name="image" class="form-control file-upload-info" disabled=""
                          placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Post Tags</label>
                  <select class="js-example-basic-multiple w-100" multiple="multiple" name="tag[]">
                    @foreach ($tag as $tags)
                    @if($post->id === $tags->id)
                    <option value="{{$tags->id}}" selected>{{$tags->name}}</option>
                    @else
                    <option value="{{$tags->id}}">{{$tags->name}}</option>
                    @endif
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="col-lg-12">

                <div class="form-group">
                  <label>Is Featured Post</label>
                  <p>Feature Post: <input type="checkbox" name="is_featured" {{$post->is_featured ==1? 'checked':null}}
                      value="1" /></p>
                </div>
              </div>
              {{-- second grid --}}

            </div>
            <input class="btn btn-primary" type="submit" value="Submit">
          </fieldset>
        </form>
      </div>
    </div>
  </div>
  @section('script')


  @endsection

  @endsection