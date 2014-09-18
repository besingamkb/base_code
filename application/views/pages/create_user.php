<h1>New User</h1>
<div>
	<form method="post" id="create_newuser" name="create_newuser" action="<?php echo base_url() ?>user/validate_newuser">
		<p>username: <input type="text" name="username"></p>
		<p>password: <input type="password" name="password"></p>
		<p><input type="submit"> - <input type="reset"></p>
	</form>
	<div class="error" style="display:none"></div>
</div>