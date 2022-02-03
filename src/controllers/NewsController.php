<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/News.php';
require_once __DIR__ .'/../repository/NewsRepository.php';

class NewsController extends AppController {

    const MAX_FILE_SIZE = 1024*1024;
    const SUPPORTED_TYPES = ['image/png', 'image/jpeg'];
    const UPLOAD_DIRECTORY = '/../public/img/uploads/';

        private $message = [];
        private $newsRepository;

    public function __construct(){
        parent::__construct();
        $this->newsRepository = new NewsRepository();
    }

    public function news(){
        session_start();

        if(!isset($_SESSION['id'])){
            $url = "http://$_SERVER[HTTP_HOST]";
            header("Location: {$url}/login");
        }
        $news = $this->newsRepository->getNews();
        $this->render('news', ['news' => $news]);
    }

    public function add_news(){
        session_start();
        if(!isset($_SESSION['id'])){
            $url = "http://$_SERVER[HTTP_HOST]";
            header("Location: {$url}/login");
        }

        if($_SESSION['id'] != "gutek@gmail.com"){
            header("Location: {$_SERVER['HTTP_REFERER']}");

        }

        if ($this->isPost() && is_uploaded_file($_FILES['file']['tmp_name']) && $this->validate($_FILES['file'])) {
            if(move_uploaded_file(
                $_FILES['file']['tmp_name'], 
                dirname(__DIR__).self::UPLOAD_DIRECTORY.$_FILES['file']['name']
            ) == false){
                die("zly move");
            }

            // TODO create new project object and save it in database
            $news = new News($_POST['title'], $_POST['description'], $_FILES['file']['name']);
            $this->newsRepository->addNews($news);

            return $this->render('news',[
                'messages' => $this->message,
                'news' => $this->newsRepository->getNews()]
                );
        }
        return $this->render('add_news', ['messages' => $this->message]);
    }

    private function validate(array $file): bool{
        if ($file['size'] > self::MAX_FILE_SIZE) {
            $this->message[] = 'Za duży rozmiar pliku!';
            echo "rozmiar";
            return false;
            echo "rozmiar git";
        }

        if (!isset($file['type']) || !in_array($file['type'], self::SUPPORTED_TYPES)) {
            $this->message[] = 'Zły format pliku';
            return false;
        }
        return true;
    }
}
