<?php require_once"page_config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta  http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>工作帮</title>
	<?php foreach($css as $link): ?>
		<link rel="stylesheet" href='<?=base_url().$link?>'>
	<?php endforeach; ?>
	</style>
	<?php foreach($js as $script): ?>
		<script type="text/javascript" src='<?=base_url().$script?>'></script>
	<?php endforeach; ?>
</head>
<body>

