<?php include('connection.php'); ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<?php

$id = ""; // Initialize $id
$row = []; // Initialize $row

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM `records` WHERE `Vin_Num` = '$id'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query Failed: " . mysqli_error($conn));
    } else {
        $row = mysqli_fetch_assoc($result); # fetching row to edit it
        if (!$row) {
            die("No data found for ID: $idnum");
        }
    }
}
?>

<?php
if (isset($_POST["ed_record"])) { # update if statement
    if (isset($_GET["id_new"])) {
        $idnew = $_GET["id_new"];
    
        $v_artist = $_POST['artist'];
        $v_alb = $_POST['alb_title'];
        $v_relyr = $_POST['relyr'];

        $query = "UPDATE `records` SET `Artist` = '$v_artist', `Alb_Title` = '$v_alb', `Rel_Yr` = '$v_relyr' WHERE `Vin_Num` = '$idnew'";

        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query Failed: " . mysqli_error($conn));
        } else {
            header("location: records.php?ed_msg=You have updated the item successfully");
        }
    }
}
?>
<div class="container" style="margin-top: 50px;">
    <form action="ed_record.php?id_new=<?php echo $id; ?>" method="post">
        <div class="form-group">
            <label for="artist">Artist</label>
            <input type="text" name="artist" class="form-control" value="<?php echo $row['Artist']; ?>">
        </div>
        <div class="form-group">
            <label for= "alb_title">Alb_Title</label>
            <input type="text" name="alb_title" class="form-control" value="<?php echo $row['Alb_Title']; ?>">
        </div>
        <div class="form-group">
            <label for="relyr">Rel_Yr</label>
            <input type="text" name="relyr" class="form-control" value="<?php echo $row['Rel_Yr']; ?>">
        </div>
        <input type="submit" class="btn btn-primary" name="ed_record" value="UPDATE">
    </form>
</div>
