<?if(!$request->isAjax())include(PATH.'templates/AdminHeader.php');?>

<div class="container-fluid" id="widget">
<h1 style="text-align: center">Team Registration Form</h1><hr>
	<div class="FF">
		<div class="form-group col-xs-8" style="white-space: nowrap">
			<label class="control-label"  style="float: left" for="teamName">Team name:</label>
			<p>National ID</p>
		</div>
		<div class="form-group col-xs-10">
			<label class="control-label"  style="float: left" style="float: left" for="tha">Team office:</label>
			<div>
				<p>National ID</p>
			</div>
		</div>
		<div class="form-group col-xs-10">
			<label class="control-label"  style="float: left" for="Supervisory">Supervisory Authority:</label>
			<div >
				<p>National ID</p>
			</div>
		</div>
		<div class="form-group col-xs-10">
			<label class="control-label"  style="float: left" for="leader">Leader:</label>
			<div >
				<p>National ID</p>
			</div>
		</div>
		<div class="form-group col-xs-10">
			<label class="control-label"  style="float: left" for="leaderA">Leader assist:</label>
			<div >
				<p>National ID</p>
			</div>
		</div>
	</div>
	<div class="FF">
		<div class="form-group col-xs-10">
			<label class="control-label"  style="float: left" for="branch">Branch:</label>
			<div >
				<p>National ID</p>
			</div>
		</div>
		<div class="form-group col-xs-10">
			<label class="control-label"  style="float: left" for="TotalM">Registration fees:</label>
			<div >
				<p>National ID</p>
			</div>
		</div>
		<div class="form-group col-xs-10">
			<label class="control-label"  style="float: left" for="receiptN">receipt no.:</label>
			<div >
				<p>National ID</p>
			</div>
		</div>
		<div class="form-group col-xs-10">
			<label class="control-label"  style="float: left" for="payDate">Pay date:</label>
			<div >
				<p>National ID</p>
			</div>
		</div>
		<div class="form-group col-xs-10">
			<label class="control-label"  style="float: left" for="recordN">record no.:</label>
			<div >
				<p>National ID</p>
			</div>
		</div>
	</div>
	<div id="tableT">
		<table class="table">
			<thead class="thead-inverse">
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Birthdate</th>
					<th>National ID</th>
				</tr>
			</thead>
			<tbody id="table">
				<tr>
					<th scope="row">1</th><!--variable-->
					<td><p>name</p></td>
					<td><p>Birth Date</p></td>
					<td><p>National ID</p></td>
				</tr>
			</tbody>
		</table>
	</div>
	<pre class=" col-xs-10"  id="print">Save Your Team registration File and Print it Please !</pre>
	<input class="btn btn-success btn-lg" type="button" id="btnSave" value="Save PNG"/>


	<?if(!$request->isAjax())include(PATH.'templates/AdminFooter.php');?>