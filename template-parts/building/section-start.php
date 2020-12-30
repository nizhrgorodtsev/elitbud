<?php
$data = get_field('first_section');
$address = $data['address'];
$phones = $data['phones'];
$price = $data['price'];
$finish_date = $data['finish_date'];
$specifications = $data['specifications'];
?>
<section id="start">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 thumbnail" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>)">
                <div>
                    <div class="price"><?php echo $price ?></div>
                    <div class="finish-date">Здача в експлуатацію - <?php echo $finish_date ?></div>
                </div>
            </div>
            <div class="col-6 main-info">
                <?php
                if (function_exists('yoast_breadcrumb')) {
                    yoast_breadcrumb('<div id="breadcrumbs">', '</div>');
                }
                ?>
                <div class="heading">
                    <h1><?php echo get_the_title() ?></h1>
                    <div class="address"><?php echo $address ?></div>
                    <div class="green-separator"></div>
                    <div class="sale-department">Відділ продажів: <strong><?php echo $phones ?></strong></div>
                </div>
                <div class="specifications">
                    <?php
                    $count = ceil(count($specifications)/2);
                    $firsthalf = array_slice($specifications, 0, $count);
                    $secondhalf = array_slice($specifications, $count);
                    ?>
                    <ul>
                        <?php foreach ($firsthalf as $specification): ?>
                            <li>
                                <div class="name"><?php echo $specification['name']; ?></div>
                                <div class="value"><?php echo $specification['value']; ?></div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <ul>
                        <?php foreach ($secondhalf as $specification): ?>
                            <li>
                                <div class="name"><?php echo $specification['name']; ?></div>
                                <div class="value"><?php echo $specification['value']; ?></div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>