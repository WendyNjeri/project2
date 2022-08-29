<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB CRUD opreation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6-offset-md-3">
                    <div class="card">

                        <div class="card-header">
                             Post Details
                        </div>

                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label for="titile">
                                        Post Titile
                                        <input type="text" name="title"  value="{{$post->title}}" class="form-control" placeholder="Enter Post Title">
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="body">
                                        Post Description
                                        <textarea name="body"  class="form-control" rows="3">{{$post->body}}</textarea>
                                    </label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>