<?if(!$request->isAjax())include(PATH.'templates/header.php');?>
<!--
<div style="width:500px;margin:0 auto">
	<form action="<?=actionLink('login','auth.Login')?>" method="post">
		<?=Framework\Request::CSRF()?>
		<table class="table">
			<tr>
				<td>Email :</td>
				<td><input type="text" name="email" class="form-control"/>
				</td>
			</tr>
			<tr>
				<td>Password :</td>
				<td><input type="password" name="password" class="form-control"/>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Login" class="btn btn-danger"/>
				</td>
			</tr>
		</table>
	</form>
</div>
-->

<?if(!$request->isAjax())include(PATH.'templates/footer.php');?>