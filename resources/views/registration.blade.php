<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registretion</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>

<body>
    @if($errors->any())
    <div class="alert">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="container">
        <div class="container2">
            Registretion
            <form method="post" action="{{ route('user.registration') }}">
                @csrf

                <input type="text" name="email" placeholder="email">
                @error('email')
                {{$message}}
                @enderror
                <input type="password" name="password" placeholder="password">
                @error('password')
                {{$message}}
                @enderror
                <input type="submit" value="Registretion">
            </form>
        </div>
    </div>

</body>

</html>