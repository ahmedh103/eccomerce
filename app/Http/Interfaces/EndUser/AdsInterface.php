<?php

namespace App\Http\Interfaces\EndUser;
interface AdsInterface {

    public function index();
    public function create();
    public function store($request );
}

?>
