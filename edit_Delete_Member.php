<?php 
session_start();
if(!isset($_SESSION['regId']))
  header("Location:registration.php");
 ?>
 <?php 
    include 'include/connection.php';

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
                                <strong class="card-title">Member List</strong>
                                <span class="text-success">
                                    <?php 
                                        if (isset($_SESSION['updateMsg'])) {
                                            echo $_SESSION['updateMsg'];
                                            unset($_SESSION['updateMsg']);
                                        }

                                     ?>
                                </span>
                            </div>
                            <form action="edit.php" method="post"></form>
                            <div class="card-body">
                                <?php 
                                    if ($result->num_rows > 0) {

                                ?>
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Total</th>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Designation</th>
                                            <th>Advance</th>
                                            <th>Edit // Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    <?php
                                        $i = 1;
                                        // $total = 0;   
                                        while ($row = $result->fetch_assoc()) {                                                
                                    ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $row['addMemberId'];?></td>
                                            <td><?php echo $row['addMemberName'];?></td>
                                            <td><?php echo $row['addMemberDes'];?></td>
                                            <td><?php echo $row['addMemberAdvance'];?></td>
                                            <td><a href="edit.php?edit_id=<?php echo $row['autoid']; ?>">Edit</a> &nbsp; &nbsp; <a href="edit.php">Delete</a></td>
                                        </tr>           

                                    <?php
                                        // $total = $total + $row['addMemberAdvance'];

                                        $i++;
                                            }
                                            ?>
                                        <!-- <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Total Amount = </td>
                                            <td> <?php $total;?>/=</td>
                                        </tr> -->
                                    </tbody>
                                </table>
                                    <?php 
                                        }
                                     ?>                       
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