@extends('backend.master')
@section('adminContent')
      <div class="row grid-margin">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Add Sub Category</h4>
              @if(Session::has('message'))
              <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
              @endif
              <form class="cmxform" id="commentForm" method="post" action="{{url('/admin/subcategory/store')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <fieldset>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                          <select class="form-control" name="category_id">
                            @foreach ($categoryList as $categoryLists)
                            <option value="{{$categoryLists->id}}">{{$categoryLists->name}}</option>
                            @endforeach
                          </select>
                        </div> 
                    </div>
                  <div class="col-lg-12">
                      <div class="form-group">
                        <label for="cname">Sub Category (required)</label>
                        <input id="cname" class="form-control" name="subCatname"  type="text" required>
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