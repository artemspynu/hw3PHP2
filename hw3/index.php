<?php

require_once('vendor/autoload.php');


$loader = new Twig_Loader_Filesystem('template');
$twig = new Twig_Environment($loader);

$gallery = [
    [
        'small' => 'small/1.jpg',
        'large' => 'large/1.jpg'
    ],
    [
        'small' => 'small/2.jpg',
        'large' => 'large/2.jpg'
    ],
    [
        'small' => 'small/3.jpg',
        'large' => 'large/3.jpg'
    ],
    [
        'small' => 'small/4.jpg',
        'large' => 'large/4.jpg'
    ],
];


try {
    $page = $twig->load('gallery.twig');

    echo $page->render([
        'gallery' => $gallery,
    ]);

} catch (Exception $exception) {
    echo $exception->getMessage();
}
