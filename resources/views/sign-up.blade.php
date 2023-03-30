<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create an account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    @include('style-users')
</head>
<body>
    <section class="signUp-page">
        <h1>sign up</h1>
        <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="mb-3">
                <input type="text" name="first_name"  class="form-control" placeholder="First Name">
                <span style="color: red"> @error('first_name') {{$message}}@enderror </span>

            </div>
            <div class="mb-3">
                <input type="text" name="last_name"  class="form-control" placeholder="Last Name">
                <span style="color: red"> @error('last_name') {{$message}}@enderror </span>

            </div>
            <div class="mb-3">
                <input type="email" name="email"  class="form-control" placeholder="Email address">
                <span style="color: red"> @error('email') {{$message}}@enderror </span>

            </div>
            <div class="mb-3">
                <input type="password" name="password"  class="form-control" placeholder="Password" >
                <span style="color: red"> @error('password') {{$message}}@enderror </span>

            </div>
            <div class="mb-3">
                <input type="password" name="confirmPassword" class="form-control" placeholder="Confirm Password" id="exampleInputPassword1" autocomplete="off">
                <span style="color: red"> @error('password') {{$message}}@enderror </span>
            </div>
            <div class="mb-3">
                <input type="file" name="image"  class="form-control">
                <span style="color: red"> @error('image') {{$message}}@enderror </span>

            </div>
            <button type="submit" class="btn btn-primary">sign up</button>
            <a href="{{ route('login') }}">login</a>
        </form>
        @if (session() -> has('success'))
            <div class="alert alert-success">{{session('success')}}</div>
        @endif
        @if (session() -> has('fail'))
        <div class="alert alert-danger">{{session('fail')}}</div>
    @endif
    </section>
</body>
</html>
