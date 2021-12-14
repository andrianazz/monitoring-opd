<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="{{ asset('') }}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('build/css/style.css') }}">
    <title>Monitoring OPD | Login</title>
</head>

<body>

    <div class="login">
        <div class="text-center">
            <center>
                <img src="{{ asset('images/logo.png') }}" width="50"></img>
            </center>
        </div>

        <h1>Login</h1>
        <h1 style="color: whitesmoke;"> Monitoring OPD</h1>
        @if ($message = Session::get('failed'))
        <div class="alert alert-danger" role="alert">{{ $message }}</div>
        @endif
        <form action="/login/auth" method="POST">
            @csrf
            <input type="text" name="user_id" placeholder="USER ID" required="required" />
            <input type="password" name="password" placeholder="Password" required="required" />
            <button type="submit" class="btn btn-primary btn-block btn-large">Masuk</button>
        </form>
    </div>
</body>

</html>