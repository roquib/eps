<?php
$conn = mysqli_connect('localhost', 'root', '', 'ramr');
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$teacher_id = $_POST['teacher_id'];
$fetch = mysqli_query($conn, "select * from teacher where id='$teacher_id'");
$teacher_info = mysqli_fetch_assoc($fetch);
$email = $_POST['email'];
// $password = $_POST['password'];
$address = $_POST['address'];
$address2 = $_POST['address2'];
$city = $_POST['city'];
// $user_type = $_POST['user_type'];
$position = $_POST['position'];
$degreeOne = $_POST['degree1'];
$degreeTwo = $_POST['degree2'];
$degreeThree = $_POST['degree3'];
$updateQuery = "update teacher set first_name='$first_name',last_name='$last_name',email='$email',address='$address',address2='$address2',city='$city',position='$position' where id='$teacher_id'";
mysqli_query($conn, $updateQuery);
$updateDegreesOne = "update teacher_degree set degree_name='$degreeOne' where teacher_id='$teacher_info[id]' and id=1";
$updateDegreesTwo = "update teacher_degree set degree_name='$degreeTwo' where teacher_id='$teacher_info[id]' and id=2";
$updateDegreesThree = "update teacher_degree set degree_name='$degreeThree' where teacher_id='$teacher_info[id]' and id=3";
mysqli_query($conn, $updateDegreesOne);
mysqli_query($conn, $updateDegreesTwo);
mysqli_query($conn, $updateDegreesThree);
echo "updated";