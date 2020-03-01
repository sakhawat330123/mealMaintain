<?php 
session_start();
if(!isset($_SESSION['regId']))
  header("Location:registration.php");

 ?>


<?php 

    

 ?>







<?php include "include/header.php"; ?>
    <!-- Left Panel -->
<?php include "include/nav.php"; ?>
    <!-- Left Panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <div class="content mt-3">

        	<div class="animated fadeIn">
        	    <div class="row">

        	        <div class="col-md-12">
        	            <div class="card">
        	                <div class="card-header">
        	                    <strong class="card-title">Daile Meal & Cost</strong>
        	                </div>
                            <form action="dailyMealProcess.php" method="POST">
            	                <div class="card-body">
            	                	<input type="date" name="dateFild" id="" required>
            	                	<br>
                                    <input type="submit" value="set" name="dateTake">
                                </div>
                            </form>        	                    
        	            </div>
        	        </div>
        	    </div>


        	    
        	</div><!-- .animated -->

            








        </div> <!-- .content -->
    </div><!-- /#right-panel -->
    <!-- Right Panel -->

<?php include "include/footer.php"; ?>