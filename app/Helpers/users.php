<?php
function find_user($users, $id){
    $selection = null;
    foreach($users as $user){
        if($user['id'] == $id){
            $selection = $user;
            break;
        }
    }
    return $selection;
}