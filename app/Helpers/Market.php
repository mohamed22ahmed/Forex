<?php

use App\User;

function check_market(){
    $day=date('l');
    $time=date('h:i:s');
    if($day=='Sunday'||$day=="Saturday")
        return false;
    if($day=='Monday'){
        $input = '02:00:00';
        $date = strtotime($input);
        $date=date('h:i:s', $date);
        if($time<$date)
            return false;
    }
    return true;
}

function check_logout(){
    date_default_timezone_set('Africa/Cairo');
    $user=User::find(session('id'));
    $start_date = new DateTime();
    $since_start = $start_date->diff(new DateTime($user->logged_time));
    if(($since_start->h*60+$since_start->i)>15)
        return false;
    return true;
}
