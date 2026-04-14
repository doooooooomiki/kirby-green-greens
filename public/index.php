<?php

use Kirby\Cms\App;

$base = dirname(__DIR__);
$storage = dirname(__DIR__) . '/storage';

require $base . '/kirby/bootstrap.php';

$kirby = new App([
  'roots' => [
    'index'    => __DIR__,
    'base'     => $base,
    'site'     => $base . '/site',
    'storage'  => $storage,
    'accounts' => $storage . '/accounts',
    'cache'    => $storage . '/cache',
    'content'  => $storage . '/content',
    'sessions' => $storage . '/sessions',
  ]
]);

echo $kirby->render();