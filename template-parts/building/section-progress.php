<?php
    $progress = get_field('progress');
    $photos = $progress['photos'];
?>
<section id="progress">
    <div class="container">
        <h3><span>Хід будівництва</span></h3>
    </div>
    <div class="container">
        <?php foreach ($photos as $key => $value): ?>
        <div class="row progress-gallery" data-key="<?php echo $key ?>">
            <div class="col-6 right-border">
                <div class="row">
                    <div class="col-12 left-top"
                         style="background-image: url(<?php echo wp_get_attachment_image_url($photos[$key]['gallery'][0], 'full') ?>)">
                        <a href="<?php echo wp_get_attachment_image_url($photos[$key]['gallery'][0], 'full') ?>">
                            <span>Переглянути</span>
                        </a>
                    </div>
                    <div class="col-6 left-bottom" style="background-image: url(<?php echo wp_get_attachment_image_url($photos[$key]['gallery'][1], 'full') ?>)">
                        <a href="<?php echo wp_get_attachment_image_url($photos[$key]['gallery'][1], 'full') ?>">
                            <span>Переглянути</span>
                        </a>
                    </div>
                    <div class="col-6 left-bottom" style="background-image: url(<?php echo wp_get_attachment_image_url($photos[$key]['gallery'][2], 'full') ?>)">
                        <a href="<?php echo wp_get_attachment_image_url($photos[$key]['gallery'][2], 'full') ?>">
                            <span>Переглянути</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="row">
                    <div class="col-6 right-top" style="background-image: url(<?php echo wp_get_attachment_image_url($photos[$key]['gallery'][3], 'full') ?>)">
                        <a href="<?php echo wp_get_attachment_image_url($photos[$key]['gallery'][3], 'full') ?>">
                            <span>Переглянути</span>
                        </a>
                    </div>
                    <div class="col-6 right-top" style="background-image: url(<?php echo wp_get_attachment_image_url($photos[$key]['gallery'][4], 'full') ?>)">
                        <a href="<?php echo wp_get_attachment_image_url($photos[$key]['gallery'][4], 'full') ?>">
                            <span>Переглянути</span>
                        </a>
                    </div>
                    <div class="col-12 right-bottom"
                         style="background-image: url(<?php echo wp_get_attachment_image_url($photos[$key]['gallery'][5], 'full') ?>)">
                        <a href="<?php echo wp_get_attachment_image_url($photos[$key]['gallery'][5], 'full') ?>">
                            <span>Переглянути</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        <div class="range-slider">
            <div class="years">
                <?php foreach ($photos as $key => $value) : ?>
                    <div class="year">
                        <?php if ($value['year'] != $photos[$key - 1]['year']) : ?>
                        <span><?php echo $value['year'] ?></span>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
            <div id="range-slider"></div>
            <div class="monthes" style="grid-template-columns: repeat(9, 1fr)">
            <?php foreach ($photos as $photo) : ?>
                <div class="month"><span><?php echo $photo['month'] ?></span></div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>