<?php


require_once '../vendor/autoload.php';
use App\classes\StringWordCount;

if (isset($_POST['btn'])) {

    $stringWordCount = new StringWordCount($_POST);
    $result = $stringWordCount->getWordString();
    include 'index.php';
}
else
{
    header('Location: index.php');
}