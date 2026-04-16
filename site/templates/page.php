<?php

/**
 * @var Kirby\Cms\App $kirby
 * @var Kirby\Cms\Site $site
 * @var Kirby\Cms\Page $page
 */
?>

<?php snippet('layout', slots: true) ?>
<?= $page->blocks()->toBlocks() ?>
<?php endsnippet() ?>