<?php include ('connection.php')?>

<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "DELETE FROM `records` where `Vin_Num` = '$id' ";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query Failed".mysqli_error($conn));
    }
    else{
        header('location:records.php?delete_msg=You have deleted the record.');
    }
}

?>