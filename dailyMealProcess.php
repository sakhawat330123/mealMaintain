<?php 
session_start();
if(!isset($_SESSION['regId']))
  header("Location:registration.php");
 ?>


<?php 
	include 'include/connection.php';

    if (isset($_POST['dateFild'])) 
      	$date = $_POST['dateFild'];

    echo $date;
    $sql = "SELECT * FROM `addmember`";
    $result = $conn->query($sql);









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
                                <?php 

                                	if ($result->num_rows > 0) {
                                	    

                                ?>
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Sl No</th>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Abcent</th>
                                            <th>Present</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                <?php  

                                while($row = $result->fetch_assoc()) {

                                ?>


                                <tr>
                                    <td>1</td>
                                    <td><?php echo $row["addMemberId"]; ?></td>
                                    <td><?php echo $row["addMemberName"]; ?></td>
                                    <td>
                                    	<div class="form-group">
                                    	      <select class="form-control" id="sel1" name="sellist1">
                                    	        <option>1</option>
                                    	        <option>2</option>
                                    	        <option>3</option>
                                    	        <option>0</option>
                                    	      </select>
                                    	</div>
                                    </td>
                                </tr>


                                <?php 

                                    
                                } else {
                                    echo "0 results";
                                }
                                 ?>                            


                               
        	                   
        	                            
        	                            <tr>
        	                                <td></td>
        	                                <td>Bazar TK =</td>
        	                                <td><input type="number" name="" id=""></td>
                                            <td>Customar cell =</td>
                                            <td><input type="number" name="" id=""></td>
        	                            </tr>
        	                        </tbody>
        	                    </table>
        	                    <input type="submit" value="SAVE">
        	                  </form>
        	              <?php } ?>
        	                </div>
        	            </div>
        	        </div>


        	    </div>
        	</div><!-- .animated -->

            








        </div> <!-- .content -->
    </div><!-- /#right-panel -->
    <!-- Right Panel -->

<?php include "include/footer.php"; ?>