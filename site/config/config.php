<?php

return [
  'debug' => false,
  'panel' =>[
    'install' => true,
    'vue' => [
      'compiler' => false
    ]
  ],
  'cache' => [
    'pages' => [
      'active' => true,
    ]
  ],
  'lukaskleinschmidt.laravel-vite' => [
    'hotFile'        => '.tmp/vite.hot',
    'buildDirectory' => 'assets/dist',
  ],
];