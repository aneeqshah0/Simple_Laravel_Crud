<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog - All Records</title>
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
   <br><br><h3 style="text-align:center;">All Blog Details</h3><br>
   <div style="padding-left:20%;margin-right:20%;">
    <button onclick="AddBlog()" type="button" class="btn btn-primary btn-lg">Add Blog</button>
    <br><br><table class="table">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Editor</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Update</th>
                    <th scope="col">Comment</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($BlogDetail as $Item)
                <tr>
                    <td>{{$Item->title}}</td>
                    <td>{{$Item->description}}</td>
                    <td>{{$Item->user->fullname }}</td>
                    <td><a href="{{URL::to('DeleteBlogRecord/'.$Item->id)}}">Delete</td>
                    <td><a href="{{URL::to('UpdateBlogRecord/'.$Item->id)}}">Edit</td>
                    <td><a href="{{ URL::to('OpenSpecificBlog/'.$Item->id) }}">Add</a></td>
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
        function AddBlog()
        {
            window.location.href = "/AddBlog";
        }
   </script>
</html>
