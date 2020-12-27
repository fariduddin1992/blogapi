@extends('backend.master')
@section('adminContent')
<div class="row grid-margin">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Category List</h4>
                <div class="table-responsive">
                    <table id="order-listing" class="table">
                        <thead>
                            <tr>
                                <th>Order #</th>
                                <th>Category name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1 ?>
                            @foreach($Category as $value)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{$value->name}}</td>
                                <td>
                                    <a href="{{url('admin/category/edit',$value->id)}}"><button
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
