<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Schedule.php';


class ScheduleRepository extends Repository {

    public function getSchedule(int $id): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('select t1.name, t2.name, s.date
from schedule s
         left join teams t1
                   on s.team_one = t1."team_ID"
         left join teams t2
                   on s.team_two = t2."team_ID"
         join leagues l
              on l.leauge_id = t2."league_ID" where l.leauge_id=:id
            ');
        $stmt-> bindParam(':id',$id, PDO::PARAM_INT);
        $stmt->execute();
        $schedule = $stmt->fetchAll(PDO::FETCH_NAMED);

//        var_dump($schedule);

        foreach ($schedule as $match){
            $result[] = new Schedule(
                $match['name'][0],
                $match['name'][1],
                $match['date']
            );
        }
        return $result;
    }

}