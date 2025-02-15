<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>User - Update</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
   <body>
    <br><br>
    @if(session()->has('user_id') && session()->has('user_email'))
    <h6 style="text-align:right;">Active User: {{ session('user_email') }}</h6>
    @endif
    <br><br><h3 style="text-align:center;">Edit User Account Details</h3><br>
    <form style="padding:0% 20% 20% 20%;" action="{{URL::to('Updatedata')}}" metod="GET">
        <div class="mb-3">
            <input value="{{$User->id}}" name="id" type="hidden" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputFullName1" class="form-label">Enter Full Name</label>
            <input value="{{$User->fullname}}" name="fullname" type="text" class="form-control" id="exampleInputFullName1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Email</label>
            <input value="{{$User->email}}" name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Enter Password</label>
            <input value="{{$User->password}}" name="password" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <input type="submit" name="save" class="btn btn-primary" value="Update">
    </form>
   </body>
</html>
