<?php
$passwordLength = (int)$_GET['length'];
var_dump($passwordLength);

function getRandomPassword($passwordLength)

{

    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $password = '';

    for ($i = 0; $i < $passwordLength; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $password .= $characters[$index];
    }
    return $password;
    var_dump($password);
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="title text-center">
            <h2>Strong Password Generator</h2>
            <h3>Genera una password sicura</h3>
        </div>
        <form class="mt-5" action="" method="get">
            <div class="row">
                <div class="col">
                    <div class="d-flex">
                        <label for="text" class="form-label">Lunghezza password</label>
                    </div>

                </div>
                <div class="col">
                    <input type="text" name="length" class="form-control" id="passwordLengthId" aria-describedby="emailHelp">
                </div>

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <h3>Password generata: </h3>
        <p><?php echo getRandompassword($passwordLength); ?></p>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>