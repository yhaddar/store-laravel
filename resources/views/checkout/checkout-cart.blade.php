<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

<section class="Form-section">
    @if (session() -> has('success'))
        <div style="background: #2fa72f;width: 98%;margin-left: auto;margin-right: auto;padding: 10px;border-radius: 5px;border: 3px solid green;margin-bottom: 20px">
            <h1 style="font-size: 18px;text-align: center;font-family: 'Lato', sans-serif;color: white;">{{session() -> get('success')}}j</h1>
        </div>
    @endif
    <form action="{{ route('checkout_data') }}" class="form" method="POST">
        @csrf
        @php $checkout_form = [
            [ 'placeholder' => 'phone number',    'type' => 'number', 'name' => 'phone_number'],
            [ 'placeholder' => 'alternat number', 'type' => 'number', 'name' => 'alternat_number'],
            [ 'placeholder' => 'adress 1',        'type' => 'text',   'name' => 'adress_1'],
            [ 'placeholder' => 'adress 2',        'type' => 'text',   'name' => 'adress_2'],
            [ 'placeholder' => 'city',            'type' => 'text',   'name' => 'city'],
            [ 'placeholder' => 'state',           'type' => 'text',   'name' => 'state'],
            [ 'placeholder' => 'code postal',     'type' => 'text',   'name' => 'code_postal'],
        ]  @endphp
        <div class="input-data">
            <div class="input">
            <input type="text" id="input" value="{{ $data -> first_name }}" placeholder="first name" name="first_name">
            </div>
            <div class="input">
            <input id="input" type="text" value="{{ $data -> last_name }}" placeholder="last name" name="last_name">
            </div>
            @foreach ( $checkout_form as $checkout)
            <div class="input">
                <input id="input" type="{{ $checkout['type'] }}" placeholder="{{ $checkout['placeholder'] }}" name="{{ $checkout['name'] }}">
            </div>
            @endforeach
                <div style="display: flex">
                    <button type="submit" class="button-checkout">checkout</button>
                </div>
        </div>
    </form>
</section>
