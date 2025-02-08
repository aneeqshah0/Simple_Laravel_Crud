<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Updated Blog Details</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
   <body>
    <br><br><h3 style="text-align:center;">Edit Blog Details</h3><br>
    <form style="padding:0% 20% 20% 20%;" action="{{URL::to('UpdateBlogdata')}}" metod="GET">
        <div class="mb-3">
            <input value="{{$User->id}}" name="id" type="hidden" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputFullName1" class="form-label">Title</label>
            <input value="{{$User->title}}" name="title" type="text" class="form-control" id="exampleInputFullName1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Description</label>
            <input value="{{$User->description}}" name="description" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Editor</label>
            <select name="user_id" class="form-control">
                <option value="">Select Editor</option>
                @foreach($users as $user)
                <option value="{{ $user->id }}" {{ $User->user_id == $user->id ? 'selected' : '' }}>
                    {{ $user->fullname }}
                </option>
                @endforeach
            </select>
         </div>
        <input type="submit" name="save" class="btn btn-primary" value="Update">
    </form>
   </body>
</html>
