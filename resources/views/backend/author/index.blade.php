@extends('backend.master')
@section('adminContent')
<div class="row grid-margin">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Book List</h4>
                <div class="table-responsive">
                    <table id="order-listing" class="table">
                        <thead>
                            <tr>
                                <th>Order #</th>
                                <th>Tag name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($author as $value)
                            <tr>
                                <td>1</td>
                                <td>{{$value->name}}</td>
                                <td>
                                    <label class="badge badge-info">On hold</label>
                                </td>
                                <td>
                                    <a href="{{url('admin/tag/edit',$value->slug)}}"><button
                                            class="btn btn-outline-primary">Edit</button></a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    @endsection
