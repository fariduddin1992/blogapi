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
                                <th>Image</th>
                                <th>image Url</th>
                                <th>Action</th>
                                <th>Copy</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $i =1;?>
                            @foreach($fileUpload as $value)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{$value->title}}</td>
                                <td><img src={{url('public/images/fileupload',$value->image)}}
                                        style="width:150px;height:150px" />
                                </td>
                                {{-- <td id="myInput">
                                    {{url('public/images/fileupload',$value->image)}}
                                </td> --}}
                                <td><input type="text" value={{url('public/images/fileupload',$value->image)}}
                                        id="myInput"></td>
                                <td><button onclick="myFunction()">Copy text</button></td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    @section('script')
    <script>
        function myFunction() {
          var copyText = document.getElementById("myInput");
          copyText.select();
          copyText.setSelectionRange(0, 99999)
          document.execCommand("copy");
          alert("Copied the text: " + copyText.value);
        }
    </script>
    @endsection
    @endsection