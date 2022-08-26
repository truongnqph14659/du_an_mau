<div class="swiper mySwiper p-1">
    <div class="swiper-wrapper">
        <?php foreach ($related_sp as $values) : ?>
            <div class="swiper-slide main_product">
                <div class="main_product_image">
                    <a href="details?id_sp=<?= $values['ma_san_pham'] ?>">
                        <img src="<?= $values['images_sp'] ?>">
                    </a>
                </div>
                <h4><a href="details?id_sp=<?= $values['ma_san_pham'] ?>"><?= $values['ten_sp'] ?></a></h4>
                <span><?= number_format($values['don_gia']) ?>VNĐ</span>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>