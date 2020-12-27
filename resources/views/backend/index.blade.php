@extends('backend.master')
@section('adminContent')
<div class="row grid-margin">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add Books</h4>
                @if(Session::has('message'))
                <p class="{{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('message') }}</p>
                @endif
                <div class="card">
                    <div class="card-body">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <br />
                        @endif
                        <form class="cmxform" id="bookForm" method="post" action="{{url('/admin/books/store')}}"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <fieldset>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="cname">Name (required)</label>
                                            <input id="cname" class="form-control" name="name" type="text">
                                        </div>
                                    </div>
                                    {{-- second grid --}}
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="cname">Edition</label>
                                            <input id="edition" class="form-control" name="edition" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="cname">Publisher Location (required)</label>
                                            <input id="cname" class="form-control" name="plocation" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Author Name</label>
                                            <span class="authoraddi" id="addauthor">Add author<i class="fas fa-plus"
                                                    data-toggle="modal" data-target="#exampleModal-2"></i></span>
                                            <select class="js-example-basic-single w-100" name="author_id">
                                                @foreach ($author as $value)
                                                <option value="{{$value->id}}">{{$value->name}}</option>

                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    {{-- second grid --}}

                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Category name</label>

                                            <select class="form-control form-control-lg categorySelect2"
                                                id="exampleFormControlSelect1" name="category">
                                                @foreach($category as $value)
                                                <option value="{{$value->id}}">{{$value->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <span class="authoraddi dpublisher" id="addpublisher">Add publisher<i
                                                    class="fas fa-plus" data-toggle="modal"
                                                    data-target="#exampleModal-2"></i></span>
                                            <label for="exampleFormControlSelect1">Publisher</label>
                                            <select class="form-control form-control-lg" id="exampleFormControlSelect1"
                                                name="publisher_id">
                                                @foreach($publisher as $value)
                                                <option value="{{$value->id}}">{{$value->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="cname">Publication Year</label>
                                            <input id="pyear" class="form-control" name="pyear" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="cname">ISBN</label>
                                            <input id="isbn" class="form-control" name="isbn" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="cname">Language</label>
                                            <select class="form-control" id="" name="language">
                                                @foreach ($language as $value )
                                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="cname">Online Link</label>
                                            <input id="onlineLinks" class="form-control" name="onlineLInk" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Cover upload</label>
                                            <input type="file" name="coverUpload" class="file-upload-default">
                                            <div class="input-group col-xs-12">
                                                <input type="text" class="form-control file-upload-info" disabled=""
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
                                            <input type="file" name="bookUpload" class="file-upload-default">
                                            <div class="input-group col-xs-12">
                                                <input type="text" name="bookUpload"
                                                    class="form-control file-upload-info" disabled=""
                                                    placeholder="Upload Image">
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
                                    <textarea class="form-control" id="summernoteExample" rows="4"
                                        name="description"></textarea>
                                </div>

                                <input class="btn btn-primary" type="submit" value="Submit">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            {{-- Modalstart --}}
            <div class="modal fade" id="exampleModal-2" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel-2" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <span id="message"></span>
                        <div class="modal-body">
                            <form id="modal-author">
                                <fieldset>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="name"> name(required)</label>
                                                <input id="name" class="form-control" name="name" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="profession"> Profession</label>
                                                <input id="profession" class="form-control" name="profession"
                                                    type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <select class="form-control" name="author_id" id="country_id">
                                                    @foreach ($country as $value)
                                                    <option value="{{$value->id}}">{{$value->name}}</option>

                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-success" id="save-resource"
                                        style="display: none" data-dismiss="modal">Submit</button>
                                    <button type="submit" class="btn btn-success" id="save-publihser"
                                        style="display: none" data-dismiss="modal">Submit</button>
                                    <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                                </fieldset>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            {{-- Modalend --}}

            <script src="https://code.jquery.com/jquery-2.2.4.js"
                integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous">
            </script>
            <script src="{{url('public/admin/validation/validation.js')}}"></script>






            @endsection
