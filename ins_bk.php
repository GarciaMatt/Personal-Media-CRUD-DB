<?php
include("connection.php"); #including connection file

if (isset($_POST["add_bk"])) { #post method for security followed by taking and defining values from the html form
    $isbn = $_POST["isbn"];
    $auth = $_POST["auth"];
    $title = $_POST["title"];
    $genre = $_POST["genre"];
    //if statements to post missing item
    if (empty($isbn)) {
        header("location:books.php?message=Missing ISBN");
    }
    elseif (empty($auth)) {
        header("location:books.php?message=Missing Author");
    }
    elseif (empty($title)) {
        header("location:books.php?message=Missing Title");
    }
    elseif (empty($genre)) {
        header("location:books.php?message=Missing Genre");
        exit; // Stop script execution after redirect
    }
    //inserting table and column names
    $query = "INSERT INTO `books` (`ISBN`, `Auth`, `Title`, `Genre`) VALUES (?, ?, ?, ?)";
    
    // Use prepared statements to prevent SQL injection chat gpt helped here 
    $stmt = mysqli_prepare($conn, $query);
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssss", $isbn, $auth, $title, $genre);
        if (mysqli_stmt_execute($stmt)) {
            header("location:books.php?msg_success=Your data has been added successfully"); #successful message 
            exit; // Stop script execution after the redirect
        } else {
            die("Query Failed: " . mysqli_error($con)); #failed message
        }
        mysqli_stmt_close($stmt);
    } else {
        die("Prepared statement error: " . mysqli_error($con));
    }
}
?>
