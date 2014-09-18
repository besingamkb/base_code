<?php dprint($content); ?>
<div>
	<form id="loginform" name="login" method="post" action="<?php echo base_url() ?>user/validate_login">
	<p>Username: <input type="text" name="username"></p>
	<p>Password: <input type="password" name="password"></p>
	<p><input type="submit"> - <a href="<?php echo base_url() ?>main/create_account">create an account</a></p>
	</form>
	<div class="error" style="display:none"></div>
</div>

<!-- bmk version ajax -->
