<?php
session_start();

include './Validate.php';

class Users {

    public $details;

    public function __construct($post) {
        var_dump($post);
        $this->details = $post;
        if(isset($post['name']) && $post['name'] !== '') $this->register();
        if(isset($post['login_password'])) $this->login();
        if(isset($post['change_password'])) $this->changepass();
    }
    
    public function register(){
        $data = $this->details;
        $db = json_decode(file_get_contents('./users.json'));
        $validate = new Validate;
        $valid = $validate->ifExists($db, 'email', $data['email']);
        $data['password'] = crypt($data['password'], "a8f628cdaf5573e013679839c0c5e86b");
        if($valid) {
            array_push($db, $data);
            file_put_contents('./users.json', json_encode($db));
            $_SESSION['msg'] = 'Registered account';
            header('Location: ../index.php');

        } else {
            header('Location: ../index.php'); exit();
        }
    }

    public function login(){
        $db = json_decode(file_get_contents('./users.json')); 
        foreach($db as $arr=>$user){
            if(strtolower($user->email) === strtolower($this->details['login_email']) &&
                $user->password === crypt($this->details['login_password'], 'a8f628cdaf5573e013679839c0c5e86b') ) {
                    $_SESSION['user'] = $user->email;
                    header('Location: ../landing.php'); exit();            
            }
        }
            header('Location: ../index.php');  exit(); 
    }

    public function changepass() {
        $db = json_decode(file_get_contents('./users.json')); 
        foreach($db as $arr=>$user){
            if($user->email === $_SESSION['user']) {
                $user->password = crypt($this->details['change_password'], 'a8f628cdaf5573e013679839c0c5e86b');
                file_put_contents('./users.json', json_encode($db));
                $_SESSION['msg'] = 'Password Changed';
                header('Location: ../index.php'); exit();   
            }
        } 
    }



}


$post = $_POST;
$user = new Users($post);