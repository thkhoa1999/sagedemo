<?php

namespace App\Controllers\Modules;
use App\Services\Queries;

class Khoa1
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module,
            'banner' => $this->getData()
        ];
    }
    protected function getData(){
        return Queries::getData();
    }
}