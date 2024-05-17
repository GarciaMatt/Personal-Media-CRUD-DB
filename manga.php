<!--PHP code selecting data from certain table in DB using the config/connection php-->
<?php

require_once('connection.php');
$query = "select * from manga";
$result = mysqli_query($conn, $query);

?>

<!--Basic HTML outline starts-->
<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"content="wide=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Manga</title>
</head>

<body class="bg-dark"> <!--Main page using boostrap css-->
    <!--Nav basic-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="books.php">Books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="manga.php">Manga</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="records.php">Records</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header"> <!--Header for table-->
                        <h2 class="display=6 text-center" style="margin-top: 50px; font-weight: bold;"> Data from 'Manga' </h2>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal" style="float: right;"> Add Manga </button> <!--Btn to add new row-->
                    </div>
                    <div class="card-body">

                        <!--php to display missing info page-->
                        <?php

                            if(isset($_GET['message'])){
                                echo "<h1 style= 'text-align: center; color: red;'>" .$_GET["message"]."</h1>";
                            }

                        ?>
                        <!--php to display successful insert-->
                        <?php

                            if(isset($_GET['msg_success'])){
                                echo "<h1 style= 'text-align: center; color: green;'>" .$_GET["msg_success"]."</h1>";
                            }

                        ?>
                        <!--php to display successful delete-->
                        <?php

                            if(isset($_GET['delete_msg'])){
                                echo "<h1 style= 'text-align: center; color: red;'>" .$_GET["delete_msg"]."</h1>";
                            }

                        ?>
                        <!--table col headers-->
                        <table class="table table-bordered text-center">
                            <tr style="font-weight: bold;">
                                <td> Manga ID </td>
                                <td> Author </td>
                                <td> Series Title </td>
                                <td> Volumne Number </td>
                                <td> Genre </td>
                                <td> Edit </td>
                                <td> Delete </td>
                            </tr>
                            <tr> <!--Body of HTML table-->
                            <?php 
                            
                                while($row = mysqli_fetch_assoc($result))
                                {
                            ?>
                                <td><?php echo $row['Man_Num'] ?></td>
                                <td><?php echo $row['Auth'] ?></td>
                                <td><?php echo $row['STitle'] ?></td>
                                <td><?php echo $row['Vol_Num'] ?></td>
                                <td><?php echo $row['Genre'] ?></td>
                                <td><a href="ed_mg.php?id=<?php echo $row['Man_Num'] ?>" class="btn btn-primary"> Edit </a></td>
                                <td><a href="del_mg.php?id=<?php echo $row['Man_Num'] ?>" class="btn btn-danger"> Delete </a></td>
                            </tr>
                            <?php
                                }
                            ?>
                        </table>

                        <!-- Modal -->
                        <form action="ins_mg.php" method="post">
                            <div class="modal" id="addModal" tabindex="-1" aria-labelledby="mangaLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="mangaLabel">Add Manga</h5>
                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <!--Where the form elements begin-->
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="auth">Author</label>
                                                <input type="text" name="auth" class="form-control">
                                            </div>                                        
                                            <div class="form-group">
                                                <label for="stitle">STitle</label>
                                                <input type="text" name="stitle" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="volnum">Vol_Num</label>
                                                <input type="text" name="volnum" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="genre">Genre</label>
                                                <input type="text" name="genre" class="form-control">
                                            </div>
                                        </div>
                                         <!--Form elements end-->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <input type="submit" class="btn btn-primary" name="add_mg" value="ADD">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>