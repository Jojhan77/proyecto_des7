<?php
    $num = file_get_contents("/contador.php");
    $num = $num + 1;

    file_put_contents("/contador.php", $num);
?>