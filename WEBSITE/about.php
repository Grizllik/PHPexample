<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>About</title>
</head>
<body>

    <?php require "blocks/header.php" ?>

    <div class="container mt-5">
        <h3>Message form</h3>
        <form action="chek.php" method="post">
            <input type="email" name="email" placeholder="Write e-mail" class="form-control"></br>
            <textarea name="message" class="form-control" placeholder="Write your message..."></textarea></br>
            <button type="submit" name="send" class=" btn btn-success">Send</button>
        </form>
    </div>


    <?php require "blocks/footer.php" ?>

</body>
</html>