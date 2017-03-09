<?php
function gift_optin() {
        ?>
   <!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup" class="news widget_newsletters bg-primary">
    <form action="//facebook.us15.list-manage.com/subscribe/post?u=e65a4f0e6afdec49baa954911&amp;id=2fbc9500dd" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <div id="mc_embed_signup_scroll">
            <h3 class="hcopy-text">Download your copy of:</br> <strong class="book-title">Is <span class="boko font-italic">Boko Haram</span>? </strong>instantly. Enter your email below:</h3>
            <div class="mc-field-group">
              <input type="email" value="" name="EMAIL" class="form-control required email" id="mce-EMAIL" placeholder="yourname@email.com">
            </div>
            <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" style="display:none"></div>
                <div class="response" id="mce-success-response" style="display:none"></div>
           </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_e65a4f0e6afdec49baa954911_2fbc9500dd" tabindex="-1" value=""></div>
            <div class="clear">
                <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="btn btn-danger">Give me the book</button>
                </div>
            </div>
    </form>
</div>

<!--End mc_embed_signup-->
<?php
 // $wpMail = new wpMail();
 // echo $wpMail->hardcoded(1);

?>
<?php }
add_action('opt_in', 'gift_optin'); ?>




