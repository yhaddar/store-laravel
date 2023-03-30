<section class="trending-product">
    <h1 class="title-section">trending products</h1>
    @if (session('success'))
    <div class="success">
        <div id="success">
            <h1 class="msg">{{ count((array) session("cart")) }} {{ session('success') }} </h1>
        </div>
    </div>
    @endif
    <div id="trending-product">
        @foreach ($products -> slice(0, 4) as $product)
        <div class="product">
            <div class="img-product">
                <img id="product-shop" src="../cards/{{ $product['image_product'] }}" />
            </div>
            <div class="name-shop">
                <h1 class="name-product">{{ $product['name_product'] }}</h1>
            </div>
            <div class="category-shop">
                <h3 class="category-product">{{ $product['category_product'] }}</h3>
            </div>
            <div class="flex">
                <div class="price-shop">
                    <p class="price-product">{{ number_format($product['price_product'], 2) }}dh</p>
                </div>
                <div class="btn-add">
                    <a href="{{ route('AddToCart', $product -> id) }}">
                        <button id="btn-add">
                            <ion-icon name="add"></ion-icon>
                        </button>
                    </a>
                </div>
            </div>
        </div>

        @endforeach
    </div>
</section>


