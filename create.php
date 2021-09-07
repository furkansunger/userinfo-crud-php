<?php

    require "users.php";

    $user = [
        'id' => "",
        'name' => "",
        'username' => "",
        'email' => "",
        'phone' => "",
        'website' => ""
    ];

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $user = createUser($_POST);
        header("Location:index.php");
    }
?>

<?php include "HTMLFiles/top.php"; ?>

    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h3>Create User</h3>
            <a href="index.php" class="btn btn-outline-primary">Home</a>
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="mulipart/form-data">
                <div class="form-group my-2">
                    <input name="name" value="<?php echo $user["name"] ?>" class="form-control" placeholder="Name" autocomplete="off">
                </div>
                <div class="form-group my-2">
                    <input name="username" value="<?php echo $user["username"] ?>" class="form-control" placeholder="Username" autocomplete="off">
                </div>
                <div class="form-group my-2">
                    <input name="email" value="<?php echo $user["email"] ?>" class="form-control" placeholder="Email" autocomplete="off">
                </div>
                <div class="form-group my-2">
                    <input name="phone" value="<?php echo $user["phone"] ?>" class="form-control" placeholder="Phone" autocomplete="off">
                </div>
                <div class="form-group my-2">
                    <input name="website" value="<?php echo $user["website"] ?>" class="form-control" placeholder="Website" autocomplete="off">
                </div>
                <button class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>


<?php include "HTMLFiles/bottom.php"; ?>