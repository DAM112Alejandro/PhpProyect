<?php
class UserModel extends Model
{
	public function register(){
        // Sanitize POST
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        //$password = md5($post['password']);

        if($post['submit']){
            if($post['email'] == '' || $post['nombre'] == '' || $post['password'] == ''  || $post==''){
                Messages::setMsg('Please Fill In All Fields', 'error');
                return;
            }

            // Insert into MySQL
            $this->query('INSERT INTO usuarios (email, nombre, password) VALUES(:email, :nombre, :password)');
            $this->bind(':email', $post['email']);
            $this->bind(':nombre', $post['nombre']);
            $this->bind(':password', $post['password']);
            $this->execute();
            // Verify
            if($this->lastInsertId()){
                // Redirect
                header('Location: '.ROOT_URL.'users/login');
            }
        }
        return;
    }
	public function login(){
        // Sanitize POST
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

       // $password = md5($post['password']);

        if(isset($post['submit'])){
            // Compare Login
            $this->query('SELECT * FROM usuarios WHERE email = :email AND password = :password');
            $this->bind(':email', $post['email']);
            $this->bind(':password', $post['password']);

            $row = $this->single();

            if($row){
                $_SESSION['is_logged_in'] = true;
                $_SESSION['user_data'] = array(
                    "id"    => $row['id'],
                    "name"    => $row['name'],
                    "email"    => $row['email']
                );
                header('Location: '.ROOT_URL.'shares');
            } else {
                Messages::setMsg('Incorrect Login', 'error');
            }
        }
        return;
	}
}
