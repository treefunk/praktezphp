<?php
    function createCopyrightDate(DateTime $date_created){
        $current_year = new DateTime();
        $current_y = $current_year->format('Y');
        $created_y = $date_created->format('Y');
        $result = $current_y - $created_y;
        if($result == 0)
            return "&copy".$current_year->format('Y');
        else if($result > 0)
            return "&copy".$date_created->format('Y')."-".$current_year->format('y');
        else
            return false;
    }

    //If website was made in 2000 then it should return ©2000-{currentyear} :D
    $date = new DateTime();
    $date->setDate(2000,1,3);
    echo createCopyrightDate($date);
?>
