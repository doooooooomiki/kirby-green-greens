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

	<?= vite()->js('index.ts') ?>
	<?= vite()->css('styles/main.css') ?>

	<link rel="icon" href="/favicon.svg" />
</head>

<body>
	<header></header>
	<main id="main">
		<?= $slot ?>
	</main>
	<footer></footer>
</body>
</html>