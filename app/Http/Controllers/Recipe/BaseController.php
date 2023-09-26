<?php

namespace App\Http\Controllers\Recipe;

use App\Http\Controllers\Controller;
use App\Services\Recipe\Service;

class BaseController extends Controller
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
