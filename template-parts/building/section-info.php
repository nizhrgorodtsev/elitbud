<?php
$info = get_field('info');
$gallery = $info['gallery'];
?>
<div id="info">
    <div class="container">
        <h3><span>Загальна інформація</span></h3>
        <?php
        if (have_posts()):
            while (have_posts()) : the_post();
                the_content();
            endwhile;
        else:
        endif;
        ?>
        <div class="gallery">
            <?php foreach ($gallery as $img): ?>
            <div class="gallery-item" style="background-image: url(<?php echo wp_get_attachment_image_url($img, 'full') ?>)">
                <a href="<?php echo wp_get_attachment_image_url($img, 'full') ?>">
                    <span>Переглянути</span>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>