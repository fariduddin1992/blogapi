@extends('backend.master')
@section('adminContent')
      <div class="row grid-margin">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Add Tags</h4>
              @if(Session::has('message'))
              <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
              @endif
              <form class="cmxform" id="commentForm" method="post" action="{{ route('admin.tag.update', $tag->slug) }}"  enctype="multipart/form-data">
                @csrf
                <fieldset>
                
                <div class="row">
                  <div class="col-lg-12">
                      <div class="form-group">
                        <label for="cname">Name (required)</label>
                        <input id="cname" class="form-control" name="name" value="{{$tag->name}}"  type="text" required>
                      </div> 
                  </div>
                </div>
                  <input class="btn btn-primary" type="submit" value="Update">
                </fieldset>
              </form>
            </div>
          </div>
        </div>
@endsection