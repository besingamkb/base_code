<!DOCTYPE html>
<html>
<head>
	<meta name="base_url" content="<?php echo base_url(); ?>">
	<title><?php echo (isset($header['title'])) ? $header['title'] . " | " : "" ; ?>BASE CODE</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
</head>
<body>
<?php @dprint($header['sample']) ?>

<div>
	<div>
		<?php if ( is_logged() ): ?>
		<p>Hello <strong><?php echo user_meta('username'); ?></strong></p>
		<?php endif; ?>
		<ul>
			<li><a href="<?php echo base_url() ?>">home</a></li>
			<?php if (!is_logged()) : ?>
			<li><a href="<?php echo base_url() ?>main/login">login</a></li>
			<?php endif; ?>
			<?php if (is_logged()) : ?>
			<li><a href="<?php echo base_url() ?>main/create_account">new user</a></li>
			<li><a href="<?php echo base_url() ?>main/users">Users</a></li>
			<li><a href="<?php echo base_url() ?>main/logout">logout</a></li>
			<?php endif; ?>
		</ul>
	</div>
</div>