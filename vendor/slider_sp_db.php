<div class="banner swiper mySwiper">
    <div class="swiper-wrapper">
        <?php foreach ($data_sp_db as $values) : ?>
            <div class="swiper-slide">
                <img src="<?= $values['images_sp_db'] ?>" alt="">
            </div>
        <?php endforeach; ?>
    </div>
    <div class="swiper-pagination"></div>
    <div class="button_slider">
        <div class="right_button">
            <ion-icon name="chevron-back-outline"></ion-icon>
        </div>
        <div class="left_button">
            <ion-icon name="chevron-forward-outline"></ion-icon>
        </div>
    </div>
</div>