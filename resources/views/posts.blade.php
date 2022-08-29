<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <!--
    <h1>All Posts</h1>
    @foreach($posts as $post)
    <h3>{{ $post->title}}</h3>
    <p>{{$post->body}}</p>
    @endforeach
-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<section>
    <div class="conta">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        All Posts
                        <div class="card-body">
                            <table class="table">
                                <tr>
                                    <th>Post Title</th>
                                    <th>Post Body</th>
                                    <th>Action</th>
                                </tr>

                                <tbody>
                                    @foreach($posts as $post)
                                        <tr>
                                            <td>{{$post->title}}</td>
                                            <td>{{$post->body}}</td>
                                            <td>
                                                <a href="/posts/{{$post->id}}">View</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
    </div>
    </div>
</section>
</body>
</html>