<?php
if ($args['class'] == 'homepage') {
    $text = "Schedule a meeting with our digital marketing experts";
} elseif ($args['class'] == 'cta-homepage') {
    $text = "Schedule a Digital Marketing Consultation with our Experts Today!";
} ?>

<a href="#" class="cta-button d-inline-block"><i class="fa-regular fa-calendar"></i>
    <?php echo $text; ?>
</a>