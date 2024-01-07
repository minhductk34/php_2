<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ListCustomer</title>
</head>

<body>
    <?php
    foreach ($data as $value) : ?>
        <form action="index.php?url=update&id=<?php echo $value['id'] ?>" method="post">
            Name: <input type="text" name="name" value="<?php echo $value['name'] ?>"><br>
            E-mail: <input type="text" name="email" value="<?php echo $value['email']  ?>"><br>
            SDT: <input type="text" name="sdt" value="<?php echo $value['phone']  ?>"><br>
            <input type="submit" name="update_" value="update">
        </form>
    <?php endforeach; ?>

</body>

</html>