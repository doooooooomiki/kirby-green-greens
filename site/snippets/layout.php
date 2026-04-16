<?php

/** @var Kirby\Cms\Page $page
 *  @var Kirby\Cms\Site $site
 *  @var Kirby\Cms\App $kirby */

?>

<!DOCTYPE html>
<html lang="<?= $kirby->language()?->code() ?>">

<head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="theme-color" content="#000000">
  <title>
    <?= $page->title() ?> | <?= $site->title() ?>
  </title>
	<link rel="icon" href="/favicon.ico" sizes="32x32">

	<?= vite('src/main.ts') ?>
	<?= js('assets/js/hi.js') ?>

	<link rel="icon" href="/favicon.svg" />
</head>

<body>
	<?php snippet('header') ?>
	<main id="main">
		<?= $slot ?>
	</main>
	<?php snippet('footer') ?>
</body>
</html>