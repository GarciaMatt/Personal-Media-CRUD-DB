<?php
include("connection.php");

if (isset($_POST["add_mg"])) {
    $auth = $_POST["auth"];
    $stitle = $_POST["stitle"];
    $volnum = $_POST["volnum"];
    $genre = $_POST["genre"];
    
    if (empty($auth)) {
        header("location:manga.php?message=Missing Author");
    }
    elseif (empty($stitle)) {
        header("location:manga.php?message=Missing STitle");
    }
    elseif (empty($volnum)) {
        header("location:manga.php?message=Missing Vol_Num");
    }
    elseif (empty($genre)) {
        header("location:manga.php?message=Missing Genre");
        exit; // Stop script execution after redirect
    }

    //table and column names
    $query = "INSERT INTO `manga` (`Auth`, `STitle`, `Vol_Num`, `Genre`) VALUES (?, ?, ?, ?)";
    
    // Use prepared statements to prevent SQL injection chat gpt helped here 
    $stmt = mysqli_prepare($conn, $query);
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssss", $auth, $stitle, $volnum, $genre);
        if (mysqli_stmt_execute($stmt)) {
            header("location:manga.php?msg_success=Your data has been added successfully");
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
