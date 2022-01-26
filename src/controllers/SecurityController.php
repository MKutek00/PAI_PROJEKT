<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';
require_once __DIR__.'/NewsController.php';


class SecurityController extends AppController {
    public function login()
    {
        $userRepository = new UserRepository();

        if(!$this->isPost()){
            return $this->render('login');
        }

        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = $userRepository->getUser($email);
        if(!$user){
            return $this->render('login', ['messages' =>['Brak użytkownika w bazie danych']]);
        }

        if ($user->getEmail() !== $email) {
            return $this->render('login', ['messages' => ['E-mail nie znaleziony w bazie danych!']]);
        }

        if ($user->getPassword() !== $password) {
            return $this->render('login', ['messages' => ['Błędne hasło!']]);
        }

        $newsController = new NewsController();
        return $newsController->news();
    }
}