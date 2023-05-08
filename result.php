<?php
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
        <?php if(!empty($_SESSION['isPassword'])) {?>
        <div class="row mb-5 gx-2 gy-3 text-center justify-content-center">
            <h2 class="mb-3 col-12"><?php echo "Password {$_GET["passlngt"]} caratteri"?></h2>
            <div class="col-auto py-4 px-3 bg-success rounded-3">
                <h3><?php echo htmlspecialchars($_SESSION['isPassword'])?></h3>
            </div>
        </div>
        <?php }?>
        <div class="row justify-content-center">
        <a href="index.php" class="btn btn-warning col-auto fw-bold text-uppercase">Indietro</a>
        </div>
    </main>
</body>
</html>