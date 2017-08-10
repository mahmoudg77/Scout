<?include(PATH.'templates/navHeader.php');?>
<div id="eventForm">
	<div id="view">
		<img id="ImgReview"/>
	</div>
	<form action="">
		<div class="form-group">
			<label for="eventName">Event Name :</label>
			<input type="text" class="form-control" id="eventName" required>
		</div>
		<div class="form-group">
			<label for="eventName">Event tag :</label>
			<div class="info">
				<input type="text" class="form-control" id="eventName">
				<a data-toggle="popover" title="Event tag" data-content="ex : Scout is our life" data-placement="left"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
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