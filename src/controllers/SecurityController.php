<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';

class SecurityController extends AppController {

    private $userRepository;

    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
    }
    public function login(){

        if(!$this->isPost()){
            return $this->render('login');
        }

        $email = $_POST['email'];
        $password = md5(md5($_POST['password']));

        $user = $this->userRepository->getUser($email);
        if(!$user){
            return $this->render('login', ['messages' =>['Brak użytkownika w bazie danych']]);
        }

        if ($user->getEmail() !== $email) {
            return $this->render('login', ['messages' => ['E-mail nie znaleziony w bazie danych!']]);
        }

        if ($user->getPassword() !== $password) {
            return $this->render('login', ['messages' => ['Błędne hasło!']]);
        }

        session_start();
        $_SESSION['id'] = $user->getEmail();

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/news");
    }


    public function register(){
        session_start();

        if (!$this->isPost()) {
            return $this->render('register');
        }

        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmedPassword = $_POST['confirmedPassword'];
        $name = $_POST['name'];

        if ($password !== $confirmedPassword) {
            return $this->render('register', ['messages' => ['Please provide proper password']]);
        }
        $user = new User($email,  md5(md5($password)), $name);
        $this->userRepository->addUser($user);

        return $this->render('login', ['messages' => ['You\'ve been succesfully registrated!']]);

    }

    public function logout(){
        session_start();
        session_unset();
        session_destroy();
        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/login");
    }

}