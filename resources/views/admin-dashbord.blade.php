<html>

<head>
    <meta charset="utf-8">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
    <title>Admin Dashbord</title>
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
                <div class="img" style="background-image: url('../profile/{{ $data->image }}')"></div>
            </span>
            <div class="links">
                <a href="{{ route('admin.create') }}" class="link1">Add Product</a>
                <a href="{{ route('logout') }}" class="link1">logout</a>
            </div>
        </div>
    </nav>

    <section>
        <table class="table" style="width:98%; margin-left:auto;margin-right: auto; margin-top:20px;">
            <thead>
                <tr>
                    <th class="border border-slate-600 ..." style="text-align: center">id</th>
                    <th class="border border-slate-600 ..." style="text-align: center">image</th>
                    <th class="border border-slate-600 ..." style="text-align: center">name</th>
                    <th class="border border-slate-600 ..." style="text-align: center">category</th>
                    <th class="border border-slate-600 ..." style="text-align: center">price</th>
                    <th class="border border-slate-600 ..." style="text-align: center">created_at</th>
                    <th class="border border-slate-600 ..." style="text-align: center">edit</th>
                    <th class="border border-slate-600 ..." style="text-align: center">delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td class="border border-slate-700 text-center font-sans capitalize font-bold">
                            {{ $product['id'] }}</td>
                        <td class="border border-slate-700 text-center">
                            <div
                                style="margin-right: auto;margin-left: auto;width: 55px; height: 55px; background-image: url('./cards/{{ $product['image_product'] }})">
                                <img src="../cards/{{ $product['image_product'] }}" style="width: 100%; height: auto"
                                    alt="">
                            </div>
                        </td>
                        <td class="border border-slate-700 text-center font-sans capitalize font-bold">
                            {{ $product['name_product'] }}</td>
                        <td class="border border-slate-700 text-center font-sans font-bold">
                            {{ $product['category_product'] }}</td>
                        <td class="border border-slate-700 text-center font-sans font-bold">
                            {{ number_format($product['price_product'], 2) }} dh</td>
                        <td class="border border-slate-700 text-center font-sans font-bold">{{ $product['created_at'] }}
                        </td>
                        <td class="border border-slate-700 text-center font-sans font-bold">
                            <a href="{{ route('admin.edit', $product->id) }}">
                                <button class="text-white cursor-pointer"
                                    style="background: #2a2478;height: 33px;width: 50px;border-radius: 5px; border: none">
                                    <ion-icon name="create"></ion-icon>
                                </button>
                            </a>
                        </td>
                        <td class="border border-slate-700 text-center font-sans font-bold">
                            <form action="{{ route('admin.destroy', $product->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="text-white cursor-pointer"
                                    style="background: #2a2478;height: 33px;width: 50px;border-radius: 5px; border: none">
                                    <ion-icon name="trash"></ion-icon>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</body>

</html>
