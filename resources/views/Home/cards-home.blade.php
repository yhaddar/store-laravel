<aside class="Cards">
    <div id="cards">
        <?php
            $cards = [
                ['image' => 'fast-delivery.png','text-1' => 'free shipping','text-2' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia, animi'],
                ['image' => 'delivery-status.png','text-1' => 'easy returns','text-2' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia, animi'],
                ['image' => 'credit-card.png','text-1' => 'secure payment','text-2' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia, animi'],
                ['image' => 'guarantee.png','text-1' => 'back garantee','text-2' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia, animi'],
            ]
        ?>
        @foreach($cards as $card)
            <div class="card">
                <div id="card">
                    <div id="Cards-logo">
                        <div class="card-logo" style="background-image: url('./assets/cards/{{ $card['image'] }}')"></div>
                    </div>
                    <div class="card-texts">
                        <h1 class="text-1">{{ $card['text-1'] }}</h1>
                        <p class="text-2">{{ $card['text-2'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</aside>
