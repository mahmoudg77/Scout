<?if(!$request->isAjax())include(PATH.'templates/navHeader.php');?>
<div id="postform">
	<form name="form" class="ajax-form" action="" method="post" role="form" enctype="multipart/form-data">
	<?=Framework\Request::CSRF()?>
		<div class="form-group">
			<label for="postName">Post Name :</label>
			<input type="text" class="form-control" id="PostName" name="postName" required>
		</div>
		<div class="form-group">
			<label for="Description">Description :</label>
			<textarea id="description" name="Text1" cols="70" rows="2"></textarea>
		</div>
		<div class="form-group">
			<label for="postImage">Post Image :</label>
			<input id="postmage" type="file" accept="image/jpeg" style="width:200px;" name="PostImg" required>
		</div>
		<div class="form-group">
			<div id="sub">
				<input style="border-radius: 20px; width: 56%;" type="submit" class="btn btn-success"/>
			</div>
		</div>
	</form>
</div>
<?if(!$request->isAjax())include(PATH.'templates/footer.php');?>