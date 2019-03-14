<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
                <span class="sr-only">abce</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <a href="#">email_me</a>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="collapse_target">
            <ul class="nav navbar-nav">
                <li><a href="#">email</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        @foreach ($articles as $aritcle)
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h2>{{ $aritcle->title }}</h2>
                <p>{{ $aritcle->content }}</p>
                <p><a href="article/{{$aritcle->id}}">Read</a></p>
            </div>
        </div>
            
       @endforeach
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>