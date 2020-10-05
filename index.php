<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>password_hash generator</title>
</head>
<body>
    <div class="container">


        <h1>password_hash generator</h1>

        <p>
            <a href="https://www.php.net/password_hash">php.net/password_hash</a>
        </p>
        

        <?php
        $data = isset($_POST['data']) ? $_POST['data'] : '';
        $password = $data;
        ?>
        <form method="post" action="">
            <div class="row">
                <div class="col-6">
                    <label for="data"><h3>Text</h3></label>
                    <textarea name="data" id="data" class="w-100" rows="8"><?= htmlspecialchars($data) ?></textarea>
                </div>
                <div class="col-6">
                <label for="hash"><h3>Password hash</h3></label>
                    <textarea id="hash" class="w-100" rows="8"><?= password_hash($password, PASSWORD_DEFAULT) ?></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <input type="submit">
                </div>
            </div>
        </form>


    </div>

<style>
.container {
	max-width: 900px;
	margin: 0 auto;
}
.row {
	display: flex;
	flex-direction: row;
}
.col-6 {
	flex: 0 0 50%;
	max-width: 50%;
	padding-right: 7.5px;
	padding-left: 7.5px;
}
.w-100 {
    width: 100%;
}
.text-right {
    text-align: right;
}
</style>

</body>
</html>