@extends('backend.master')
@section('adminContent')
<div class="row grid-margin">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Post List</h4>
                <div class="table-responsive">
                    <table id="order-listing" class="table center-aligned-table">
                        <thead>
                            <tr>
                                <th>Order #</th>
                                <th>title</th>
                                <th>User Id</th>
                                <th>Total View</th>
                                <th>Total Search</th>
                                <th>Category</th>
                                <th>is_approved</th>
                                <th>slug</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $i =1;?>
                            @foreach($postList as $value)
                            <tr>
                                <td>{{ $i++ }} </td>
                                <td>{{$value->title}}</td>
                                <td>{{$value->user_id}}</td>
                                <td>{{$value->total_view}}</td>
                                <td>{{$value->total_search}}</td>
                                <td>{{$value->category->name}}</td>
                                <td><a href="{{route('post.PostApproved',$value->id)}}"><button
                                            class="btn btn-success">{{$value->is_approved}}</button></a></td>
                                <td>{{$value->slug}}</td>
                                <td><a
                                        href="{{url($value->category->name.'/'.'aritcles'.'/'.$value->id.'/'.$value->slug)}}">{{$value->slug}}</a>
                                </td>
                                <td>{{$value->subcategory->name}}</td>

                                <td>
                                    <a href="{{url('admin/books/edit',$value->slug)}}">
                                        <button class="btn btn-outline-primary">View</button>
                                    </a>
                                </td>
                                <td>
                                    <a href="" class="mr-1 text-muted p-2"><i class="mdi mdi-dots-horizontal"></i></a>
                                    <a href="{{route('post.edit',$value->id)}}" class="mr-1 text-muted p-2"
                                        title="Edit"><i class="mdi mdi-grease-pencil"></i></a>
                                    <a href="{{url('admin/post/delete',$value->id)}}" class="mr-1 text-muted p-2"><i
                                            class="mdi mdi-delete"
                                            onclick="return confirm('Are you sure you want to delete this item?');"
                                            title="Delete"></i></a>
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