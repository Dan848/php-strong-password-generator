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

        <div class="row mb-5">
            <h2 class="mb-3 col-12 text-center">Password Generata</h2>
            <div class="col py-4 px-3 bg-success">
            </div>
        </div>
    </main>
</body>
</html>