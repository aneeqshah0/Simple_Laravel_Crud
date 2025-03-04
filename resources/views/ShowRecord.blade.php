<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>User - All Details</title>
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
   <br><br><h3 style="text-align:center;">All User Account Details</h3><br>
   <div style="padding-left:20%;margin-right:20%;">
    <button onclick="AddRecord()" type="button" class="btn btn-primary btn-lg">Add User</button>
    <br><br><table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Update</th>
                    <th scope="col">Blogs</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($User as $Item)
                <tr>
                    <td>{{$Item->fullname}}</td>
                    <td>{{$Item->email}}</td>
                    <td>{{$Item->password}}</td>
                    <td><a href="{{URL::to('DeleteRecord/'.$Item->id)}}">Delete</td>
                    <td><a href="{{URL::to('UpdateRecord/'.$Item->id)}}">Edit</td>
                    <td><a href="{{URL::to('ShowUserBlog/'.$Item->id)}}">Show</td> 
                </tr>
                @endforeach
            </tbody>
        </table><br><br>
        <button onclick="Home()" type="button" class="btn btn-primary btn-lg">Back</button>
    </div>
   </body>
   <script>
        function Home()
        {
            window.location.href = "/";
        }
        function AddRecord()
        {
            window.location.href = "/AddRecord";
        }
   </script>
</html>
