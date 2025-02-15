<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog - Add</title>
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
        <br><br><h3 style="text-align:center;">Blog Details</h3><br>
        <form style="padding:0% 20% 20% 20%;" action="{{URL::to('CreateBlogRecord')}}" metod="GET">
            <div class="mb-3">
                <label for="exampleInputFullName1" class="form-label">Title</label>
                <input name="title" type="text" class="form-control" id="exampleInputFullName1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Description</label>
                <textarea name="description" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Editor</label>
                <select name="user_id" class="form-control" id="user_id">
                    <option value="">Select Editor</option>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->fullname }}</option>
                    @endforeach
                </select>            </div>
            <input type="submit" name="save" class="btn btn-primary" value="Submit">
            <input onclick="Home()" type="submitt" name="save" class="btn btn-primary" value="Back To Home Menu">
            </form>
   </body>
   <script>
        function Home()
        {
            window.location.href = "/";
        }
   </script>
</html>
