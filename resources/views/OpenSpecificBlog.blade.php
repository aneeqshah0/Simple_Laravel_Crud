<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog - Comments</title>
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
   <br><br><h3 style="text-align:center;">Blog</h3><br>
   <div style="padding-left:20%;margin-right:20%;">
    <br><br>
    <table class="table">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody>
                <td>{{$blogs->title}}</td>
                <td>{{$blogs->description}}</td>
            </tbody>
        </table>
        <br><br><br><br>
        <h5>Comments:</h5>
        @if($comment->isEmpty())
            <p>No comments yet.</p>
        @else
        <ul>
            @foreach ($comment as $comment)
                <li> <strong>{{ $comment->user ? $comment->user->fullname : 'Unknown User' }}:</strong>  {{ $comment->comment_text }}</li>
            @endforeach
        </ul>
         @endif
        <br><br>
        <!-- Add Comment Form -->
    @if(session()->has('user_id'))
    <form action="{{ route('AddComment', $blogs->id) }}" method="POST">
        @csrf
        <textarea name="comment_text" required placeholder="Write your comment..."></textarea><br>
        <button type="submit" class="btn btn-primary btn-lg">Comment</button>
    </form>
    @else
      
    @endif
        <br><br>
        <button onclick="BlogRecord()" type="button" class="btn btn-primary">Back</button>
    </div>
   </body>
   <script>
        function BlogRecord()
        {
            window.location.href = "/BlogRecord";
        }
   </script>
</html>
