<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ListCustomer</title>
</head>

<body>

    <table border="1px">
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>SDT</th>
            <th>Email</th>
            <th>Delete</th>
            <th>Edit</th>

        </tr>
        <?php

        foreach ($data as $value) : ?>
            <tr>
                <th><?php echo $value['id'] ?></th>
                <th><?php echo $value['name'] ?></th>
                <th><?php echo $value['phone']  ?></th>
                <th><?php echo $value['email'] ?></th>
                <th><a href="index.php?url=delete&id=<?php echo $value['id'] ?> ">Delete</a></th>
                <th><a href="index.php?url=update&id=<?php echo $value['id'] ?>">Edit</a></th>

            </tr>
        <?php endforeach; ?>

    </table>
    <th><a href="index.php?url=create">Add</a></th>

</body>

</html>