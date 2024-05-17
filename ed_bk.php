<?php include('connection.php'); ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<?php

$id = ""; // Initialize $id
$row = []; // Initialize $row

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM `books` WHERE `Book_Num` = '$id'"; #query location
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query Failed: " . mysqli_error($conn)); #failed method
    } else {
        $row = mysqli_fetch_assoc($result); # fetching row to edit it

        if (!$row) {
            die("No data found for ID: $idnum"); 
        }
    }
}
?>

<?php
if (isset($_POST["ed_bk"])) { # update if statement
    if (isset($_GET["id_new"])) {
        $idnew = $_GET["id_new"]; #making new id num
    
        $b_isbn = $_POST['isbn']; #temp vars for atts 
        $b_auth = $_POST['auth'];
        $b_title = $_POST['title'];
        $b_genre = $_POST['genre'];

        $query = "UPDATE `books` SET `ISBN` = '$b_isbn', `Auth` = '$b_auth', `Title` = '$b_title', `Genre` = '$b_genre' WHERE `Book_Num` = '$idnew'"; #query to update book row

        $result = mysqli_query($conn, $query); #recording result based on connection and query

        if (!$result) {
            die("Query Failed: " . mysqli_error($conn));
        } else {
            header("location: books.php?ed_msg=You have updated the item successfully");
        }
    }
}
?>
<div class="container" style="margin-top: 50px;"> <!--Echoing results in each row-->
    <form action="ed_bk.php?id_new=<?php echo $id; ?>" method="post">
        <div class="form-group">
            <label for="isbn">ISBN</label>
            <input type="text" name="isbn" class="form-control" value="<?php echo $row['ISBN']; ?>">
        </div>
        <div class="form-group">
            <label for="auth">Author</label>
            <input type="text" name="auth" class="form-control" value="<?php echo $row['Auth']; ?>">
        </div>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="<?php echo $row['Title']; ?>">
        </div>
        <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text" name="genre" class="form-control" value="<?php echo $row['Genre']; ?>">
        </div>
        <input type="submit" class="btn btn-primary" name="ed_bk" value="UPDATE">
    </form>
</div>