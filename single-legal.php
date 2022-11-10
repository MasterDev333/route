<?php 
    get_header('empty');

    while(have_posts()) { 
        the_post();

        ?> 
        <main class="o-main _u-fix-p-padding">
            <section class="o-main__container--mixed-widths">
                <div class="c-heading__legal o-main__container--full-width">
                    <div class="o-main__container o-align__text--center o-spacing__pad--side25">
                        <h1 class="c-heading__main o-spacing__mar--t0 o-spacing__mar--b15 o-spacing__pad--t100 _u-text-transform-override"><?php the_title(); ?></h1>
                        <p class="c-heading__sub o-spacing__pad--b50">Last updated <?php the_modified_date() ?></p>
                    </div>
                </div>
                <div class="o-main__container o-spacing__pad--side25">
        <?php

        the_content();
        
        ?>
                </div> 
            </section>
        </main>
        <?php
    }

    get_footer('empty');
?>