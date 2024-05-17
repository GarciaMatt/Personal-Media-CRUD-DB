<?php include ('connection.php')?> <!--including connection file-->

<?php

if(isset($_GET['id'])){ #get set id from connection and establishing variable
    $id = $_GET['id'];

    $query = "DELETE FROM `books` where `Book_Num` = '$id' "; #query to delete item from book table based on booknum
    $result = mysqli_query($conn, $query); #result var = connection state and query request

    if(!$result){
        die("Query Failed".mysqli_error($conn)); #display error is message doesn't work
    }
    else{
        header('location:books.php?delete_msg=You have deleted the record.'); #success message 
    }
}
?>