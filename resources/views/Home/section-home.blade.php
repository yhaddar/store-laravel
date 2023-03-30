<section class="Home">
    <main class="section-1">
        <div class="texts">
            <?php  $texts = ['trending product in 2023', 'Discover the ultimate online experience with our business website', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae voluptatem consequatur ipsa at expedita nostrum.'] ?>
            @foreach($texts as $text)
                <div class="Text">
                    <h1 class="text"> {{ $text }}</h1>
                </div>
            @endforeach
            <button class="shop-now">shop now</button>
        </div>
    </main>
    <main class="section-2">
        <div class="product-cover"></div>
    </main>
</section>
