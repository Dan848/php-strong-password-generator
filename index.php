<?php

$minChars = range('a', 'z');
$maxChars = range('A', 'Z');
$numChars = range('0', '9');
$specialChars = array('!', '#', '$', '%', '&', '(', ')', '*', '+', ',', '-', '.', '/', ':', ';', '<', '=', '>', '?', '@', '[', ']', '^', '_', '{', '}' );
$allChars = array($minChars, $maxChars, $numChars, $specialChars);
function createPassword($arrChars, $strLength) {
    $newPassword = "";
    //Add at least one char for each type
    foreach ($arrChars as $char) {
        $newPassword .= $char[array_rand($char)];
    }
    //Merge the 4 array's into one
    $fullChars = call_user_func_array('array_merge', $arrChars);
    //Add char till strLength
    while (strlen($newPassword) < $strLength) {
        $newChar = $fullChars[array_rand($fullChars)];
        if (!str_contains($newPassword, $newChar)) {
        $newPassword .= $newChar;
        }
    }

    $passShuffle = str_shuffle($newPassword);
    return $passShuffle;
}


if (!empty($_GET["passlngt"])) {
    $passLength = $_GET["passlngt"];
    $passPrinted = createPassword($allChars, $passLength);
}
else {
    $passPrinted = "";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body class="bg-dark text-white">
    <header class="container-md text-center mt-3 mb-5">
        <h1 class="mb-3">Strong Password Generator</h1>
    </header>
    <main class="container-md">
        <div class="row mb-5">
            <div class="col py-4 px-3">
            <!-- FROM -->
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="GET" class="row gy-2 gx-3 align-items-center justify-content-center">
                    <!-- SELECT PARKING -->
                    <div class="col-auto">
                        <select class="form-select" name="passlngt">
                            <option value="" selected>Lunghezza Password</option>
                            <?php for($i = 8; $i <= 32; $i++) {?>
                                <option value=<?php echo $i ?>><?php echo $i ?></option>
                            <?php }?>
                        </select>
                    </div>
                    <!-- BUTTON -->
                    <div class="col-auto">
                        <div class="input-group">
                        <button class="btn btn-warning w-100 fw-bold text-uppercase">Invia</button>
                        </div>
                    </div>
                    <!-- /FROM -->                
                </form>
            </div>
        </div>
        <?php if ($passPrinted){?>
        <div class="row mb-5 text-center justify-content-center">
            <h2 class="mb-3 col-12"><?php echo "Password $passLength caratteri"?></h2>
            <div class="col-auto py-4 px-3 bg-success rounded-3">
                <h3><?php echo htmlspecialchars($passPrinted)?></h3>
            </div>
        </div>
        <?php }?>
    </main>
</body>
</html>