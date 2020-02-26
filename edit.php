<?php include "include/header.php"; ?>


    <!-- Left Panel -->

<?php include "include/nav.php"; ?>

    <!-- Left Panel -->

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <div class="content mt-3">
        	<h4>Edit Member Date</h4>
        	<br>

			<form method="post" action="addMemberProcess.php">
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
			      <input class="form-control" type="text" value="" name="addMemberDes" id="example-text-input" placeholder="Officer" required>
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
			      <input type="submit" class="btn btn-info" name="addMemberSub" value="save">
			    </div>
			  </div>
			</form>	

            








        </div> <!-- .content -->
    </div><!-- /#right-panel -->
    <!-- Right Panel -->

<?php include "include/footer.php"; ?>