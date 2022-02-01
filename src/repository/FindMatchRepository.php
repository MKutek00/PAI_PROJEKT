<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Schedule.php';

class FindMatchRepository extends Repository
{
    public function findMatch($x,$y,$range) :array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('select t1.name, t2.name, s.date, l.name,round(calculate_distance(:y,:x,
        t1."coordinate y", t1."coordinate x")), t1."coordinate x", t1."coordinate y", l.leauge_id
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
        foreach ($matches as $match){
//echo $this->reverse_geocode($match['coordinate x'],$match['coordinate y']);
//var_dump($this->reverse_geocode($match['coordinate x'],$match['coordinate y']));
            $result[] = new Schedule(
                $match['name'][0],
                $match['name'][1],
                $match['name'][2],
                $match['date'],
                $match['round'],
                $match['leauge_id'],
                $this->reverse_geocode($match['coordinate x'],$match['coordinate y'])
            );
        }
        return $result;
    }

    function reverse_geocode($lat, $lng){


        $url = 'https://maps.googleapis.com/maps/api/geocode/json?latlng='.$lat.','.$lng.'&key=AIzaSyB4DoB4ybtvUV2OwUNEKgqYuw5cdA_vYpE&sensor=false';
        $json = @file_get_contents($url);
        $data = json_decode($json);
        $status = $data->status;
        if($status=="OK") {
            //Get address from json data
    //            var_dump($data);
            $city= $data->results[0]->formatted_address;
        } else{
            $city = 'Location Not Found';
        }

        return $city;
    }
}