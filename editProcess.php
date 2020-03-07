<?php 
session_start();
if(!isset($_SESSION['regId']))
  header("Location:registration.php");
 ?>




<?php 
	include 'include/connection.php';
	include 'include/function.php';

    if( isset($_POST['editMember'])){

    $editId = $_POST['editid'];
    $addMemberId = check_data($_POST['addMemberId']);
    $addMemberName = check_data($_POST['addMemberName']);
    $addMemberDes = check_data($_POST['addMemberDes']);
    $addMemberAdvance = check_data($_POST['addMemberAdvance']);


    $sql ="UPDATE `addmember` SET `addMemberId`=$addMemberId,`addMemberName`= '$addMemberName',`addMemberDes`= '$addMemberDes',`addMemberAdvance`= $addMemberAdvance WHERE `autoid` = $editId";

    $fire = $conn->query($sql);

    if ($fire == true) {
    	$_SESSION['updateMsg'] = "Data Update Successfully";
    	header('Location:edit_Delete_Member.php');
    }else{
    	echo "Error: " . $sql . "<br>" . $conn->error;
    }

  }

   ?>
