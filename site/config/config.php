<?php
/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

$inc = (10/10);
$q = 90;

return [
  'debug' => true,
  //'languages' => true,
  //'slugs' => 'en',
  'thumbs' => [
    'srcsets' => [
      'img_120' => [
        '800w' => ['width' => (round(800*5/4*$inc)), 'quality' => $q, 'format' => 'webp'],
        '1080w' => ['width' => (round(1080*5/4*$inc)), 'quality' => $q, 'format' => 'webp'],
        '1440w' => ['width' => (round(1440*5/4*$inc)), 'quality' => $q, 'format' => 'webp'],
        '2048w' => ['width' => (round(2048*5/4*$inc)), 'quality' => $q, 'format' => 'webp'],
        '4096w' => ['width' => (round(4096*5/4*$inc)), 'quality' => $q, 'format' => 'webp']
      ],
      'img_100' => [
        '800w' => ['width' => (round(800*$inc)), 'quality' => $q, 'format' => 'webp'],
        '1080w' => ['width' => (round(1080*$inc)), 'quality' => $q, 'format' => 'webp'],
        '1440w' => ['width' => (round(1440*$inc)), 'quality' => $q, 'format' => 'webp'],
        '2048w' => ['width' => (round(2048*$inc)), 'quality' => $q, 'format' => 'webp'],
        '4096w' => ['width' => (round(4096*$inc)), 'quality' => $q, 'format' => 'webp']
      ],
      'img_80' => [
        '800w' => ['width' => (round(800*$inc)), 'quality' => $q, 'format' => 'webp'],
        '1080w' => ['width' => (round(1080*$inc)), 'quality' => $q, 'format' => 'webp'],
        '1440w' => ['width' => (round(1440*4/5*$inc)), 'quality' => $q, 'format' => 'webp'],
        '2048w' => ['width' => (round(2048*4/5*$inc)), 'quality' => $q, 'format' => 'webp'],
        '4096w' => ['width' => (round(4096*4/5*$inc)), 'quality' => $q, 'format' => 'webp']
      ],
      'img_67' => [
        '800w' => ['width' => (round(800*$inc)), 'quality' => $q, 'format' => 'webp'],
        '1080w' => ['width' => (round(1080*$inc)), 'quality' => $q, 'format' => 'webp'],
        '1440w' => ['width' => (round(1440*2/3*$inc)), 'quality' => $q, 'format' => 'webp'],
        '2048w' => ['width' => (round(2048*2/3*$inc)), 'quality' => $q, 'format' => 'webp'],
        '4096w' => ['width' => (round(4096*2/3*$inc)), 'quality' => $q, 'format' => 'webp']
      ],
      'img_50' => [
        '800w' => ['width' => (round(800*$inc)), 'quality' => $q, 'format' => 'webp'],
        '1080w' => ['width' => (round(1080*$inc)), 'quality' => $q, 'format' => 'webp'],
        '1440w' => ['width' => (round(1440*1/2*$inc)), 'quality' => $q, 'format' => 'webp'],
        '2048w' => ['width' => (round(2048*1/2*$inc)), 'quality' => $q, 'format' => 'webp'],
        '4096w' => ['width' => (round(4096*1/2*$inc)), 'quality' => $q, 'format' => 'webp']
      ],
      'img_40' => [
        '800w' => ['width' => (round(800*$inc)), 'quality' => $q, 'format' => 'webp'],
        '1080w' => ['width' => (round(1080*$inc)), 'quality' => $q, 'format' => 'webp'],
        '1440w' => ['width' => (round(1440*2/5*$inc)), 'quality' => $q, 'format' => 'webp'],
        '2048w' => ['width' => (round(2048*2/5*$inc)), 'quality' => $q, 'format' => 'webp'],
        '4096w' => ['width' => (round(4096*2/5*$inc)), 'quality' => $q, 'format' => 'webp']
      ],
      'img_33' => [
        '800w' => ['width' => (round(800*$inc)), 'quality' => $q, 'format' => 'webp'],
        '1080w' => ['width' => (round(1080*$inc)), 'quality' => $q, 'format' => 'webp'],
        '1440w' => ['width' => (round(1440*1/3*$inc)), 'quality' => $q, 'format' => 'webp'],
        '2048w' => ['width' => (round(2048*1/3*$inc)), 'quality' => $q, 'format' => 'webp'],
        '4096w' => ['width' => (round(4096*1/3*$inc)), 'quality' => $q, 'format' => 'webp']
      ],
      'img_25' => [
        '800w' => ['width' => (round(800*$inc)), 'quality' => $q, 'format' => 'webp'],
        '1080w' => ['width' => (round(1080*$inc)), 'quality' => $q, 'format' => 'webp'],
        '1440w' => ['width' => (round(1440*1/4*$inc)), 'quality' => $q, 'format' => 'webp'],
        '2048w' => ['width' => (round(2048*1/4*$inc)), 'quality' => $q, 'format' => 'webp'],
        '4096w' => ['width' => (round(4096*1/4*$inc)), 'quality' => $q, 'format' => 'webp']
      ],
      'img_17' => [
        '800w' => ['width' => (round(800*$inc)), 'quality' => $q, 'format' => 'webp'],
        '1080w' => ['width' => (round(1080*$inc)), 'quality' => $q, 'format' => 'webp'],
        '1440w' => ['width' => (round(1440*1/6*$inc)), 'quality' => $q, 'format' => 'webp'],
        '2048w' => ['width' => (round(2048*1/6*$inc)), 'quality' => $q, 'format' => 'webp'],
        '4096w' => ['width' => (round(4096*1/6*$inc)), 'quality' => $q, 'format' => 'webp']
      ],
      'img_13' => [
        '800w' => ['width' => (round(800*$inc)), 'quality' => $q, 'format' => 'webp'],
        '1080w' => ['width' => (round(1080*$inc)), 'quality' => $q, 'format' => 'webp'],
        '1440w' => ['width' => (round(1440*1/8*$inc)), 'quality' => $q, 'format' => 'webp'],
        '2048w' => ['width' => (round(2048*1/8*$inc)), 'quality' => $q, 'format' => 'webp'],
        '4096w' => ['width' => (round(4096*1/8*$inc)), 'quality' => $q, 'format' => 'webp']
      ],
      'breakpoints' => [800, 1080, 1440, 2048, 4096],
    ],
  ],
  'cache' => [
    'pages' => [
      'active' => false,
      'ignore' => function ($page) {
        return $page->title()->value() === 'Do not cache';
      }
    ],
  ],
];
