<?php 
    get_header('empty');

    while(have_posts()) { 
        the_post();    
        
        ?>
        <section class="o-sizing__width--full o-spacing__pad--side-45 o-sizing__height--full">
            <div class="o-main__container o-layout__flex o-align__align-items--center o-sizing__height--100 o-spacing__pad--b-200">
                <video class="c-bg-video" autoplay loop muted poster="https://assets.codepen.io/6093409/river.jpg">
                    <source src="https://therouteappdev.local/wp-content/uploads/2022/11/hero-footage.mp4" type="video/mp4">
                </video>
                <h1 class="c-heading c-heading__home t-dark _u-text-transform-override o-sizing__max-width--750"><div class="c-text__gradient">Post purchase ecommerce.</div> Unleashed.</h1>
                <span class="o-background__gradient--fade-to-black o-sizing__width--full o-sizing__height--min-350 o-position__absolute o-position__b--0 o-position__l--0"></span>
            </div>
        </section>
        <section class="o-sizing-width--full o-background__solid--bgDark">
            <div class="o-main__container">
                <h3 class="c-heading__main c-heading t-dark">8-10x more engagement than any other platform, virtually every carrier integration, and generating positive ROI on every transaction.</h3>
                <h2 class="c-heading__main c-heading t-dark">Real-time tracking, remarketing, sustainability, and package protection–<div class="c-text__gradient">driving merchant growth.</div></h2>
            </div>
        </section>
        <?php
    }

    get_footer('empty');
?>