<?php $projects = array(
    array(
        'img' => 'http://elitbud/wp-content/uploads/2020/12/pr-1.png',
        'title' => 'Chelsea Tower',
        'location' => 'Киев, ст м Олемпияскаяб ул. Димитрова 2',
        'price' => 'от 19 500 грн м2',
    ),
    array(
        'img' => 'http://elitbud/wp-content/uploads/2020/12/pr-2.png',
        'title' => 'Avenue 14-16',
        'location' => 'Киев, ст м Олемпияскаяб ул. Димитрова 2',
        'price' => 'от 19 500 грн м2',
    ),
    array(
        'img' => 'http://elitbud/wp-content/uploads/2020/12/pr-3.png',
        'title' => 'Geneva',
        'location' => 'Киев, ст м Олемпияскаяб ул. Димитрова 2',
        'price' => 'от 19 500 грн м2',
    ),
    array(
        'img' => 'http://elitbud/wp-content/uploads/2020/12/pr-4.png',
        'title' => 'Nobel Homes',
        'location' => 'Киев, ст м Олемпияскаяб ул. Димитрова 2',
        'price' => 'от 19 500 грн м2',
    ),
    array(
        'img' => 'http://elitbud/wp-content/uploads/2020/12/pr-1.png',
        'title' => 'Chelsea Tower',
        'location' => 'Киев, ст м Олемпияскаяб ул. Димитрова 2',
        'price' => 'от 19 500 грн м2',
    ),
    array(
        'img' => 'http://elitbud/wp-content/uploads/2020/12/pr-2.png',
        'title' => 'Avenue 14-16',
        'location' => 'Киев, ст м Олемпияскаяб ул. Димитрова 2',
        'price' => 'от 19 500 грн м2',
    ),
); ?>
<section id="projects">
    <div class="container">
        <h3><span>Наші проекти</span></h3>
        <div class="projects-slider">
            <?php foreach ($projects as $project) : ?>
                <div class="project-slide">
                    <div class="thumbnail" style="background-image: url(<?php echo $project['img'] ?>)"></div>
                    <div class="title"><h4><?php echo $project['title'] ?></h4></div>
                    <div class="location"><?php echo $project['location'] ?></div>
                    <div class="price"><span><?php echo $project['price'] ?></span></div>
                    <a href="#"></a>
                    <img class="promo" src="<?php echo get_template_directory_uri() ?>/assets/img/sale-ru.png" alt="">
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>