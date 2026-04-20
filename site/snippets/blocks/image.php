<?php

use Kirby\Toolkit\Str;
use Kirby\Toolkit\Html;
/** @var \Kirby\Cms\Block $block */

$alt     = $block->alt();
$caption = $block->caption();
$link    = $block->link();
$img     = null;


if ($block->location() == 'web') {
  $img = Html::img($block->src()->esc(), ['alt' => $alt]);
} elseif ($image = $block->image()->toFile()) {
  $alt = $alt->or($image->alt());

  $img = Html::img(
    $image->thumbhashUri(),
    [
      'loading' => 'lazy',
      'data-srcset' => $image->srcset(),
      'data-sizes' => 'auto',
      'width' => $image->width(),
      'height' => $image->height(),
      'style' => 'aspect-ratio: ' . $image->width() . '/' . $image->height(),
      'alt' => $alt->isNotEmpty() ? $alt->escape() : null
    ]
  );
}

?>
<figure>
  <?php if ($link->isNotEmpty()): ?>
    <a href="<?= Str::esc($link->toUrl()) ?>">
      <?= $img ?>
    </a>
  <?php else: ?>
    <?= $img ?>
  <?php endif ?>

  <?php if ($caption->isNotEmpty()): ?>
  <figcaption>
    <?= $caption ?>
  </figcaption>
  <?php endif ?>
</figure>