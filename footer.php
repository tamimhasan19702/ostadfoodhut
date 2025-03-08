<?php

$emailustext = get_theme_mod('ostadfood_footer_email_text', 'Email Us');
$email = get_theme_mod('ostadfood_footer_email_address', 'info@website.com');

$callustext = get_theme_mod('ostadfood_footer_call_us_text', 'Call Us');
$call = get_theme_mod('ostadfood_footer_call_us_number', '(123) 456-7890');

$findustext = get_theme_mod('ostadfood_footer_find_us_text', 'Find Us');
$findus = get_theme_mod('ostadfood_footer_find_us_address', '12345 Fake ST NoWhere AB Country');

$copy_right_text = get_theme_mod('ostadfood_footer_copy_right_text', '&copy; Copyright 2024 Made with <i class="ti-heart text-danger"></i> By <a href="#">DevCRUD</a>');

?>


<!-- page footer  -->
<div class="container-fluid bg-dark text-light has-height-md middle-items border-top text-center wow fadeIn">
    <div class="row">

        <?php if (!empty($emailustext) || !empty($email)): ?>
            <div class="col-sm-4">
                <?php if (!empty($emailustext)): ?>
                    <h3><?php echo esc_html($emailustext); ?></h3>
                <?php endif; ?>
                <?php if (!empty($email)): ?>
                    <P class="texa-muted"><?php echo ostadfood_kses($email); ?></P>
                <?php endif; ?>
            </div>
        <?php endif; ?>


        <?php if (!empty($callustext) || !empty($call)): ?>
            <div class="col-sm-4">
                <?php if (!empty($callustext)): ?>
                    <h3><?php echo esc_html($callustext); ?></h3>
                <?php endif; ?>
                <?php if (!empty($call)): ?>
                    <P class="text-mated"><?php echo ostadfood_kses($call); ?></P>
                <?php endif; ?>
            </div>
        <?php endif; ?>


        <?php if (!empty($findustext) || !empty($findus)): ?>
            <div class="col-sm-4">
                <?php if (!empty($findustext)): ?>
                    <h3><?php echo esc_html($findustext); ?></h3>
                <?php endif; ?>
                <?php if (!empty($findus)): ?>
                    <P class="text-muted"><?php echo ostadfood_kses($findus); ?></P>
                <?php endif; ?>
            </div>
        <?php endif; ?>



    </div>
</div>
<div class="bg-dark text-light text-center border-top wow fadeIn">
    <p class="mb-0 py-3 text-muted small">
        <?php echo ostadfood_kses($copy_right_text); ?>
    </p>
</div>
<!-- end of page footer -->

<?php wp_footer(); ?>


</body>

</html>