<div>
	<?php if(isset($_SESSION['is_logged_in'])) : ?>
	<a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>shares/add">Anadir Producto</a>
	<?php endif; ?>
	<?php foreach($viewmodel as $item) : ?>
		<div class="well">
            <h3><?php echo $item['idProductos'];?></h3>
            <h3><?php echo $item['nombreProducto']; ?></h3>
            <!-- <img src="<?php echo $item['rutaImagen']?>" alt="img"></p> -->
            <hr />
            <p><?php echo $item['descProducto']; ?></p>
            <br />
            <a class="btn btn-primary text-center" href="/shares/edit/<?=$item['idProductos']?>">Editar</a>
            <a class="btn btn-danger" href="/shares/delete/<?=$item['idProductos']?>">Eliminar</a>
        </div>
	<?php endforeach; ?>
</div>