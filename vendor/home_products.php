<section class="main_products">
    <?php foreach ($data_sp as $values) : ?>
        <div class="main_product">
            <div class="main_product_image">
                <a href="details?id_sp=<?= $values['ma_san_pham'] ?>">
                    <img src="<?= $values['images_sp'] ?>" alt="">
                </a>
            </div>
            <h4><a href="details?id_sp=<?= $values['ma_san_pham'] ?>"><?= $values['ten_sp'] ?></a></h4>
            <span><?= number_format($values['don_gia']) ?>VNĐ</span>
        </div>
    <?php endforeach; ?>
</section>