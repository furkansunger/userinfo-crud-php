<?php

    require "users.php";
    $users = getUsers();

?>

<?php include "HTMLFiles/top.php"; ?>
    <a href="create.php" class="btn btn-outline-success my-2">Create New User</a>
    <table class="table">
        <thead>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Website</th>
            <th>Actions</th>
        </thead>
        <tbody>
            <?php foreach($users as $user): ?>
                <tr>
                    <td><?php echo $user["name"] ?></td>
                    <td><?php echo $user["username"] ?></td>
                    <td><?php echo $user["email"] ?></td>
                    <td><?php echo $user["phone"] ?></td>
                    <td><?php echo $user["website"] ?></td>
                    <td>
                        <a href="view.php?id=<?php echo $user["id"] ?>" class="btn btn-sm btn-info">View</a>
                        <a href="update.php?id=<?php echo $user["id"] ?>" class="btn btn-sm btn-warning">Update</a>
                        <a href="delete.php?id=<?php echo $user["id"] ?>" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php include "HTMLFiles/top.php"; ?>