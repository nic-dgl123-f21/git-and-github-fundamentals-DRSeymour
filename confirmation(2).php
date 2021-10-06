<?php

$size = $_POST['size'];
$topping = $_POST['topping'];
$quantity = $_POST['quantity'];

if ($size != 'Small' && $size != 'Medium' && $size != 'Large') {
    echo 'That size is not a valid option!';
    die;
}

?>
Your <?= $quantity ?> <?= $size ?> <?= $topping ?> pizza<?= $quantity > 1 ? 's' : '' ?> <?= $quantity > 1 ? 'have' : 'has' ?> been ordered and will be available shortly! Thank you for your business!