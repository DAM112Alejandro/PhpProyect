<div>
	<?php if(isset($_SESSION['is_logged_in'])) : ?>
	<a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>shares/add">Añadir sistema</a>
	<?php endif; ?>
	<?php foreach($viewmodel as $item) : ?>
		<div class="well">
            <h3><?php echo $item['titulo']; ?></h3>
            <img src="<?php echo $item['rutaImagen']?>" alt="img"></p>
            <hr />
            <p><?php echo $item['descr']; ?></p>
            <br />
            <a class="btn btn-default" href="index.php">Ir a la web</a>
            <a class="btn btn-primary text-center" href="/shares/edit">Editar</a>
            <a class="btn btn-danger" href="/shares/delete">Eliminar</a>
            <a class="btn btn-primary"   href="<?php echo ROOT_PATH;?>shares/view/<?=$item['idtecnica']?>">details</a>
        </div>
	<?php endforeach; ?>
</div>