<?php 
    get_header('empty');

    while(have_posts()) { 
        the_post();    
    ?> 
        <main class="o-main o-main__bg-image o-main__bg-image--fixed o-main__bg-image--right t-dark" style="background-image: url(https://route.com/wp-content/uploads/2022/10/package-protection-map-background-dark.webp)">
            <div class="o-main__container">
                <section class="o-spacing__pad--t100 c-content-row o-layout__grid o-layout__grid--35-65-c o-layout__grid--auto-auto-r o-layout__grid--resp-auto-c t-dark">
                    <a href="/merchants">
                        <img src="https://route.com/wp-content/uploads/2021/09/Route-for-Merchants-Blue-Logo.png" alt="Route for Merchants Home" width=150 class="o-spacing__mar--b25">
                    </a>
                    <div class="c-content-row__group c-content-row__group--row-2 c-content-row__group--resp-row-3">
                        <h1 class="o-spacing__mar--b45 c-heading__main _u-heading-color-override _u-margin-reset _u-text-transform-override">
                            Request a Demo
                        </h1>
                        <h2 class="c-heading__sub o-spacing__mar--b5 _u-heading-color-override _u-text-transform-override">
                            Protect packages
                        </h2>
                        <p class="o-spacing__mar--b25 o-sizing__max-width--460 c-text--small">
                            Protect packages against loss, theft, and damage and resolve shipping issues instantly.
                        </p>
                        <h2 class="c-heading__sub o-spacing__mar--b5 _u-heading-color-override _u-text-transform-override">
                            Build brand loyalty
                        </h2>
                        <p class="o-spacing__mar--b25 o-sizing__max-width--460 c-text--small">
                            Offer immersive package tracking preferred by millions of engaged shoppers, and customize it to your brand.
                        </p>
                        <h2 class="c-heading__sub o-spacing__mar--b5 _u-heading-color-override _u-text-transform-override">
                            Reduce costs and limit fraud
                        </h2>
                        <p class="c-text--small o-sizing__max-width--460">
                            Reducing support tickets related to shipping and empowering customers to resolve shipping issues instantly.
                        </p>

                        <p class="o-spacing__mar--b15 c-text">Trusted by over 15,000 brands from side-gig to IPO</p>
                        <div class="o-layout__grid o-layout__grid--3 o-layout__grid--gap15 o-sizing__max-width--460">
                            <img src="https://route.com/wp-content/uploads/2022/10/Avocado_Green_Mattress_Logo-1.webp" width="120">
                            <img src="https://route.com/wp-content/uploads/2022/10/Bohme-Logo-2019-Black_256x256_e20cec2c-4dbe-458e-8bf5-8cbb66b55d81_130x@2x-1.webp" width="120">
                            <img src="https://route.com/wp-content/uploads/2022/10/softwearlogo_BLACK_large-1.webp" width="150">
                            <img src="https://route.com/wp-content/uploads/2022/10/EyeBuyDirect-png.webp" width="160">
                            <img src="https://route.com/wp-content/uploads/2022/10/Vector.webp" width="153">
                        </div>
                    </div>
                    <div class="c-content-row__group c-content-row__group--row-2 o-sizing__width--full o-spacing__mar--b25">
                        <div class="s-hubspot-form c-request-demo-form c-content-row__item--right c-content-row__item--responsive-center">
                            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
                            <script>
                                hbspt.forms.create({
                                    region: "na1",
                                    portalId: "6898498",
                                    formId: "2c2fb585-2785-453b-82a9-81981fffe2e0",
                                    version: "V2_PRERELEASE",
                                    cssRequired: ""
                                });
                            </script>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    <?php        
    }

    get_footer('empty');
?>