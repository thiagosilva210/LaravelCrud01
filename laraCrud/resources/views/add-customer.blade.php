<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Customer</title>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<div class="container" style="margin-top:20px">
        <div class="row">
        <div class="col-md-12">
    <h2>Add Customer</h2>
    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{Session::get('success')}}
    </div>
    @endif
    <form method="POST" action="{{url('save-customer')}}">
    @csrf
    <div class="md-3">
        <label class="form-lebel">Name</label>
        <input type="text" class="form-control" name="name"
        placeholder="Enter Name" value="{{old('name')}}">
        @error('name')
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="md-3">
        <label class="form-lebel">Email</label>
        <input type="email" class="form-control" name="email"
        placeholder="Enter Email" value="{{old('email')}}">
        @error('email')
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="md-3">
        <label class="form-lebel">Phone</label>
        <input type="text" class="form-control" name="phone"
        placeholder="Enter phone number" value="{{old('phone')}}">
        @error('phone')
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{url('customer-list')}}" class="btn btn-danger">Back</a>
</form>
</div>
</div>
</div>

</body>
</html>