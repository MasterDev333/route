<?php 
    get_header('empty');

    while(have_posts()) { 
        the_post();

        ?> 
        <main class="o-main">
            <section  class="o-main__container">
        <?php
        
        the_content();
        
        ?> 
            </section>
        </main>
        <?php
    }

    get_footer('empty');
?>