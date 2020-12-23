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
        $hashtypes = [
            'PASSWORD_DEFAULT',
            'PASSWORD_BCRYPT',
            'PASSWORD_ARGON2I',
            'PASSWORD_ARGON2ID',
        ];
        $data = isset($_POST['data']) ? $_POST['data'] : '';
        $password = $data;
        $algo = isset($_POST['algo']) && in_array($_POST['algo'], $hashtypes) ? $_POST['algo'] : 'PASSWORD_DEFAULT';
        ?>
        <form method="post" action="">
            <div class="row">
                <div class="col-6">
                    <label for="data"><h3>Text</h3></label>
                    <textarea name="data" id="data" class="w-100" rows="8"><?= htmlspecialchars($data) ?></textarea>
                </div>
                <div class="col-6">
                <label for="hash"><h3>Password hash</h3></label>
                    <textarea id="hash" class="w-100" rows="8"><?= password_hash($password, constant($algo)) ?></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <input list="datalist_passwordhash" name="algo" value="<?= $algo ?>" required class="w-100">
                    <datalist id="datalist_passwordhash">
                        <?php foreach($hashtypes as $hashtype) { ?>
                            <option><?= $hashtype ?></option>
                        <?php } ?>
                    </datalist>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                    <input type="submit">
                    </div>
                </div>
            </div>
        </form>

        <br>
        <p>
            Hashtypes starting with ...<br>
            <b>$1$</b> - CRYPT_MD5<br>
            <b>$2a$</b>, $2x$, $2y$ - CRYPT_BLOWFISH, PASSWORD_BCRYPT<br>
            <b>$5$</b> - CRYPT_SHA256<br>
            <b>$6$</b> - CRYPT_SHA512<br>
            <b>$argon2id$</b> - PASSWORD_ARGON2ID<br>
            <b>$argon2i$</b> - PASSWORD_ARGON2I
        </p>


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
.col-12 {
	flex: 0 0 100%;
	max-width: 100%;
	padding-right: 7.5px;
	padding-left: 7.5px;
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
.text-center {
    text-align: center;
}
.text-right {
    text-align: right;
}
</style>

</body>
</html>