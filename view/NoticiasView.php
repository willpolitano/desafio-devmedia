<?php include_once('top.php'); ?>

<div class="main cinza-claro">

    <?php foreach($this->dadosModel as $dado) { ?>

        <div class="card">
            <h3><?php echo $dado['titulo'] ?></h3>
            <p><?php echo $dado['conteudo'] ?></p>
            <a href="" class="link">Acessar</a>
        </div>

    <?php } ?>

</div>  

<?php include_once('bottom.php'); ?>
