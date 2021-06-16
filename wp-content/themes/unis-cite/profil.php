<?php
/**
 * Template Name: Profil
*/

get_header();
?>


<div class="container">
    <div class="col-xs-12">
        <?php
            $user = wp_get_current_user();


            get_field('user_interest', 'user_'.$user->ID);
        ?>
    </div>
</div>