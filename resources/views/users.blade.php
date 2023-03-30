<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    @include('style-users')
</head>
<body>
    <section class="login-page">
        <h1>login</h1>
        @if (session() -> has('fail'))
            <div class="alert alert-danger">{{session() -> get('fail')}}</div>
        @endif
        <form action="{{route('login-user')}}" method="POST">
            @csrf
            @method('POST')
            <div class="mb-3">
                <input type="email" placeholder="Enter you email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <span style="color: red"> @error('email') {{$message}}@enderror </span>
            </div>
            <div class="mb-3">
                <input type="password" placeholder="Enter your password" name="password" class="form-control" id="exampleInputPassword1">
                <span style="color: red"> @error('password') {{$message}}@enderror </span>
            </div>
            <a href="{{ route('home') }}" ><button type="submit" class="btn btn-primary">Submit</button></a>
            <a href="{{ route('sign-up') }}">Create an account</a><br>
        </form>
    </section>
</body>
</html>
