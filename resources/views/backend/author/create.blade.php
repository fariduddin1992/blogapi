@extends('backend.master')
@section('adminContent')
      <div class="row grid-margin">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Add Author</h4>
          
              @if(Session::has('message'))
 
              <p class="alert {{ Session::get('alert-class', 'alert-info alert-link') }}">{{ Session::get('message') }}</p>
              @endif
              <form class="cmxform" id="commentForm" action="{{ route('admin.author.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <fieldset>
                <div class="row">
                  <div class="col-lg-6">
                      <div class="form-group">
                        <label for="cname">Author name(required)</label>
                        <input id="cname" class="form-control" name="name"  type="text">
                      </div> 
                  </div>
                  <div class="col-lg-6">
                      <div class="form-group">
                        <label for="cname">Author Profession</label>
                        <input id="cname" class="form-control" name="profession"  type="text">
                      </div> 
                  </div> 
                </div>
                <div class="row">
                  <div class="col-lg-6">
                      <div class="form-group">
                          <label>Born</label>
                        <div id="datepicker-popup" class="input-group date datepicker">
                          <input type="text" name="born" class="form-control">
                          <span class="input-group-addon input-group-append border-left">
                            <span class="mdi mdi-calendar input-group-text"></span>
                          </span>
                        </div>
                      </div> 
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label> Country</label>
                      <select class="js-example-basic-single w-100" name="country_id">
                        @foreach($country as $value)
                        <option value="{{$value->id}}">{{$value->name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div> 
                </div>
                <div class="row">
                  <div class="col-lg-12">
                      <div class="form-group">
                          <input type="file" name="image">
                      </div> 
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <textarea id="summernoteExample" name="description"></textarea>
                  </div>
                </div>
                  <input class="btn btn-primary" type="submit" value="Submit">
                </fieldset>
              </form>
            </div>
          </div>
        </div>
@endsection