<?php include "header.php"; include "conn.php";
$org = $_POST["org"];
$dep = $_POST["dep"];
$dep2 = $_POST["dep2"];
$sql = "INSERT INTO `organization`(`organization_id`, `organization_name`, `department_id`) VALUES ('','$org','')";
$result = mysqli_query($conn,$sql);
$sql1 = "SELECT * FROM `organization` WHERE organization_name = '$org'";
$result1 = mysqli_query($conn,$sql1);
$row = $result1->fetch_assoc();
$org_n = $row["organization_id"];
$sql2 = "INSERT INTO `department`(`department_id`, `department_name`, `organization_id`) VALUES ('','$dep','$org_n')";
$result2 = mysqli_query($conn,$sql2);
$sql3 = "SELECT * FROM `department` WHERE department_name = '$dep'";
$result3 = mysqli_query($conn,$sql3);
$row1 = $result3->fetch_assoc();
$dep_n = $row1["department_id"];
$sql4 = "INSERT INTO `department2`(`department2_id`, `department2_name`, `department_id`) VALUES ('','$dep2','$dep_n')";
$result4 = mysqli_query($conn,$sql4);
header("location:register_form.php?sweet=1");
?>