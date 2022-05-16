<?php
class ShareModel extends Model
{
    public function Index()
    {
        $this->query('SELECT * FROM productos');
        $rows = $this->resultSet();
        return $rows;
    }

    public function add()
    {
        // Sanitize POST
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
        if ($post) {
            if ( !isset($post['nombreProducto']) || !isset($post['precioProducto']) || !isset($post['descProducto']) || !isset($post['StockProducto']) || !isset($post['Categorias_idCategorias'])) {
                Messages::setMsg('Please Fill In All Fields', 'error');
                return;
            } else {
                // Insert into MySQL
                $this->query('INSERT INTO productos (nombreProducto, precioProducto, descProducto, StockProducto, Categorias_idCategorias ) VALUES(:nombreProducto, :precioProducto, :descProducto, :StockProducto, :Categorias_idCategorias)');
                $this->bind(':nombreProducto', $post['nombreProducto']);
                $this->bind(':precioProducto', $post['precioProducto']);
                $this->bind(':descProducto', $post['descProducto']);
                $this->bind(':StockProducto', $post['StockProducto']);
                $this->bind(':Categorias_idCategorias', $post['Categorias_idCategorias']);
                $this->execute();
            }
        }
        return;
    }
    public function edit()
    {
         
        // Sanitize POST
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        //var_dump($post);
        if ($post) {
            if ( !isset($post['idProductos']) || !isset($post['nombreProducto']) || !isset($post['precioProducto']) || !isset($post['descProducto']) || !isset($post['StockProducto']) || !isset($post['Categorias_idCategorias'])) {
                Messages::setMsg('error', 'error');
                return;
            } else {
                // Insert into MySQL
                $this->query("UPDATE productos SET  nombreProducto=:nombreProducto, precioProducto=:precioProducto, descProducto=:descProducto, StockProducto=:StockProducto, Categorias_idCategorias=:Categorias_idCategorias 
                WHERE idProductos=:idProductos");
                $this->bind(':nombreProducto', $post['nombreProducto']);
                $this->bind(':precioProducto', $post['precioProducto']);
                $this->bind(':descProducto', $post['descProducto']);
                $this->bind(':StockProducto', $post['StockProducto']);
                $this->bind(':Categorias_idCategorias', $post['Categorias_idCategorias']);
                $this->bind(':idProductos', $post['idProductos']);
                $this->execute();
            }
        }
        return;
    }

    public function delete()
    {
        // $id = $_GET['idProductos'];
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        // var_dump($post['idProductos']);

        if (!isset($post)) {
            return;
        } else {
            $this->query("DELETE FROM productos WHERE idProductos='{$post['idProductos']}'");
            
            $this->execute();
        }

        return;
    }
    public function getById()
    {
        $this->query('SELECT * FROM productos WHERE idtactica=?');
        $this->bind(1,$_GET['id']);
        $rows = $this->resultSet();
        return $rows;
    }
}
