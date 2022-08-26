<?php
function insert_img($image)
{
    $image_currently = "";
    if ($image['size'] > 0) {
        $image_currently = uniqid() . $image['name'];
        move_uploaded_file($image['tmp_name'], 'C:/xampp/htdocs/du_an_mau/image/' . $image_currently);
        $image_currently = 'http://localhost/du_an_mau/image/' . $image_currently;
    }
    return $image_currently;
}
