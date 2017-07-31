<?php
include 'db.php';
$sql = 'SELECT * FROM users';
$run = mysqli_query( $connect, $sql );
$c = 1;
$ok='none';
$remove='none';
while ( $rows = mysqli_fetch_assoc( $run ) ) {
	if($rows[Approved]==1){
		$ok='block';
		$remove='none';
	}else{
		$ok='none';
		$remove='block';
	}
	echo "<div id='TAp' class='tab-pane fade' >
        <div id='approveFom' class='container fluid'> <img src='images.png' alt='Shams' style=' width:20%; float:left'>
          <p><strong>$rows[U_name] want to be in!</strong></p>
          <button type='button' class='btn btn-info btn-sm' data-toggle='modal' style=' float:right; margin-top:15px;' 
    		data-target='#myModal'>Take a decision</button>
          <!--way to handle it --> 
        </div>
        
        <!-- Modal -->
        <div class='modal fade' id='myModal' role='dialog'>
          <div class='modal-dialog'> 
            
            <!-- Modal content-->
            <div class='modal-content'>
              <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal'>&times;</button>
                <h4 class='modal-title'>Aprove Registratin</h4>
              </div>
              <div class='modal-body'>
                <p>Do you want to approve this registration ?!</p>
                <div>
                  <div >
                    <label>Name:</label>
					<pre>$rows[U_name]</pre>
                  </div>
                  <div >
                    <label>E-mail:</label>
					<pre>$rows[U_email]</pre>
                  </div>
                  <div >
                    <label>Number :</label>
					<pre>$rows[U_number]</pre>
                  </div>
                  <div>
                    <div style='display: $ok;' class='glyphicon glyphicon-ok' >
					</div> <div style='display: $remove;' class='glyphicon glyphicon-remove'></div>
                  </div>
                </div>
              </div>
              <div class='modal-footer'>
                <button type='button' class='btn btn-default' data-dismiss='modal' onclick='approve(true)'>Yes</button>
                <button type='button' class='btn btn-default' data-dismiss='modal' onclick='appove(false)'>No</button>
              </div>
            </div>
            <!-- modal ends --> 
          </div>
        </div>
      </div>";
	

}

?>