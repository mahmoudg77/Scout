<?if(!$request->isAjax())include(PATH.'templates/navHeader.php');?>

<div class="card">
	<div class="d">
		<div class="image"> </div>
		<div class="sginD">
			<label for="sgin">رئيس مجلس الاداره</label>
		</div>
	</div>

	<div class="info">
		<div class="form-group">
			<label for="name">مصطفي محمد</label>
			<label for="name">: الأسم</label>
		</div>
		<div class="form-group">
			<label for="mission">قائد وحده</label>
			<label for="mission">: المهمه</label>
		</div>
		<div class="form-group">
			<label for="group">بحاره</label>
			<label for="group">: الفرقه</label>
		</div>
		<div class="form-group">
			<label for="oddice">عابدين</label>
			<label for="office">: الهيئه</label>
		</div>
		<div class="form-group date">
			<label for="endingdate">3/8/2020</label>
			<label for="office">: ينتهي في</label>
		</div>
	</div>

</div>
<?if(!$request->isAjax())include(PATH.'templates/footer.php');?>