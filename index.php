<?php
include_once './includes/head.php';
include_once './includes/header.php';
include_once './includes/footer.php';


?>

<div id="novidades" class="container">
    <h1>Novidades</h1>
</div>

<?php
for ($i=0; $i < 8 ; $i++) { 
?>
    <div class="card">
        <a href="produto-detalhe.php">
            <img src="content/camiseta-preta.jpg" class="card-img-top">
            <div class="card-body">
                <p class="card-title text-center text-dark">Gatinho Brabo</p>
                <p class="card-text text-center text-dark">R$ 600,00</p>
            </div>
        </a>
    </div>

<?php
}
?>





