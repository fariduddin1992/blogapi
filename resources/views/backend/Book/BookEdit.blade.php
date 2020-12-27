@extends('backend.master')
@section('adminContent')
<div class="row grid-margin">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Books Update</h4>
                @if(Session::has('message'))
                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif
                <form class="cmxform" id="commentForm" method="post"
                    action="{{ route('admin.books.update', $book->slug) }}" enctype="multipart/form-data">
                    @csrf
                    <fieldset>
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="cname">Name (required)</label>
                                    <input id="cname" class="form-control" name="name" value="{{$book->name}}"
                                        type="text" required>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="cname">Edition</label>
                                    <input id="edition" class="form-control" value="{{$book->edition}}" name="edition"
                                        type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="cname">Publisher Location (required)</label>
                                    <input id="cname" class="form-control" value="{{$book->publisher_location}}"
                                        name="plocation" type="text">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Author Name</label>
                                    <select class="js-example-basic-single w-100" name="author_id">
                                        @foreach ($author as $value)
                                        @if($book->author_id == $value->id)
                                        <option value="{{ $value->id }}" selected>{{ $value->name }}</option>
                                        @else
                                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Category name</label>
                                    <select class="form-control form-control-lg" id="exampleFormControlSelect1"
                                        name="category">
                                        @foreach ($category as $value)
                                        @if($book->category_id == $value->id)
                                        <option value="{{ $value->id }}" selected>{{ $value->name }}</option>
                                        @else
                                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Publisher name</label>
                                    <select class="form-control form-control-lg" id="exampleFormControlSelect1"
                                        name="publisher_id">
                                        @foreach ($publisher as $value)
                                        <option value="{{ $value->id }}"
                                            {{ $book->publisher_id == $value->id ? 'selected' : '' }}>{{ $value->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="cname">Publication Year</label>
                                    <input value="pyear" value="{{$book->publication_year}}" class="form-control"
                                        name="pyear" type="text">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="cname">Keywords</label>
                                    <input id="pyear" class="form-control" name="keywords" value="{{$book->keywords}}"
                                        type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Language</label>
                                    <select class="form-control" id="" name="language">
                                        @foreach ($language as $value )
                                        @if($value->id ===$book->id)
                                        <option value="{{ $value->id }}" selected>{{ $value->name }}</option>
                                        @else
                                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                                        @endif

                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="cname">Online Link</label>
                                    <input id="onlineLinks" class="form-control" name="onlineLInk"
                                        value="{{$book->online_link}}" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Cover upload</label>
                                    <input type="file" name="coverUpload" class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                        <input type="text" value="{{ $value->image }}"
                                            class="form-control file-upload-info" disabled=""
                                            placeholder="Upload Image">
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary"
                                                type="button">Upload</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Book upload</label>
                                    <input type="file" name="bookUpload" class="file-upload-default"
                                        value="{{old('user_image')}}">
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info" disabled=""
                                            placeholder="Upload Image" value="{{ $value->file }}">
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary"
                                                type="button">Upload</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea1">Description</label>
                            <textarea class="form-control" id="exampleTextarea1" rows="4"
                                name="description">{{$book->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="cname">ISBN</label>
                            <input id="isbn" class="form-control" name="isbn" value="{{$book->isbn}}" type="text">
                        </div>

                        <input class="btn btn-primary" type="submit" value="Update">
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    @endsection
