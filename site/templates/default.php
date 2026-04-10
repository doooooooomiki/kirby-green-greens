<?php

/** @var \Kirby\Cms\App $kirby */
/** @var \Kirby\Cms\Site $site */
/** @var \Kirby\Cms\Page $page */
?>

<?php snippet('layout', slots: true) ?>
<h1 class="text-3xl font-bold underline"><?= $page->title() ?></h1>
<?php endsnippet() ?>
