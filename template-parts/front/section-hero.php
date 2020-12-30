<section id="hero">
    <?php $images = array(
        'http://elitbud/wp-content/uploads/2020/12/Layer-139.jpg',
        'http://elitbud/wp-content/uploads/2020/12/Layer-85.jpg',
        'http://elitbud/wp-content/uploads/2020/12/Layer-80.jpg'
    ); ?>
    <div class="gradient"></div>
    <div class="hero-slider">
        <?php foreach ($images as $image): ?>
            <div class="hero-slide" style="background-image: url(<?php echo $image; ?>)"></div>
        <?php endforeach; ?>
    </div>
    <div class="d-flex position-relative align-items-center">
        <div class="hero-arrows custom-slick-prev"></div>
        <div class="hero-content">
            <div class="preheading">Строим жилье более 20 лет</div>
            <div class="heading">Мы не предлагаем жилье<br>Мы улучшаем качество жизни</div>
            <a href="#" class="green-button">обрати житло</a>
        </div>
        <div class="hero-arrows custom-slick-next"></div>
        <div class="total-projects">
            <p class="number">58</p>
            <p class="label">готових <br>проектів <br> будинків</p>
        </div>
    </div>
    <div class="right-graphic">
        <div class="total">
            <p class="label">квадратних <br> метрів</p>
            <p class="number">325 089</p>
        </div>
        <img src="<?php echo get_template_directory_uri() . '/assets/img/Layer-83.png'?>" alt="">
    </div>
    <div class="left-graphic">
        <img src="<?php echo get_template_directory_uri() . '/assets/img/Layer-84.png'?>" alt="">
    </div>
</section>
<section id="hero-2">
    <div class="container">
        <div class="data">
            <div class="data-item">
                <h2>Преимущества</h2>
                <?php $benefits = array(
                    'Лучшие цены на рынке',
                    'Строим быстро, качественно и вовремя',
                    'Грамотное финансовое управление',
                    'чистая деловая репутация',
                ); ?>
                <div class="data-list">
                    <div class="benefits-icon">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/Layer-78.png' ?>" alt="">
                    </div>
                    <ul>
                        <?php foreach ($benefits as $benefit): ?>
                            <li><?php echo $benefit ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="data-item">
                <h2>Предоставляем</h2>
                <?php $benefits = array(
                    'Лучшие цены на рынке',
                    'Строим быстро, качественно и вовремя',
                    'Грамотное финансовое управление',
                    'чистая деловая репутация',
                ); ?>
                <div class="data-list">
                    <div class="benefits-icon">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/Layer-2.png' ?>" alt="">
                    </div>
                    <ul>
                        <?php foreach ($benefits as $benefit): ?>
                            <li><?php echo $benefit ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="door">
                <div>
                    <p class="number">983</p>
                    <p class="label">квартир заселено</p>
                </div>
            </div>
        </div>
    </div>
</section>