<h1 class="aside_sp_moi_xem">10 sản sản phẩm nổi bật</h1>
<div class="aside_seen_products">
    <?php foreach ($top_products as $values) : ?>
        <section class="aside_seen_product">
            <div class="aside_picture">
                <a href="details?id_sp=<?= $values['ma_san_pham'] ?>">
                    <img src="<?= $values['images_sp'] ?>">
                </a>
            </div>
            <div class="aside_text">
                <a href="details?id_sp=<?= $values['ma_san_pham'] ?>">
                    <h4><?= $values['ten_sp'] ?></h4>
                </a>
                <span><?= number_format($values['don_gia']) ?>VNĐ</span>
            </div>
        </section>
    <?php endforeach; ?>

</div>