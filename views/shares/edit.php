<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Edita un producto</h3>
    </div>

    <div class="panel-body">
        <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
                <label>Id</label>
                <input type="number" hidden name="idProductos" class="form-control" value="<?php echo $_GET['id']?>"/>
            </div>    
        <div class="form-group">
                <label>nombre Producto</label>
                <input type="text" name="nombreProducto" class="form-control" value="<?=$viewmodel[0]['nombreProducto']?>" />
            </div>
            <div class="form-group">
                <label>Precio</label>
                <input type="number" name="precioProducto" class="form-control"value="<?=$viewmodel[0]['precioProducto']?>" />
            </div>
            <div class="form-group">
                <label>Descripción</label>
                <input type="number" name="descProducto" class="form-control" value="<?=$viewmodel[0]['descProducto']?>"/>
            </div>
            <div class="form-group">
                <label>Stock</label>
                <input type="number" name="StockProducto" class="form-control" value="<?=$viewmodel[0]['StockProducto']?>"/>
            </div>
            <div class="form-group">
                <label>categoria</label>
                <input type="number" name="Categorias_idCategorias" class="form-control" value="<?=$viewmodel[0]['Categorias_idCategorias']?>"/>
            </div>
            <input class="btn btn-primary" name="submit" type="submit" value="Actualizar"/>
            <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>shares">Cancelar</a>
        </form>
    </div>
</div>