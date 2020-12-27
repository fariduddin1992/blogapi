@extends('backend.master')
@section('adminContent')
      <div class="row grid-margin">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Add Tag</h4>
          
              @if(Session::has('message'))
 
              <p class="alert {{ Session::get('alert-class', 'alert-info alert-link') }}">{{ Session::get('message') }}</p>
              @endif
              <form class="cmxform" id="commentForm" action="{{ route('admin.tag.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <fieldset>
                <div class="row">
                  <div class="col-lg-12">
                      <div class="form-group">
                        <label for="cname">Tag (required)</label>
                        <input id="cname" class="form-control" name="name"  type="text">
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
@endsection