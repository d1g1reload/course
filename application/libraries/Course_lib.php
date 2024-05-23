<?php

class Course_lib
{


    function convert_time_youtube($duration)
    {
        if ($duration) {
            $start = new DateTime('@0'); // Unix epoch
            $start->add(new DateInterval($duration));
            $youtube_time = $start->format('H:i:s');
        }

        return $youtube_time;
    }
}
