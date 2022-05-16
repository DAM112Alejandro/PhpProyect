<div>
    <p>¿Quieres borrar el producto?</p>
    <form action="/shares/delete" method="post">
    <input class="btn btn-primary"  type="submit" name="idProductos" value="<?php echo $_GET['id']?>" placeholder="Si"/>
    <!-- <input class="btn btn-primary" type="submit" name="idProductos" value="Si">  -->
        <a class="btn" href="<?php echo ROOT_PATH?>shares">No</a>
    </form>
</div>