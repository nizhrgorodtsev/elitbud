<?php
global $post;
$posts = get_posts(array(
    'posts_per_page' => 3,
    'post_status' => 'publish ',
));
?>
<section id="news">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h3><span>Новости</span></h3>
                <?php foreach ($posts as $post): setup_postdata($post); ?>
                    <div <?php post_class(); ?>>
                        <span class="post-date"><?php echo get_the_date('j F Y в H:i'); ?></span>
                        <h4><?php the_title(); ?></h4>
                        <?php the_excerpt() ?>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="col-6">
                <div class="question">
                    <div>
                        <h4>Я помогу вам найти нужную информацию</h4>
                        <p>Все наши клиенты говорят о качественно новом <br> уровне реализации строительных проектов</p>
                        <a href="" class="square-button">Задать вопрос</a>
                    </div>
                    <div class="woman">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/woman.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>