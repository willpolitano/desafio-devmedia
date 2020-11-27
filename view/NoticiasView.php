<?php include_once('top.php'); ?>

<?php foreach($this->dadosModel as $dado) { ?>

    <div class="card">
        <h3><?php echo $dado['titulo'] ?></h3>
        <p><?php echo $dado['conteudo'] ?></p>
        <a href="" class="link">Acessar</a>
    </div>

<?php } ?>

<?php include_once('bottom.php'); ?>
