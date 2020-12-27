@extends('backend.master')
@section('adminContent')
<div class="row grid-margin">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Category Update</h4>
                @if(Session::has('message'))
                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif
                <form class="cmxform" id="commentForm" method="post"
                    action="{{ url('admin/category/update', $category->id) }}" enctype="multipart/form-data">
                    @csrf
                    <fieldset>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="cname">Name (required)</label>
                                    <input id="cname" class="form-control" name="name" value="{{$category->name}}"
                                        type="text" required>
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
