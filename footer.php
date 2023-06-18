<?php
/**
 * @package lozko24.pl
 */
?>
</main>
<footer class="footer">
    <div class="container">

<div class="footer__boxes">
    <div class="footer__box">
        <div class="footer__box-top">
            <p class="footer__box-title">W czym możemy pomóc</p>
        </div>
       
    <div class="footer__box-bottom">
        <a href="/" class="footer__box-text footer__box-link">
        <i class='bx bx-home-alt-2' ></i>
            Łóżko24.pl
        </a>
        <p class="footer__box-text footer__box-icon">
        <i class='bx bxs-map'></i>
            Mroczeń 93, 63-604 Baranów
        </p>
        <a href="mailto:biuro@lozko24.pl" class="footer__box-text footer__box-link footer__box-icon">
        <i class='bx bxs-envelope' ></i>
         biuro@lozko24.pl
        </a>
        <a href="tel:+48 884 822 444" class="footer__box-text footer__box-link footer__box-icon">
        <i class='bx bxs-phone' ></i>
        +48 884 822 444
        </a>
        
    </div>

    </div>
    <div class="footer__box">
    <div class="footer__box-top">
            <p class="footer__box-title">zakupy</p>
        </div>
        <div class="footer__box-bottom">
    <?php wp_nav_menu(
                            array(
                                'theme_location' => 'lozko24_footer_menu_order'
                            )
                        );
                    ?>
                    </div>
    </div>
    
    <div class="footer__box">
    <div class="footer__box-top">
            <p class="footer__box-title">obsługa klienta</p>
        </div>
        <div class="footer__box-bottom">
    <?php wp_nav_menu(
                            array(
                                'theme_location' => 'lozko24_footer_menu_service'
                            )
                        );
                    ?>
                    </div>
    </div>

    </div>
    </div>



    </div>
    <div class="footer__bottom">
            <p class="footer__bottom-text">
                Copyright © Łóżko24 All rights reserved 
            </p>
            <p class="footer__bottom-text"> <span class="footer__bottom-span">|</span>Realizacja: 
                <a href="https://www.cieslaszymon.pl" class="footer__bottom-link">Cieśla Szymon</a>
            </p>
        </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>