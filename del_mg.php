<?php include ('connection.php')?>

<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "DELETE FROM `manga` where `Man_Num` = '$id' ";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query Failed".mysqli_error($conn));
    }
    else{
        header('location:manga.php?delete_msg=You have deleted the record.');
    }
}

?>