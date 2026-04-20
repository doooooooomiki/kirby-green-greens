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
  'thumbs' => [
    'format' => 'webp',
    'quality' => 85,
    'presets' => [
      'default' => ['format' => 'webp', 'quality' => 85],
    ],
    'srcsets' => [
      'default' => [
        390, // iPhone 12/13/14
        430, // iPhone 15 Pro Max
        780, // iPhone 12/13/14 @2x
        860, // iPhone 15 Pro Max @2x
        1170, // iPhone 12/13/14 @3x
        1366, // Common laptop resolution
        1440, // MacBook, many modern laptops
        1920, // Full HD
        2580, // iPhone 15 Pro Max @3x
        2880, // MacBook @2x
      ]
    ]
  ],
  'lukaskleinschmidt.laravel-vite' => [
    'hotFile'        => '.tmp/vite.hot',
    'buildDirectory' => 'assets/dist',
  ],
];