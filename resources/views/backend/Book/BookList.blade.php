@extends('backend.master')
@section('adminContent')
<div class="row grid-margin">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Book List</h4>
                <div class="table-responsive">
                    <table id="order-listing" class="table center-aligned-table">
                        <thead>
                            <tr>
                                <th>Order #</th>
                                <th>Book name</th>
                                <th>Book edition</th>
                                <th>Book category</th>
                                <th>Publisher name</th>
                                <th>Publisher Location</th>
                                <th>Publisher Year</th>
                                <th>Book view</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i =1;?>
                            @foreach($booklist as $value)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{$value->name}}</td>
                                <td>{{$value->edition}}</td>
                                <td>{{$value->category->name}}</td>
                                <td>{{$value->publisher->name}}</td>
                                <td>{{$value->publisher_location}}</td>
                                <td>{{$value->publication_year}}</td>
                                <td><img src="{{url('images/coverImages',$value->image)}}" />
                                </td>
                                {{-- <td>
                                    <a href="{{url('admin/books/edit',$value->slug)}}">
                                <button class="btn btn-outline-primary">Edit</button>
                                </a>
                                </td> --}}
                                <td>
                                    <a href="" class="mr-1 text-muted p-2"><i class="mdi mdi-dots-horizontal"></i></a>
                                    <a href="{{url('admin/books/edit',$value->slug)}}" class="mr-1 text-muted p-2"
                                        title="Edit"><i class="mdi mdi-grease-pencil"></i></a>
                                    <a href="{{url('admin/books/delete',$value->id)}}" class="mr-1 text-muted p-2"><i
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
