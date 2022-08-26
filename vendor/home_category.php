<h3 class="aside_danh_muc">danh mục</h3>
<nav>
    <ul class="ul_list">
        <?php foreach ($data_loai_sp as $value) : ?>
            <li class="navigation_menu">
                <a href="search_sp?keyword=<?= $value['ten_loai'] ?>"><?= $value['ten_loai'] ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>