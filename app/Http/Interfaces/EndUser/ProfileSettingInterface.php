<?php

namespace App\Http\Interfaces\EndUser;

interface ProfileSettingInterface
{
    public function index();
    public function edit($id);
    public function update($request);

}
