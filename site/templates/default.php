<?php

/** @var \Kirby\Cms\App $kirby */
/** @var \Kirby\Cms\Site $site */
/** @var \Kirby\Cms\Page $page */
?>

<?php snippet('layout', slots: true) ?>
<section class="wrapper">
  <h1><?= $page->title() ?></h1>
</section>
<?php endsnippet() ?>
