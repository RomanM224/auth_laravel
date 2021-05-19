<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>

<body>

    <div class="container">
        <div class="container2">
            Log In
            <form method="post" action="{{ route('user.login') }}">
                @csrf

                <input type="text" name="email" placeholder="email">
                @error('email')
                {{$message}}
                @enderror
                <input type="password" name="password" placeholder="password">
                @error('password')
                {{$message}}
                @enderror
                <input type="submit" value="Log in">
            </form>
        </div>
    </div>

</body>

</html>