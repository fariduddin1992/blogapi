@extends('backend.master')
@section('adminContent')
<div class="row grid-margin">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Country List</h4>
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
                            <?php $i= 1?>
                            @foreach($country as $value)
                            <tr>
                                <td>{{  $i++ }}</td>
                                <td>{{$value->name}}</td>
                                <td>
                                    <a href="{{url('admin/country/edit',$value->slug)}}"><button
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
