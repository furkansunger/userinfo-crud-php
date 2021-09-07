<?php

    require "users.php";

    if (!isset($_GET["id"])) {
        header("Location:index.php");
        exit;
    }
    
    $userID = $_GET["id"];
    
    $user = getUserById($userID);
    
    if (!$user) {
        header("Location:index.php");
        exit;
    }
?>

<?php include "HTMLFiles/top.php"; ?>

    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h3>User: <?php echo $user["name"] ?></h3>
            <a href="index.php" class="btn btn-outline-primary">Home</a>
        </div>
        <div class="card-body">
            <table class="table">
                <tbody>
                    <tr>
                        <th>Name</th>
                        <td><?php echo $user["name"] ?></td>
                    </tr>
                    <tr>
                        <th>Username</th>
                        <td><?php echo $user["username"] ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?php echo $user["email"] ?></td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td><?php echo $user["phone"] ?></td>
                    </tr>
                    <tr>
                        <th>Website</th>
                        <td><?php echo $user["website"] ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

<?php include "HTMLFiles/bottom.php"; ?>