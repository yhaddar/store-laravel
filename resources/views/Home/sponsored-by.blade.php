<section class="sponsored-by">
    <div class="sponsored">
        <?php $sponsore = ['google.png', 'netflix.png', 'OIP.png', 'paypal.png']  ?>
        @foreach ( $sponsore as $s )
            <div class="img-sponsore">
                <img src="../assets/sponsored/{{ $s }}" alt="" class="image-sponsored">
            </div>
        @endforeach
    </div>
</section>
