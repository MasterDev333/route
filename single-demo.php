<?php 
    get_header('empty');

    while(have_posts()) { 
        the_post();    
    ?> 
        <main class="o-main o-main__bg-image o-main__bg-image--fixed o-main__bg-image--right t-dark" style="background-image: url(https://route.com/wp-content/uploads/2022/10/package-protection-map-background-dark.webp)">
            <div class="o-main__container">
                <section class="o-spacing__pad--t-75 o-spacing__pad--side-45 c-content-row o-layout__grid o-layout__grid--col-35-65 o-layout__grid--col-1-responsive t-dark">
                    <div class="c-logo__wrapper o-layout__grid--span-row-1 o-layout__grid--span-col-1-2 o-spacing__mar--b-25">
                        <a href="/merchants">
                            <img src="https://route.com/wp-content/uploads/2021/09/Route-for-Merchants-Blue-Logo.png" alt="Route for Merchants Home" height="38.37" width="150 class="o-spacing__mar--b-auto">
                        </a>
                    </div>
                    <div class="c-content-row__group o-layout__grid--span-row-1 o-layout__grid--span-col-1-2 o-spacing__mar--t-75 o-spacing__mar--b-45 o-spacing__mar--t-50-responsive o-layout__grid--span-row-3 o-layout__grid--span-row-3-responsive">
                        <h1 class="o-spacing__mar--b-45 o-spacing__mar--t-0 c-heading__main _u-heading-color-override _u-text-transform-override">
                            Request a Demo
                        </h1>
                        <h2 class="c-heading__sub o-spacing__mar--b-5 _u-heading-color-override _u-text-transform-override">
                            Protect packages
                        </h2>
                        <p class="o-spacing__mar--b-25 o-spacing__pad--b-0 o-sizing__max-width--460 c-text--small">
                            Protect packages against loss, theft, and damage and resolve shipping issues instantly.
                        </p>
                        <h2 class="c-heading__sub o-spacing__mar--b-5 _u-heading-color-override _u-text-transform-override">
                            Build brand loyalty
                        </h2>
                        <p class="o-spacing__mar--b-25 o-spacing__pad--b-0 o-sizing__max-width--460 c-text--small">
                            Offer immersive package tracking preferred by millions of engaged shoppers, and customize it to your brand.
                        </p>
                        <h2 class="c-heading__sub o-spacing__mar--b-5 _u-heading-color-override _u-text-transform-override">
                            Reduce costs and limit fraud
                        </h2>
                        <p class="c-text--small o-spacing__pad--b-0 o-sizing__max-width--460">
                            Reducing support tickets related to shipping and empowering customers to resolve shipping issues instantly.
                        </p>

                        <p class="o-spacing__mar--b-15 o-spacing__pad--b-0 c-text">Trusted by over 15,000 brands from side-gig to IPO</p>
                        <div class="o-layout__grid o-layout__grid--col-3 o-layout__grid--gap-15 o-sizing__max-width--460 o-align__align-items--center">
                            <img src="https://route.com/wp-content/uploads/2022/10/Avocado_Green_Mattress_Logo-1.webp" width="120">
                            <img src="https://route.com/wp-content/uploads/2022/10/Bohme-Logo-2019-Black_256x256_e20cec2c-4dbe-458e-8bf5-8cbb66b55d81_130x@2x-1.webp" width="120">
                            <img src="https://route.com/wp-content/uploads/2022/10/softwearlogo_BLACK_large-1.webp" width="150">
                            <img src="https://route.com/wp-content/uploads/2022/10/EyeBuyDirect-png.webp" width="160">
                            <img src="https://route.com/wp-content/uploads/2022/10/Vector.webp" width="153">
                        </div>
                    </div>
                    <div class="o-spacing__mar--b-25 o-layout__grid--span-row-1 o-layout__grid--span-2-3 o-layout__grid--span-row-2-responsive o-spacing__mar--side-auto">
                        <?php 
                        get_template_part('template-parts/hs-form', null, array(
                            'formID' => 'hsForm_2c2fb585-2785-453b-82a9-81981fffe2e0'
                        ));
                        ?>
                    </div>
                </section>
            </div>
        </main>
    <?php        
    }

    get_footer('empty');
?>