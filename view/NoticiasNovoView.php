<?php include_once('top.php'); ?>

<form class="formulario" action="/desafio/noticias/criar" method="POST">
    
    <input type="text" name="titulo" placeholder="Titulo" required>
    
    <select name="id_categoria" required>
        <?php foreach($this->dadosModel as $dado) { ?>
            <option value="<?php echo $dado['id'] ?>"><?php echo $dado['categoria'] ?></option>
        <?php } ?>
    
    </select>
    
    <textarea name="conteudo" rows="10" cols="70" placeholder="Noticia" required></textarea>
    <button type="submit">Salvar</button>

</form>

<?php include_once('bottom.php'); ?>
