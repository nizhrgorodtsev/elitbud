<?php
    $types = get_field('plans')['plan_types'];
    $address = get_field('first_section')['address'];
?>
<section id="plans">
    <div class="container">
        <h3><span>Планування квартир</span></h3>
        <div class="tab">
            <?php foreach ($types as $key => $value): ?>
            <button class="tablinks" onclick="openContent(event, 'key-<?php echo $key ?>')" <?php echo ($key == 0)? 'id="defaultOpen"' : '' ?>><?php echo $value['title'] ?></button>
            <?php endforeach; ?>
        </div>
        <?php foreach ($types as $key => $value): ?>
        <div id="key-<?php echo $key ?>" class="tabcontent">
            <div class="row">
                <div class="col-6">
                    <img src="<?php echo wp_get_attachment_image_url($value['img'], 'full'); ?>" alt="">
                </div>
                <div class="col-6">
                    <h4><?php the_title() ?></h4>
                    <div class="adress"><?php echo $address ?></div>
                    <div class="green-separator w-100"></div>
                    <div class="row specifications">
                    <?php foreach ($value['specifications'] as $specification) : ?>
                        <div class="col-6">
                            <div class="name"><?php echo $specification['name']; ?></div>
                            <div class="value"><?php echo $specification['value']; ?></div>
                        </div>
                    <?php endforeach; ?>
                    </div>
                    <div class="row price-file">
                        <div class="col-6">
                            <div class="price"><?php echo $value['price'] ?></div>
                        </div>
                        <div class="col-6">
                            <a class="file" href="<?php echo $value['file'] ?>">Завантажити PDF</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>
