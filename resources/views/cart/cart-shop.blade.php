<section class="cart-shop">
    @if (session('success'))
    <div class="success">
        <div id="success">
            <h1 class="msg">{{ session('success') }} </h1>
        </div>
    </div>
    @endif
    <table class="table">
        <thead class="thead">
            <tr class="tr">
                <?php $tables = ['image', 'name', 'price', 'quantity' ,'delete'] ?>
                @foreach($tables as $table)
                    <th class="th"> {{ $table }} </th>
                @endforeach
            </tr>
        </thead>
        <tbody class="tbody">
            @php $total = 0 @endphp
            @if (session('cart'))
                @foreach (session('cart') as $id => $details )
                @php $total +=  $details['price_product'] * $details['quantity']  @endphp
                    <tr class="tr-body" data-id="{{ $id }}">
                        <td data-th="image_product" class="td">
                            <div class="image_product">
                                <div class="img" style="background-image: url('../cards/{{ $details['image_product'] }}')"></div>
                            </div>
                        </td>
                        <td data-th="name_product" class="name_product">
                            <h1 class="name"> {{ $details['name_product'] }} </h1>
                        </td>
                        <td data-th="Price" class="price_product">
                            <h1 class="price"> {{ number_format($details['price_product'], 2) }} dh </h1>
                        </td>
                        <td  class="td-price">
                            <div class="qs_product">
                                <input type="number" min="1" max="10" class="quantity" value="{{ $details['quantity'] }}" name="" id="quantity">
                            </div>
                        </td>
                        <td  class="td" id="td_btn">
                            <button class="btn_delete"> <ion-icon name="trash"></ion-icon> </button>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    <div class="Subtotal">
        <div id="subtotal">
            <h1 class="sub">subtotal :</h1>
            <h1 class="sub"> {{ number_format($total, 2) }} dh</h1>
        </div>
        <div id="btns">
                <a href="{{ route('checkout') }}">
                    <button class="checkout">checkout</button>
                </a>
            <a href="{{ route('shop') }}">
                <button class="continue-shopping">continue shopping</button>
            </a>

        </div>
    </div>
</section>
