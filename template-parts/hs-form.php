<!-- method="POST" action="https://api.hsforms.com/submissions/v3/integration/submit/6898498/4b4983b1-25f1-465f-a570-c3cb2510f6d7" -->
<form id="<?php echo $args['formID'] ?>" class="c-demo-form o-layout__grid o-layout__grid--col-2 o-layout__grid--gap-15 o-align__align-items--start o-spacing__pad--side-45 o-spacing__pad--t-35 o-spacing__pad--b-35 o-spacing__pad--all-25-responsive" onsubmit="formv3(event, this)" novalidate>
    <div class="c-demo-form__heading o-layout__grid--span-col-1-3">
        <h2 class="c-heading__form _u-text-transform-override o-align__text--center o-spacing__mar--b-5">
            One more step
        </h2>
        <h3 class="c-heading__form--sub o-align__text--center o-spacing__mar--b-5">
            See how Route works with your business
        </h3>    
    </div>

    <div class="c-demo-form__input-wrapper">
        <label for="firstname" class="c-demo-form__label">First name</label>
        <input type="text" name="firstname" placeholder="First name" class="c-demo-form__input o-sizing__width--full" required>
        <span class="c-demo-form__error" aria-live="polite"></span>
    </div>

    <div class="c-demo-form__input-wrapper">
        <label for="lastname" class="c-demo-form__label">Last name</label>
        <input type="text" name="lastname" placeholder="Last name" class="c-demo-form__input o-sizing__width--full" required>
        <span class="c-demo-form__error" aria-live="polite"></span>
    </div>
    
    <div class="c-demo-form__input-wrapper o-layout__grid--span-col-1-3">
        <label for="email" class="c-demo-form__label">Business Email</label>    
        <input type="email" name="email" placeholder="Business email" class="c-demo-form__input o-sizing__width--full" required>
        <span class="c-demo-form__error" aria-live="polite"></span>
    </div>
    
    <div class="c-demo-form__input-wrapper o-layout__grid--span-col-1-3">
        <label for="phone" class="c-demo-form__label">Mobile</label>
        <input type="tel" name="phone" placeholder="Phone" class="c-demo-form__input o-sizing__width--full">
        <span class="c-demo-form__error" aria-live="polite"></span>
    </div>
    
    <div class="c-demo-form__input-wrapper o-layout__grid--span-col-1-3">
        <label for="website" class="c-demo-form__label">Store URL</label>
        <input type="text" name="website" placeholder="Your ecommerce store url" class="c-demo-form__input o-sizing__width--full" required>
        <span class="c-demo-form__error" aria-live="polite"></span>
    </div>

    <hr class="c-demo-form__break o-layout__grid--span-col-1-3 o-spacing__mar--t-5 o-spacing__mar--b-5">
    
    <div class="c-demo-form__input-wrapper o-layout__grid--span-col-1-3">
        <select id="annual_sales_volume-4b4983b1-25f1-465f-a570-c3cb2510f6d7" required="" class="hs-input is-placeholder c-demo-form__input o-sizing__width--full" name="annual_sales_volume">
            <option selected="selected" disabled="" value="">Annual sales volume</option>
            <option value="Less than $500,000">Less than $500,000</option>
            <option value="$500,000 - $4,999,999">$500,000 - $4,999,999</option>
            <option value="$5,000,000 - $9,999,999">$5,000,000 - $9,999,999</option>
            <option value="$10,000,000 - $100,000,000">$10,000,000 - $100,000,000</option>
            <option value="More than $100,000,000">More than $100,000,000</option>
        </select>
        <span class="c-demo-form__error" aria-live="polite"></span>
    </div>

    <div class="c-demo-form__input-wrapper o-layout__grid--span-col-1-3">
        <select required="" class="hs-input is-placeholder c-demo-form__input o-sizing__width--full" name="are_you_a_merchant_or_a_shopper_">
            <option selected="selected" disabled="" value="">Are you a merchant or a shopper?</option>
            <option value="Shopper">Shopper</option>
            <option value="Merchant">Merchant</option>
        </select>
        <span class="c-demo-form__error" aria-live="polite"></span>
    </div>

    <div class="c-demo-form__input-wrapper o-layout__grid--span-col-1-3">
        <select required="" class="hs-input is-placeholder c-demo-form__input o-sizing__width--full" name="which_route_plan_would_you_like_a_demo_of_">
            <option selected="selected" disabled="" value="">Which Route Plan would you like a demo of?</option>
            <option value="None">None</option>
            <option value="Track+Green">Track+Green</option>
            <option value="Track+Grow">Track+Grow</option>
            <option value="Track Enterprise">Track Enterprise</option>
        </select>
        <span class="c-demo-form__error" aria-live="polite"></span>
    </div>

    <div class="c-demo-form__input-wrapper o-layout__grid--span-col-1-3">
        <select required="" class="hs-input is-placeholder c-demo-form__input o-sizing__width--full" name="would_you_like_to_see_a_demo_of_green_package_protection_">
            <option selected="selected" disabled="" value="">See a demo of Green Package Protection as well?</option>
            <option value="No">No</option>
            <option value="Yes">Yes</option>
        </select>
        <span class="c-demo-form__error" aria-live="polite"></span>
    </div>

    <?php get_template_part('template-parts/hs-hidden-fields'); ?>

    <input type="submit" value="Request Demo" class="c-demo-form__submit o-layout__grid--span-col-1-3">
</form>

<script>
    const fields = {
        'firstname': null,
        'lastname': null,
        'email': null,
        'phone': null,
        'website': null,
        'annual_sales_volume': null,
        'are_you_a_merchant_or_a_shopper_': null,
        'which_route_plan_would_you_like_a_demo_of_': null,
        'would_you_like_to_see_a_demo_of_green_package_protection_': null
    };

    document.addEventListener('DOMContentLoaded', () => {
        for (field in fields) {
            fields[field] = document.querySelector(`input[name="${field}"]`);

            if(!fields[field]) {
                fields[field] = document.querySelector(`select[name="${field}"]`);
            }

            fields[field].addEventListener("input", (e) => {
                if(e.target.getAttribute("error")) {
                    if (e.target.validity.valid) {
                        e.target.parentElement.querySelector('.c-demo-form__error').textContent = "";
                        e.target.removeAttribute("error");
                    }
                }
            });
        }
    });
    
    function formv3(e, form){
        let valid = true;

        for (const field in fields) {
            let errSpan = fields[field].parentElement.querySelector('.c-demo-form__error');
            let errMsg;

            if (!fields[field].validity.valid) {
                valid = false;

                if(fields[field].validity.valueMissing) {
                    errMsg = "Please enter a value";
                } else if (fields[field].validity.typeMismatch) {
                    errMsg = "Please enter a valid ";

                    switch (field) {
                        case "email":
                            errMsg += "email";
                            break;
                        case "website":
                            errMsg += "url (starting with https://)"
                            break;
                    }
                }

                errSpan.textContent = errMsg;
                fields[field].setAttribute("error", true);
            } else {
                errSpan.textContent = "";
                fields[field].removeAttribute("error");
            }
        }

        if(!valid) {
            e.preventDefault();
            return;
        }

        // Create the new request 
        let xhr = new XMLHttpRequest();
        let url = 'https://api.hsforms.com/submissions/v3/integration/submit/6898498/4b4983b1-25f1-465f-a570-c3cb2510f6d7';
        
        // Example request JSON:
        let data = {
            "fields": [
                {
                "objectTypeId": "0-1",
                "name": "firstname",
                "value": form.firstname.value
                },
                {
                "objectTypeId": "0-1",
                "name": "lastname",
                "value": form.lastname.value
                },
                {
                "objectTypeId": "0-1",
                "name": "email",
                "value": form.email.value
                },
                {
                "objectTypeId": "0-1",
                "name": "phone",
                "value": form.phone.value
                },
                {
                "objectTypeId": "0-1",
                "name": "website",
                "value": form.website.value
                },
                {
                "objectTypeId": "0-1",
                "name": "annual_sales_volume",
                "value": form.annual_sales_volume.value
                },
                {
                "objectTypeId": "0-1",
                "name": "are_you_a_merchant_or_a_shopper_",
                "value": form.are_you_a_merchant_or_a_shopper_.value
                },
                {
                "objectTypeId": "0-1",
                "name": "which_route_plan_would_you_like_a_demo_of_",
                "value": form.which_route_plan_would_you_like_a_demo_of_.value
                },
                {
                "objectTypeId": "0-1",
                "name": "would_you_like_to_see_a_demo_of_green_package_protection_",
                "value": form.would_you_like_to_see_a_demo_of_green_package_protection_.value
                },
                {
                "objectTypeId": "0-1",
                "name": "utm_source",
                "value": form.utm_source.value
                },
                {
                "objectTypeId": "0-1",
                "name": "utm_medium",
                "value": form.utm_medium.value
                },
                {
                "objectTypeId": "0-1",
                "name": "utm_campaign",
                "value": form.utm_campaign.value
                },
                {
                "objectTypeId": "0-1",
                "name": "utm_content",
                "value": form.utm_content.value
                },
                {
                "objectTypeId": "0-1",
                "name": "utm_term",
                "value": form.utm_term.value
                },
                {
                "objectTypeId": "0-1",
                "name": "last_offer",
                "value": form.last_offer.value
                },
                {
                "objectTypeId": "0-1",
                "name": "first_page_seen__c",
                "value": form.first_page_seen__c.value
                },
                {
                "objectTypeId": "0-1",
                "name": "conversion_page__c",
                "value": form.conversion_page__c.value
                },
                {
                "objectTypeId": "0-1",
                "name": "gclid",
                "value": form.gclid.value
                },
                {
                "objectTypeId": "0-1",
                "name": "msclkid",
                "value": form.msclkid.value
                },
                {
                "objectTypeId": "0-1",
                "name": "fbclid",
                "value": form.fbclid.value
                },
                {
                "objectTypeId": "0-1",
                "name": "salesforce_sync",
                "value": form.salesforce_sync.value
                }     
            ],
            "context": {
                "hutk": getCookie("hubspotutk"),
                "pageUri": "<?php the_permalink() ?>",
                "pageName": "<?php the_title() ?>"
            }
        }

        let final_data = JSON.stringify(data);
        xhr.open('POST', url);
        // Sets the value of the 'Content-Type' HTTP request headers to 'application/json'
        xhr.setRequestHeader('Content-Type', 'application/json');

        xhr.onreadystatechange = function() {
            if(xhr.readyState == 4 && xhr.status == 200) { 
                alert(xhr.responseText); // Returns a 200 response if the submission is successful.
            } else if (xhr.readyState == 4 && xhr.status == 400){ 
                alert(xhr.responseText); // Returns a 400 error the submission is rejected.          
            } else if (xhr.readyState == 4 && xhr.status == 403){ 
                alert(xhr.responseText); // Returns a 403 error if the portal isn't allowed to post submissions.           
            } else if (xhr.readyState == 4 && xhr.status == 404){ 
                alert(xhr.responseText); //Returns a 404 error if the formGuid isn't found     
            }
        }


        // Sends the request 
        
        xhr.send(final_data)
        e.preventDefault();
        window.location.href="https://route.com/thank-you-demo?utm_source=internal&utm_medium=form&utm_campaign=demo";
    }

    function getCookie(name) {
        const value = `; ${document.cookie}`;
        const parts = value.split(`; ${name}=`);
        if (parts.length === 2) return parts.pop().split(';').shift();
    }
</script>