<?php 
session_start();
if(!isset($_SESSION['regId']))
  header("Location:registration.php");
 ?>
<?php 
	include 'include/connection.php';
	include 'include/function.php';
	$done = $err = "";
    if( isset($_POST['addMemberSub'])){

    $addMemberId = check_data($_POST['addMemberId']);
    $addMemberName = check_data($_POST['addMemberName']);
    $addMemberDes = check_data($_POST['addMemberDes']);
    $addMemberAdvance = check_data($_POST['addMemberAdvance']);

    $sql = "INSERT INTO `addmember`(`addMemberId`, `addMemberName`, `addMemberDes`, `addMemberAdvance`) VALUES ($addMemberId, '$addMemberName', '$addMemberDes', $addMemberAdvance)";


    $fire = $conn->query($sql);

    if ($fire == true) {
    	$done = "Data Save Successfully";
    }else{
    	$err = "Error: " . $sql . "<br>" . $conn->error;
    }

  }

$conn->close();



 ?>




<?php include "include/header.php"; ?>
    <!-- Left Panel -->
<?php include "include/nav.php"; ?>
    <!-- Left Panel -->

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <div class="content mt-3">

        	<h3>Add Member Information  <span class="text-success"><?php echo $done; ?></span>
        								<span class="text-danger"><?php echo $err;  ?></span>
        	</h3>
        	<br>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
			  <div class="form-group row">
			    <label for="example-text-input" class="col-2 col-form-label">ID : </label>
			    <div class="col-10">
			      <input class="form-control" type="number" value="" name="addMemberId" id="example-text-input" placeholder="20160360" required>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="example-text-input" class="col-2 col-form-label">Name : </label>
			    <div class="col-10">
			      <input class="form-control" type="text" value="" name="addMemberName" id="example-text-input" placeholder="Mir Sakhawat Hossen" required>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="example-text-input" class="col-2 col-form-label">Designation : </label>
			    <div class="col-10">

			    	<select class="form-control" id="sel1" name="addMemberDes">
		    	        <option>Select Designation</option>
		    	        <option value="GM">GM</option>
		    	        <option value="AGM">AGM</option>
		    	        <option value="Sr. Manager">Sr. Manager</option>
		    	        <option value="Manager">Manager</option>
		    	        <option value="Assistant Manager">Assistant Manager</option>
		    	        <option value="Sr. Exucutive">Sr. Exucutive</option>
		    	        <option value="Exucutive">Exucutive</option>
		    	        <option value="Sr. Officer">Sr. Officer</option>
		    	        <option value="Officer">Officer</option>
		    	        <option value="Jr. Officer">Jr. Officer</option>
		    	        <option value="Office Assistant">Office Assistant</option>
		    	        <option value="Foreman">Foreman</option>
		    	        <option value="Sr. Mechanic">Sr. Mechanic</option>
		    	        <option value="Mechanic">Mechanic</option>
		    	        <option value="Jr. Mechanic">Jr. Mechanic</option>
		    	        <option value="Peon">Peon</option>
		    	        <option value="Driver">Driver</option>
	    	     	</select>
<!-- 
			      <input class="form-control" type="text" value="" name="addMemberDes" id="example-text-input" placeholder="Officer" required> -->

			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="example-text-input" class="col-2 col-form-label">Advance : </label>
			    <div class="col-10">
			      <input class="form-control" type="number" value="" name="addMemberAdvance" id="example-text-input" placeholder="700" required>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="comment" class="col-2 col-form-label"></label>
			    <div class="col-10">
			      <input type="submit" class="btn btn-info" name="addMemberSub" value="SUBMIT">
			    </div>
			  </div>
			</form>	

            








        </div> <!-- .content -->
    </div><!-- /#right-panel -->
    <!-- Right Panel -->

<?php include "include/footer.php"; ?>