
<div class="wrap">
    <form method="post" action="options.php">
        <?php  //création de inputs cachés pour vérif
        settings_fields('LAMANU_settings_cookie');
        do_settings_sections('config-cookie');
        ?>
        <label for="googleId">Identifiant de suivi google analytics :</label>
        <input name="googleId" type="text" placeholder="UA-XXXXXXX-XX" value="<?php echo get_option('googleId', 'UA-XXXXXXX-XX'); ?>">
<!--        création bouton submit-->
        <?php submit_button('Envoyer') ?>
    </form>
</div>