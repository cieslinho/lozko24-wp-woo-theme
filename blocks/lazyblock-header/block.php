<header class="header">
<div class="swiffy-slider slider-item-nogap slider-nav-round slider-nav-autoplay slider-indicators-square slider-indicators-highlight slider-item-show2 slider-nav-autopause" data-slider-nav-autoplay-interval="4500">
    <ul class="slider-container">
    <?php foreach( $attributes['product'] as $product ): ?>


        <li  class="header__slide">
            <div id="slide1" class="header__slide-box">
                <img src="<?php echo esc_url( $product['image']['url'] ); ?>" class="header__slide-img" alt="">
            </div>
            <div class="header__slide-description">
                <p class="header__slide-title"><?php echo $product['product-text']; ?></p>
                <a href="<?php echo $product['product-link']; ?>" class="header__slide-link">kup teraz</a>
            </div>
        </li>
        <?php endforeach; ?>
    </ul>

    <button type="button" class="slider-nav"></button>
    <button type="button" class="slider-nav slider-nav-next"></button>

    <ul class="slider-indicators">
        <li class="active"></li>
        <li class=""></li>
     
    </ul>
</div>
</header>