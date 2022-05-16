<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Añade Producto</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
            <label>nombre</label>
            <input type="text" name="nombreProducto" class="form-control" />
        </div>
        <div class="form-group">
            <label>Precio</label>
            <input type="number" name="precioProducto" class="form-control" />
        </div>
        <div class="form-group">
            <label>Descripción</label>
            <textarea name="descProducto" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Stock</label>
            <input type="number" name="StockProducto" class="form-control" />
        </div>
		<div class="form-group">
            <label>Categoria</label>
            <input type="number" name="Categorias_idCategorias" class="form-control" />
        </div>
        <input class="btn btn-primary" name="submit" type="submit" value="Guardar" />
        <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>shares">Cancel</a>
    </form>
  </div>
</div>
