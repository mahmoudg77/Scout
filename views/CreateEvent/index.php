<?include(PATH.'templates/navHeader.php');?>
<div id="eventForm">
	<div id="view">
		<img id="ImgReview"/>
	</div>
	<form name="form" class="ajax-form" action="" method="post" role="form" enctype="multipart/form-data">
	<?=Framework\Request::CSRF()?>
		<div class="form-group">
			<label for="eventName">Event Name :</label>
			<input type="text" class="form-control"  name="eventName" required>
		</div>
		<div class="form-group">
			<label for="eventTag">Event tag :</label>
			<div class="info">
				<input type="text" class="form-control" name="eventTag">
<!--				<a data-toggle="popover" title="Event tag" data-content="ex : Scout is our life" data-placement="left"><i class="fa fa-info-circle" aria-hidden="true"></i></a>-->
			</div>
		</div>
		<div class="form-group">
			<label for="Description">Dexcription :</label>
			<textarea id="description" name="Text1" cols="130" rows="2"></textarea>
		</div>
		<div class="form-group">
			<label for="eventName">Event Image :</label>
			<input id="eventmage" type="file" accept="image/jpeg" style="width:200px;" name="eventImg" required>
		</div>
		<div class="form-group">
			<div id="sub">
				
				<input type="submit" class="btn btn-success btn-lg btn-block" value="Submit"/>
			</div>
		</div>
	</form>
</div>
<?include(PATH.'templates/footer.php');?>