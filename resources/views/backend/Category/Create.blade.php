@extends('backend.master')
@section('adminContent')
      <div class="row grid-margin">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Add Category</h4>
              @if(Session::has('message'))
              <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
              @endif
              <form class="cmxform" id="commentForm" method="post" action="{{url('/admin/category/store')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <fieldset>
                <div class="row">
                  <div class="col-lg-12">
                      <div class="form-group">
                        <label for="cname">Category (required)</label>
                        <input id="cname" class="form-control" name="name"  type="text" required>
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
                              @foreach($category as $value)
                              <tr>
                                  <td>{{ $i++ }}</td>
                                  <td>{{$value->name}}</td>
                                  <td>
                                      <a href="{{url('admin/category/edit',$value->id)}}"><button
                                              class="btn btn-outline-primary">Edit</button></a>
                                  </td>
                                  <td>
                                    <form action="{{url('admin/category/destroy',$value->id)}}" method="post">
                                      @csrf
                                      @method('DELETE')
                                    
                                      <button class="btn btn-info" type="submit" onclick="return confirm('Are you sure you want to delate ?');"><span><i class="fas fa-trash-alt"></i></span></button>
                              </form>
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