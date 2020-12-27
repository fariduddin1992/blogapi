@extends('backend.master')
@section('adminContent')
<div class="row grid-margin">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add Post</h4>
        @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif
        <form class="cmxform" id="commentForm" method="post" action="{{url('/admin/post/store')}}"
          enctype="multipart/form-data">
          {{ csrf_field() }}
          <fieldset>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="cname">Title (required)</label>
                  <input id="cname" class="form-control" name="title" value="{{ old('title') }}" type="text" required>
                </div>
                <div class="form-group">
                  <label for="cname">Price</label>
                  <input id="cname" class="form-control" value="{{ old('price') }}" name="price" type="text">
                </div>
                <div class="form-group">
                  <label for="cname">Meta description</label>
                  <input id="cname" class="form-control" name="meta_description" value="{{ old('meta_description') }}"
                    type="text">
                </div>

                <div class="form-group">
                  <label>Post Category</label>
                  <select class="form-control" name="category_id" id="category_id" data-dependent="category">
                    <option value="">Please Select a category</option>
                    @foreach ($category as $categorys)

                    <option value="{{$categorys->id}}">{{$categorys->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <select id="subcategory" name="subcategory_id" class="form-control input-lg dynamic"
                    data-dependent="city">
                    <option value="0">Select State</option>
                  </select>
                </div>


                <div class="form-group">
                  <label for="exampleTextarea1">Description</label>
                  <textarea class="form-control" id="summernoteExample" rows="4"
                    name="description">{{ old('summernoteExample') }}</textarea>
                </div>
              </div>

              <div class="col-lg-12">
                <div class="form-group">
                  <label>Post Image upload</label>
                  <input type="file" name="image" class="file-upload-default">
                  <div class="input-group col-xs-12">
                    <input type="text" name="image" value="{{ old('image') }}" class="form-control file-upload-info"
                      disabled="" placeholder="Upload Image">
                    <span class="input-group-append">
                      <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                    </span>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Post Tags</label>
                  <select class="js-example-basic-multiple w-100" multiple="multiple" name="tag[]">
                    @foreach ($tag as $tags)
                    <option value="{{$tags->id}}">{{$tags->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Is Featured Post</label>
                  <p>Feature Post: <input type="checkbox" name="is_featured" value="1" /></p>
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