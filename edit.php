<?php 
session_start();
if(!isset($_SESSION['regId']))
  header("Location:registration.php");
 ?>
 <?php 
    include 'include/connection.php';
    include 'include/function.php';
	$done = $err = $editId = "";

		$getId = $_GET['edit_id'];

	 	$sqlS = "SELECT * FROM `addmember` WHERE `autoid` = $getId";
	 	$result = $conn->query($sqlS);

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

        	<?php 
        		     while($row = $result->fetch_assoc()) {
         	?>
			<form method="post" action="editProcess.php">
				<input type="hidden"  name="editid" value="<?php echo $row["autoid"]; ?>"  >
			  <div class="form-group row">
			    <label for="example-text-input" class="col-2 col-form-label">ID : </label>
			    <div class="col-10">
			      <input class="form-control" type="number" value="<?php echo $row["addMemberId"]; ?>" name="addMemberId" id="example-text-input" placeholder="20160360" required>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="example-text-input" class="col-2 col-form-label">Name : </label>
			    <div class="col-10">
			      <input class="form-control" type="text" value="<?php echo $row["addMemberName"]; ?>" name="addMemberName" id="example-text-input" placeholder="Mir Sakhawat Hossen" required>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="example-text-input" class="col-2 col-form-label">Designation : </label>
			    <div class="col-10">

			    	<select class="form-control" id="sel1" name="addMemberDes">
		    	        <option>Select Designation</option>
		    	        <option value="GM" <?php if($row["addMemberDes"]=="GM") echo 'selected="selected"'; ?>>GM</option>
		    	        <option value="AGM" <?php if($row["addMemberDes"]=="AGM") echo 'selected="selected"'; ?> >AGM</option>

		    	        <option value="Sr. Manager" <?php if($row["addMemberDes"]=="Sr. Manager") echo 'selected="selected"'; ?> >Sr. Manager</option>
		    	        <option value="Manager" <?php if($row["addMemberDes"]=="Manager") echo 'selected="selected"'; ?> >Manager</option>
		    	        <option value="Assistant Manager" <?php if($row["addMemberDes"]=="Assistant Manager") echo 'selected="selected"'; ?> >Assistant Manager</option>
		    	        <option value="Sr. Exucutive" <?php if($row["addMemberDes"]=="Sr. Exucutive") echo 'selected="selected"'; ?> >Sr. Exucutive</option>
		    	        <option value="Exucutive" <?php if($row["addMemberDes"]=="Exucutive") echo 'selected="selected"'; ?> >Exucutive</option>
		    	        <option value="Sr. Officer" <?php if($row["addMemberDes"]=="Sr. Officer") echo 'selected="selected"'; ?> >Sr. Officer</option>
		    	        <option value="Officer" <?php if($row["addMemberDes"]=="Officer") echo 'selected="selected"'; ?> >Officer</option>
		    	        <option value="Jr. Officer" <?php if($row["addMemberDes"]=="Jr. Officer") echo 'selected="selected"'; ?> >Jr. Officer</option>
		    	        <option value="Office Assistant" <?php if($row["addMemberDes"]=="Office Assistant") echo 'selected="selected"'; ?> >Office Assistant</option>
		    	        <option value="Foreman" <?php if($row["addMemberDes"]=="Foreman") echo 'selected="selected"'; ?> >Foreman</option>
		    	        <option value="Sr. Mechanic" <?php if($row["addMemberDes"]=="Sr. Mechanic") echo 'selected="selected"'; ?> >Sr. Mechanic</option>
		    	        <option value="Mechanic" <?php if($row["addMemberDes"]=="Mechanic") echo 'selected="selected"'; ?> >Mechanic</option>
		    	        <option value="Jr. Mechanic" <?php if($row["addMemberDes"]=="Jr. Mechanic") echo 'selected="selected"'; ?> >Jr. Mechanic</option>
		    	        <option value="Peon" <?php if($row["addMemberDes"]=="Peon") echo 'selected="selected"'; ?> >Peon</option>
		    	        <option value="Driver" <?php if($row["addMemberDes"]=="Driver") echo 'selected="selected"'; ?> >Driver</option>
	    	     	</select> 
<!-- 
			      <input class="form-control" type="text" value="" name="addMemberDes" id="example-text-input" placeholder="Officer" required> -->

			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="example-text-input" class="col-2 col-form-label">Advance : </label>
			    <div class="col-10">
			      <input class="form-control" type="number" value="<?php echo $row["addMemberAdvance"]; ?>" name="addMemberAdvance" id="example-text-input" placeholder="700" required>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="comment" class="col-2 col-form-label"></label>
			    <div class="col-10">
			      <input type="submit" class="btn btn-info" name="editMember" value="Edid & Save">
			    </div>
			  </div>
			</form>	
			<?php 

				} //while loop end
			 ?>

            








        </div> <!-- .content -->
    </div><!-- /#right-panel -->
    <!-- Right Panel -->

<?php include "include/footer.php"; ?>