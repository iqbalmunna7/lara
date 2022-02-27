<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container">
        <a href="" class="navbar-brand">LOGO</a>
        <button  class="navbar-toggler" data-toggle="cololapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav mx-auto">
                <li class="navbar-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                <li class="navbar-item"><a href="{{ route('fullName') }}" class="nav-link">Full Name</a></li>
                <li class="navbar-item"><a href="{{ route('calculator') }}" class="nav-link">Calculator</a></li>
            </ul>
        </div>
    </div>
</nav>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card card-body ">
                    <form action="" method="post">
                        @csrf
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label">First Number</label>
                            <div class="col-md-8">
                                <input type="number" class="form-control" name="first_name" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label">Last Number</label>
                            <div class="col-md-8">
                                <input type="number" class="form-control"name="last_name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for=""></label>

                        </div>
                        <div class="form-group row">
                            <select id="cars">
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="opel">Opel</option>
                                <option value="audi">Audi</option>
                            </select>
                            <div class="col-md-8">
                                <input type="text" class="form-control" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label">Submit</label>
                            <div class="col-md-8">
                                <input type="submit" class="btn btn-success btn-block" value="Get Full Name">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<h2 class="text-center text-success font-weight-bold">Hello BASIS</h2>

<script src="{{ asset('/') }}assets/js/jquery-3.6.0.min.js"></script>
<script src="{{ asset('/') }}assets/js/bootstrap.bundle.js"></script>
</body>
</html>
