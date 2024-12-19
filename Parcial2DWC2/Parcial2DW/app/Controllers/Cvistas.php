<?php

namespace App\Controllers;

class CVistas extends BaseController
{
    public function inicio(): string
    {
        return view('\Carpeta1\Index1');
    }
}