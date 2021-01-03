<?php
/**
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */



// Create id attribute allowing for custom "anchor" value.
$id = 'infrastructure-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'infr-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$infr = get_field('infrastructure') ?: 'Інфраструктура';
?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <?php foreach ($infr as $key => $value): ?>
    <div class="infr-row">
        <div class="icon">
            <img src="<?php echo wp_get_attachment_image_url($value['icon'], 'full') ?>" alt="">
        </div>
        <div class="data-wrapper">
            <div class="infr-name">
                <?php echo $value['inf_name'] ?>
            </div>
            <div class="distance">
                <?php foreach($value['distance'] as $dist): ?>
                    <div class="dist-row">
                        <div class="dist-name"><?php echo $dist['dist_name'] ?></div>
                        <div class="dist-value"><?php echo $dist['dist_value'] ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<div class="green-separator w-100"></div>