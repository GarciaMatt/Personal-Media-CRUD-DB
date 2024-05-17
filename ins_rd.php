<?php
include("connection.php");

if (isset($_POST["add_rd"])) {
    $artist = $_POST["artist"];
    $alb_title = $_POST["alb_title"];
    $relyr = $_POST["relyr"];
    //if statements to post missing item
    if (empty($artist)) {
        header("location:records.php?message=Missing Artist");
    }
    elseif (empty($alb_title)) {
        header("location:records.php?message=Missing Alb_Title");
    }
    elseif (empty($relyr)) {
        header("location:records.php?message=Missing Rel_Yr");
        exit; // Stop script execution after redirect
    }

    //table and column names
    $query = "INSERT INTO `records` (`Artist`, `Alb_Title`, `Rel_Yr`) VALUES (?, ?, ?)";
    
    // Use prepared statements to prevent SQL injection chat gpt helped here 
    $stmt = mysqli_prepare($conn, $query);
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sss", $artist, $alb_title, $relyr);
        if (mysqli_stmt_execute($stmt)) {
            header("location:records.php?msg_success=Your data has been added successfully");
            exit; // Stop script execution after the redirect
        } else {
            die("Query Failed: " . mysqli_error($con));
        }
        mysqli_stmt_close($stmt);
    } else {
        die("Prepared statement error: " . mysqli_error($con));
    }
}
?>
