<?php namespace App\Libraries;

class Home{

    public function navigation($params){
        return view('layouts/nav.php', $params);
    }

    public function languages($params){
        return view('layouts/languages.php', $params);
    }

    public function showMedia($params){
        return view('media.php', $params);
    }

}