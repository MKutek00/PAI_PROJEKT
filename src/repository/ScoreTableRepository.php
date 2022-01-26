<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Table.php';


class ScoreTableRepository extends Repository {

    public function getScoreTable(int $id): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            select t.name, s.points, s.games, s.wins, s.loses, s.draws, s."goalplus", s."goalminus", s."goalplusminus"
            from score_table s join teams t on s.druzyna = t."team_ID" join leagues l
            on l.leauge_id = t."league_ID" where l.leauge_id=:id
        ');
        $stmt-> bindParam(':id',$id, PDO::PARAM_INT);
        $stmt->execute();

        $score_table = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($score_table as $table){
            $result[] = new Table(
                $table['name'],
                $table['points'],
                $table['games'],
                $table['wins'],
                $table['loses'],
                $table['draws'],
                $table['goalplus'],
                $table['goalminus'],
                $table['goalplusminus']
            );
        }
        return $result;
    }

}