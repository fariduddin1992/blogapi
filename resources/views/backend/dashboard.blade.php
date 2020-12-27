@extends('backend.master')
@section('adminContent')
<div class="row grid-margin">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body" style="height: 100vh">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card" style="height: 130px">
                            <div class="card-body">
                                <div class="dash-content d-flex">
                                    <div class="dash-right ">
                                        <p>Total Books</p>
                                        <span>{{ count($book) }}</span>
                                    </div>

                                    <div class="dash-fonts ">

                                        <span><i class="mdi mdi-book-multiple"></i></span>
                                    </div>

                                </div>
                                <div class="dash-images mt-2">
                                    <img src="{{ url('public/admin/images/pipe.png') }}" alt="" class="img-fluid">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card" style="height: 130px">
                            <div class="card-body">
                                <div class="dash-content d-flex">
                                    <div class="dash-right ">
                                        <p>Total User</p>
                                        <span>{{ count($user) }}</span>
                                    </div>
                                    <div class="dash-fonts ">
                                        <span><i class="mdi mdi-human-male"></i></span>
                                    </div>
                                </div>
                                <div class="dash-images mt-2">
                                    <img src="{{ url('public/admin/images/pipe2.png') }}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card" style="height: 130px">
                            <div class="card-body">
                                <div class="dash-content d-flex">
                                    <div class="dash-right ">
                                        <p>Total Author</p>
                                        <span>{{ count($author) }}</span>
                                    </div>
                                    <div class="dash-fonts ">
                                        <span><i class="mdi mdi-human-male"></i></span>
                                    </div>
                                </div>
                                <div class="dash-images mt-2">
                                    <img src="{{ url('public/admin/images/pipe3.png') }}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card " style="height: 130px">
                            <div class="card-body">
                                <div class="dash-content d-flex">
                                    <div class="dash-right ">
                                        <p>Total Publisher</p>
                                        <span>{{ count($publisher) }}</span>
                                    </div>
                                    <div class="dash-fonts ">
                                        <span><i class="mdi mdi-human-male"></i></span>
                                    </div>
                                </div>
                                <div class="dash-images mt-2">
                                    <img src="{{ url('public/admin/images/pipe4.png') }}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endsection
