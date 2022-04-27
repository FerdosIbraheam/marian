
<!DOCTYPE html>
<html lang="en">

<head>
    <title>add</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>




    <div class="container">
        <h2>{{$title}}</h2>


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ url('/myblog/Store') }}" method="post" enctype="multipart/form-data">



            @csrf

            <div class="form-group">
                <label for="exampleInputName">title</label>
                <input type="text" class="form-control" id="exampleInputName" aria-describedby="" name="title"
                    placeholder="Enter Name" value="{{ old('title') }}">
            </div>


            <div class="form-group">
                <label for="exampleInputEmail">content</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    name="content" placeholder="Enter email" value="{{ old('content') }}">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword">image</label>
                <input type="file" class="form-control" id="exampleInputPassword1" name="image"
                    placeholder="Password">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


</body>

</html>

