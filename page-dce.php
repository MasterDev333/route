<?php 
    get_header('empty');
?>
<main class="o-main t-dark">
    <section  class="o-main__container">
        <h1 class="c-heading__main t-dark">Direct Conversion Experience Demo</h1>
        <style>
            /*HubSpot Form Styling*/
            .hbspt-form {
                max-width: 468px;
                width: 468px;
            }

            .hbspt-form form {
                display: grid;
                grid-row-gap: 15px;
            }

            .hbspt-form form label {
                display: none;
            }

            .hbspt-form form .hs-error-msgs{
                margin: 0px 0px 4px 15px !important;	
            }


            .hbspt-form form .hs-error-msgs li {
                list-style-type: "*";
                color: red;
            }

            .hbspt-form form .hs-error-msgs li label{
                display: block;
                color: red;
            }

            .hbspt-form form .input input{
                width: 100%;
                height: 56px;
                
                border-radius: 16px;
                background-color: #f7f7f7 !important;
                border: 1px #ddd solid;
            }

            .hbspt-form form .input select{
                width: 100%;
                height: 56px;
                
                border-radius: 16px;
                background-color: #f7f7f7 !important;
                border: 1px #ddd solid;
            }


            .hbspt-form form .hs-submit {
                height: 70px;
                width: 131px;
                justify-self: center !important;
                
                display: flex;
                flex-direction: column;
                
                justify-content: flex-end !important;
            }

            .hbspt-form form .hs-submit input{
                width: 100%;
                height: 40px;
                
                border-radius: 24px;
                background-color: #31C8E0 !important;
                
                color: #fff;
                font-weight: 600;
                font-size: 17px;
                
                padding: 0px !important;
            }

            .hbspt-form form .input ::placeholder{
                color: #999999 !important;	
            }

            /*HubSpot forms custom alignment classes*/
            .hbspt-form-left-align form .hs-submit {
                justify-self: left !important;
            }


            .stop-scrolling {
                height: 100%;
                overflow: hidden;
            }    
            
            .c-staged-cta__wrapper {
                background-color: white;
                border-radius: 10.01px;
                max-width: 450px;
            }
            
            .c-staged-cta__wrapper input {
                height: 50px ;
            }
            
            .c-modal-form {
                padding: 0;
                height: fit-content;
                width: fit-content;
                border-radius: 10.01px;
            }
            
            .c-modal-form__contents {
                width: fit-content;
                height: fit-content;
                text-align: center;   
                padding: 50px;
            }
            
            .c-modal-form__close {
                font-size: 14px;
                /*text-decoration: underline;*/
                cursor: pointer;
            }
            
            .c-modal-form::backdrop {
                background: radial-gradient(circle, rgba(125,125,125,0.3) 0%, rgba(100,100,100,0.3) 50%, rgba(75,75,75,0.3) 100%);
                backdrop-filter: blur(4px);
            }
            
            .c-modal-form h2 {
                text-transform: none;
                font-size: 28px;
                margin-bottom: 5px;
            }
            
            .c-modal-form h3 {
                text-transform: none;
                font-size: 22px;
                color: #999999;
            }
            
            .o-layout__grid {
                display: grid;
                align-items: center;
            }
            
            .o-layout__grid--70-30 {
                grid-template-columns: 2fr 1fr;
                grid-column-gap: 15px
            }
            
            .c-staged-cta__email-input {
                width: 100% !important;
                border-radius: 10.01px !important;
                background: white !important;
                border: none !important;
            }
            
            .c-staged-cta__email-input::placeholder {
                color: #494949;
            }
            
            .c-staged-cta__email-label {
                grid-row: 2;
                color: red;
                display: none;
            }
            
            #c-staged-cta__email-label-desktop[isvisible = "true"]{
                display: inline;
            }
            
            #c-staged-cta__email-label-mobile[isvisible = "true"]{
                display: none;
            }
            
            .c-staged-cta__email-submit {
                height: 100%;
                width: 100%;
                border-radius: 10.01px !important;
                border: 2.5px solid white !important;
            }
            
            .hbspt-form {
                margin-bottom: 15px;
            }
            
            .hbspt-form form .hs-error-msgs li label {
                font-size: 14px;
            }
            
            .hbspt-form form .input input, .hbspt-form form .input select{
                height: 50px;    
                font-size: 16px;
            }
            
            .hbspt-form form .hs-submit input {
                height: 50px;
                
            }
            
            .hbspt-form form .hs-submit {
                width: 100%;
            }
            
            .c-modal-form .hbspt-form form {
                grid-template-columns: 2;
                text-align: left;
            }
            
            .c-modal-form .hbspt-form form div {
                grid-column: 1/3;
            }
            
            .c-modal-form .hbspt-form form .hs_firstname {
                grid-column: 1/1;
                margin-right: 5px;
            }
            
            .c-modal-form .hbspt-form form .hs_lastname {
                grid-column: 2/2;
                margin-left: 5px;
            }
            
            @media only screen and (max-width: 650px) {
                .hbspt-form {
                    max-width: 468px;
                    width: 100%;
                }
                
                .c-staged-cta, .c-staged-cta__wrapper {
                    margin: auto;
                }
                
                .c-staged-cta__wrapper {
                    background: none;
                }
                
                .c-staged-cta__email-submit {
                    height: 45px;
                    width: 100%;
                    border-radius: 15px !important;
                    border:none !important;
                }
                
                #c-staged-cta__email-label-desktop[isvisible = "true"]{
                    display: none;
                }
                
                #c-staged-cta__email-label-mobile[isvisible = "true"]{
                    display: inline;
                }
                
                .o-layout__grid--70-30 {
                    grid-template-columns: 1fr;
                    grid-row-gap: 0px;
                }
                
                .c-staged-cta__email-submit {
                    margin-top: 20px;
                }
                
                .c-modal-form {
                    overflow-x: hidden;
                }
                
                .c-modal-form__contents {
                    padding: 20px;
                    overflow-x: hidden;
                }
                
                .c-modal-form h2 {
                    font-size: 24px;
                }
                
                .c-modal-form h3 {
                    font-size: 18px;
                }
            }
        </style>

        <div class="c-staged-cta">
            <form method="post" id="c-staged-cta__form" class="c-staged-cta__wrapper c-staged-cta__form o-layout__grid o-layout__grid--70-30">
                <input type="email" id="c-staged-cta__email-input" class="c-staged-cta__email-input" placeholder="Enter business email" />
                <label class="c-staged-cta__email-label-mobile c-staged-cta__email-label" id="c-staged-cta__email-label-mobile" for="c-staged-cta__email-input">*Please enter an email</label>
                <input type="submit" id="c-staged-cta__email-submit" class="c-staged-cta__email-submit" value="Get a demo" />
            </form>
            <label class="c-staged-cta__email-label c-staged-cta__email-desktop" id="c-staged-cta__email-label-desktop" for="c-staged-cta__email-input">*Please enter an email</label>

            <dialog id="c-staged-cta__modal" class="c-modal-form">
                <div class="c-modal-form__contents">
                    <h2>
                        Request a demo of Route
                    </h2>
                    <h3>
                        See how Route works with your store.
                    </h3>
                    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
                    <script>
                        hbspt.forms.create({
                            region: "na1",
                            portalId: "6898498",
                            formId: "2c2fb585-2785-453b-82a9-81981fffe2e0",
                            version: "V2_PRERELEASE",
                            cssRequired: "",
                            onFormSubmit: function() {
                                const dialog2 = document.querySelector("dialog");
                                
                                dialog2.close();
                                document.documentElement.classList.remove("stop-scrolling");
                            }
                        });
                    </script>
                    <span class="c-modal-form__close">Close</span>
                </div>
            </dialog>
        </div>

        <script>
            let stagedCTA__Modal;
            let stagedCTA__EmailInput;
            let stagedCTA__EmailLabel;
            let stagedCTA__EmailLabelMobile;
            let dialog;
            let dialog__Contents;
            let dialog__EmailInput;
            let closeText;

            let stagedCTA__EmailInput_Val;
            let labelVisible;
            let dialogOpen;

            window.addEventListener('DOMContentLoaded', () => {
                stagedCTA__Modal = document.querySelector("#c-staged-cta__modal");
                stagedCTA__EmailInput = document.querySelector("#c-staged-cta__email-input");
                stagedCTA__EmailLabel = document.querySelector("#c-staged-cta__email-label-desktop");
                stagedCTA__EmailLabelMobile = document.querySelector("#c-staged-cta__email-label-mobile");
                dialog = document.querySelector("dialog");
                dialog__Contents = document.querySelector(".c-modal-form__contents");
                dialog__EmailInput = document.querySelector('input[name="email"]');
                closeText = document.querySelector(".c-modal-form__close");
                document.querySelector("#c-staged-cta__form").addEventListener("submit", openModal);

                stagedCTA__EmailInput_Val;
                labelVisible = false;
                dialogOpen = false;

                stagedCTA__EmailInput.addEventListener("blur", hideLabel);
                dialog.addEventListener("click", onClick);
                closeText.addEventListener("click", () => {
                    dialogOpen = false;
                    dialog.close();
                    enableScroll();
                });
                document.addEventListener("keydown", (event) => {
                    if(dialogOpen && event.keyCode == "27") {
                        dialogOpen = false;
                        enableScroll();
                    } 
                });
            });

            function openModal(event = null){
                if(event) {
                    event.preventDefault();
                }

                document.querySelector('input[name="firstname"').focus();
                document.querySelector('input[name="firstname"').select();
                
                dialog__EmailInput = document.querySelector('input[name="email"]');
                stagedCTA__EmailInput_Val = stagedCTA__EmailInput.value;
                
                let validAddress = stagedCTA__EmailInput_Val.match(
                                    /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
                                    );
                
                if(stagedCTA__EmailInput_Val && validAddress) {
                    let event = new Event('change');

                    disableScroll();
                    dialogOpen = true;
                    dialog__EmailInput.value = stagedCTA__EmailInput_Val;
                    dialog__EmailInput.dispatchEvent(event);
                    stagedCTA__Modal.showModal();
                }
                
                hideLabel();
            }

            function onClick(event) {
                if (event.target === dialog && event.target !== dialog__Contents) {
                    dialogOpen = false;
                    dialog.close();
                    enableScroll();
                }
            }

            function hideLabel() {
                stagedCTA__EmailInput_Val = stagedCTA__EmailInput.value;
                let validAddress = stagedCTA__EmailInput_Val.match(
                                    /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
                                    );
                
                if(stagedCTA__EmailInput_Val && validAddress) {
                    if(labelVisible) {
                        stagedCTA__EmailLabel.setAttribute("isVisible", "false");
                        stagedCTA__EmailLabelMobile.setAttribute("isVisible", "false");
                        labelVisible = false;
                    }
                } else {
                    if(!labelVisible) {
                        stagedCTA__EmailLabel.setAttribute("isVisible", "true");
                        stagedCTA__EmailLabelMobile.setAttribute("isVisible", "true");
                        labelVisible = true;
                    }
                }
            }

            function disableScroll() {
                document.documentElement.classList.add("stop-scrolling");
            }

            function enableScroll() {
                document.documentElement.classList.remove("stop-scrolling");
            }
        </script>

    <?php 
        // get_template_part('template-parts/hs-form');
    ?>
    </section>
</main>

<?php 
    get_footer('empty');
?>