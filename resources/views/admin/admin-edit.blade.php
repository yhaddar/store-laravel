<html>

<head>
    <meta charset="utf-8">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
            text-transform: capitalize;
            font-weight: bold;
        }

        .nav {
            width: 100%;
            height: 75px;
            background: #2a2478;
        }

        .nav-div {
            width: 100%;
            margin-top: 10px;
            display: flex;
            justify-content: space-around;
        }

        .img {
            width: 52px;
            height: 52px;
            border-radius: 50%;
            background-origin: border-box;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .links {
            margin-left: 20px;
            margin-right: 20px;
            margin-top: 2px;
        }

        .link1 {
            margin-left: 10px;
            margin-right: 10px;
        }
    </style>

</head>

<body>



    <nav class="nav">
        <div class="nav-div">
            <span>
                <div class="img" style="background-image: url('../../profile/{{ $data-> image }}')"></div>
            </span>
            <div class="links">
                <a href="{{ route('admin.store') }}" class="link1">Show Product</a>
                <a href="{{ route('logout') }}" class="link1">logout</a>
            </div>
        </div>
    </nav>

    <section>
        @if (session()->has('success'))
           <div class="alert alert-success" style="width: 20%; margin-left: auto; margin-right: auto; margin-top: 20px">
            <h1 style="font-size: 15px; text-align: center">
                {{ session()->get('success') }}
            </h1>
           </div>
        @endif
        <div style="display: flex; justify-content:center; margin-top: 50px; width: 100%;">
            <div style="background:white; width:27%; border: 1px solid #2a2478; padding: 20px">

                <form action="{{ route('admin.update', $product -> id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div style="border-radius: 50%; width: 80px; height: 80px; margin-left: auto; margin-right: auto; margin-bottom: 20px; border: 1px solid #2a2478; padding: 10px">
                        <img src="../../cards/{{ $product['image_product'] }}" style="width:100%; height: auto" class="rounded float-start" alt="...">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" style="border: 1px solid #2a2478"  disabled value="{{ $product['id'] }}"  />
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" style="border: 1px solid #2a2478"  value="{{ $product['name_product'] }}" name="name_product" />
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" style="border: 1px solid #2a2478"
                            name="category_product"  disabled value="{{ $product['category_product'] }}" />
                    </div>
                    <div class="mb-3">
                        <label for="" class="text-white"></label>
                        <input type="text" class="form-control" style="border: 1px solid #2a2478"
                            name="price_product" value="{{ $product['price_product'] }}" />
                    </div>
                    <div class="mb-3">
                        <input type="file" class="form-control" style="border: 1px solid #2a2478"  name="image_product"  />
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>


            </div>
        </div>


    </section>
    </section>
</body>

</html>
