<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?= $_GET['PAGE_TITLE'] ?></title>
	<link href="/css/app.css" rel="stylesheet">
	<script src="/js/app.js"></script>
	<script>var _root = <?= JS_WEB_ROOT ?>;</script>
</head>
<body class="<?= $_GET['BODYCLASS'] ?>">
<div id="outer">
<?php
$cfg = false;
if (strpos($_GET['BODYCLASS'], 'cfg') !== false) {
	$cfg = true;
	require __DIR__ . '/_cfg_menu.php';
}
?>

<div id="content">
<img src="/img/loader.gif" alt="Loading…" id="loader">
<?php if ($cfg): ?>
<h1><?= tr('menu.' . $_GET['page']) ?></h1>
<?php endif; ?>
