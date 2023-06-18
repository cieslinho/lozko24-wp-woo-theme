<section class="products">
    <div class="container">
        <div class="products__boxes">

<div class="prodcuts__filter">
<?php 

echo do_shortcode('[wpf-filters id=1]');

?>
</div>

<div class="products__products">
<?php 

echo do_shortcode('[products limit="20" columns="4" paginate=true]');

?>
</div>
        
        </div>
    </div>
</section>