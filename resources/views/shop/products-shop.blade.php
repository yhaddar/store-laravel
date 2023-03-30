<section class="products-shop">
    @if (session('success'))
        <div class="success">
            <div id="success">
                <h1 class="msg">{{ count((array) session("cart")) }} {{ session('success') }} </h1>
            </div>
        </div>
    @endif
    <div class="product-shop">
        @foreach ( $productShop as  $product )
        <div id="product-shop">
            <div class="product-image-shop">
                <img id="product-image-shop" src="../cards/{{ $product['image_product'] }}" />
            </div>
            <div class="name-product-shop">
                <h1 id="name-product-shop">{{ $product['name_product'] }}</h1>
            </div>
            <div class="category-product-shop">
                <h3 id="category-product-shop">{{ $product['category_product'] }}</h3>
            </div>
            <div class="flex-shop">
                <div class="price-product-shop">
                    <p id="price-product-shop">{{ number_format($product['price_product'], 2) }}dh</p>
                </div>
                <div class="btn-add-shop">
                    <a href="{{ route('AddToCart', $product -> id) }}">
                        <button id="btn-add-shop">
                            <ion-icon name="add" class="add"></ion-icon>
                        </button>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
