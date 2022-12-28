<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer List</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top:20px">
        <div class="row">
        <div class="col-md-12">
            <h2>Customer List</h2>
            <div style="margin-right:10%;float: right;">
                <a class="btn btn-primary" href="{{url('add-customer')}}">Add Customer</a>
            </div>
            @if(Session::has('success'))
     <div style="margin-top:5%;" class="alert alert-success" role="alert">
        {{Session::get('success')}}
    </div>
    @endif
            <table class="table">
            <thead><tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr></thead>
    
        <tbody>
            @php
            $i = 1;
            @endphp

        @foreach ($data as $stu)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$stu->name}}</td>
                <td>{{$stu->email}}</td>
                <td>{{$stu->phone}}</td>
                <td>  <a class="btn btn-primary" href="{{url('edit-customer/' . $stu->id)}}">Edit Customer</a>
                |     <a class="btn btn-danger" href="{{url('delete-customer/' . $stu->id)}}">Delete Customer</a></td>
            </tr>
        @endforeach
    </tbody>

            </table>
        </div>
        </div>
    </div>
</body>
</html>