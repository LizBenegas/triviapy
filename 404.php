<div style="text-align: center; padding: 50px;">
    <h1>Ya rompiste todo, vuelve a la página principal</h1>

    <?php 
        $upload_dir = wp_upload_dir();
        $logo_url = $upload_dir['baseurl'] . '/2025/04/meme_perrito_cuando_no_quieres_dar_explicaciones_soy502_guatemala.jpg';
    ?>

    <img src="<?php echo esc_url($logo_url); ?>" alt="Meme del perrito" style="max-width: 100%; height: auto; margin-top: 20px;" />

    <p><a href="<?php echo esc_url(home_url()); ?>" style="display: inline-block; margin-top: 30px; background: #0073aa; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;">Volver a la página principal</a></p>
</div>
