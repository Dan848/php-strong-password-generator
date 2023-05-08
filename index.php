<?php
session_start();
include __DIR__ . './data/data.php';
include __DIR__ . './functions/functions.php';
passToSession($allChars);
?>


<?php include __DIR__ . './template/headhtml.php' ?>
<body class="bg-dark text-white">
    <header class="container-md text-center mt-3 mb-5">
        <h1 class="mb-3">Strong Password Generator</h1>
    </header>
    <main class="container-md">
        <div class="row mb-5">
            <div class="col py-4 px-3">
            <!-- FROM -->
            <form action="result.php" method="GET" class="row gy-2 gx-3 align-items-center justify-content-center">
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
    </main>
</body>
</html>