<?php

namespace App\Controllers\Modules;
use App\Services\Queries;

class Banner
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
