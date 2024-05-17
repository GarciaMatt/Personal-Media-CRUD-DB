<?php include('connection.php'); ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<?php

$id = ""; // Initialize $idnum
$row = []; // Initialize $row

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM `manga` WHERE `Man_Num` = '$id'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query Failed: " . mysqli_error($conn));
    } else {
        $row = mysqli_fetch_assoc($result);

        if (!$row) {
            die("No data found for ID: $idnum");
        }
    }
}

if (isset($_POST["ed_mg"])) { # update if statement
    if (isset($_GET["id_new"])) {
        $idnew = $_GET["id_new"];
    
        $m_auth = $_POST['auth'];
        $m_stitle = $_POST['stitle'];
        $m_volnum = $_POST['volnum'];
        $m_genre = $_POST['genre'];

        $query = "UPDATE `manga` SET `Auth` = '$m_auth', `STitle` = '$m_stitle', `Vol_Num` = '$m_volnum', `Genre` = '$m_genre' WHERE `Man_Num` = '$idnew'";

        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query Failed: " . mysqli_error($conn));
        } else {
            header("location: manga.php?ed_msg=You have updated the item successfully");
        }
    }
}
?>

<div class="container" style="margin-top: 50px;">
    <form action="ed_mg.php?id_new=<?php echo $id; ?>" method="post">
        <div class="form-group">
            <label for="auth">Author</label>
            <input type="text" name="auth" class="form-control" value="<?php echo $row['Auth']; ?>">
        </div>
        <div class="form-group">
            <label for="stitle">Series Title</label>
            <input type="text" name= "stitle" class="form-control" value="<?php echo $row['STitle']; ?>">
        </div>
        <div class="form-group">
            <label for="volnum">Volume Number</label>
            <input type="text" name="volnum" class="form-control" value="<?php echo $row['Vol_Num']; ?>">
        </div>
        <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text" name="genre" class="form-control" value="<?php echo $row['Genre']; ?>">
        </div>
        <input type="submit" class="btn btn-primary" name="ed_mg" value="UPDATE">
    </form>
</div>