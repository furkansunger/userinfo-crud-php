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

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        updateUser($_POST, $userID);

        header("Location:index.php");
    }
?>

<?php include "HTMLFiles/top.php"; ?>

    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h3>Update User</h3>
            <a href="index.php" class="btn btn-outline-primary">Home</a>
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="mulipart/form-data">
                <div class="form-group my-2">
                    <input name="name" value="<?php echo $user["name"] ?>" class="form-control" placeholder="Name">
                </div>
                <div class="form-group my-2">
                    <input name="username" value="<?php echo $user["username"] ?>" class="form-control" placeholder="Username">
                </div>
                <div class="form-group my-2">
                    <input name="email" value="<?php echo $user["email"] ?>" class="form-control" placeholder="Email">
                </div>
                <div class="form-group my-2">
                    <input name="phone" value="<?php echo $user["phone"] ?>" class="form-control" placeholder="Phone">
                </div>
                <div class="form-group my-2">
                    <input name="website" value="<?php echo $user["website"] ?>" class="form-control" placeholder="Website">
                </div>
                <button class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>


<?php include "HTMLFiles/bottom.php"; ?>