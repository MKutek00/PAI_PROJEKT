<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Schedule.php';

class FindMatchRepository extends Repository
{
    public function findMatch($x,$y,$range) :array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('select t1.name, t2.name, s.date, l.name,round(calculate_distance(:y,:x,
        t1."coordinate y", t1."coordinate x"))
    from schedule s
         natural join leagues l
         left join teams t1
                   on s.team_one = t1."team_ID" and l.leauge_id = t1."league_ID"
         left join teams t2
                   on s.team_two = t2."team_ID" and l.leauge_id = t2."league_ID"
            where calculate_distance(:y,:x,
        t1."coordinate y", t1."coordinate x") < :range
order by calculate_distance(:y,:x,t1."coordinate y", t1."coordinate x")');
        $stmt->bindParam(':y',$y, PDO::PARAM_STR);
        $stmt->bindParam(':x',$x, PDO::PARAM_STR);
        $stmt->bindParam(':range',$range, PDO::PARAM_STR);

        $stmt->execute();
        $matches = $stmt->fetchAll(PDO::FETCH_NAMED);
//        var_dump($matches);
        foreach ($matches as $match){

            $result[] = new Schedule(
                $match['name'][0],
                $match['name'][1],
                $match['name'][2],
                $match['date'],
                $match['round']
            );
        }
        return $result;
    }
}