<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/News.php';

class NewsRepository extends Repository{

    public function getNews(): array{
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM news;
        ');
        $stmt->execute();
        $news = $stmt->fetchAll(PDO::FETCH_ASSOC);

         foreach ($news as $new) {
             $result[] = new News(
                 $new['title'],
                 $new['description'],
                 $new['image']
             );
         }

        return $result;
    }


    public function addNews(News $news): void{
        $stmt = $this->database->connect()->prepare('
            INSERT INTO news (title, description, image)
            VALUES (?, ?, ?)
        ');

        $stmt->execute([
            $news->getTitle(),
            $news->getDescription(),
            $news->getImage()
        ]);
    }
}