Сниппет для создания QR-кода.

Установка:

1) Распаковать содержимое архива в корень сайта

2) Создать сниппет TSVqr с таким содержанием:

<?php
require_once(MODX_BASE_PATH."assets/snippets/TSVqr/qr.snippet.php");
?>

3) Сниппет вызывается в теге изображения так:

<img src="[[TSVqr? &text=`текст` &format=`GIF`]]" alt="" />

&format - это формат результирущей картинки, может быть GIF, PNG, JPG. По-умолчанию - GIF