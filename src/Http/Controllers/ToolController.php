<?php

namespace Standardpackage\NovaInstalledPackages\Http\Controllers;

use Illuminate\Routing\Controller;
use Standardpackage\NovaInstalledPackages\Utils\NovaPackagesFinder;

class ToolController extends Controller
{
    public function index(NovaPackagesFinder $novaPackagesFinder)
    {
        return $novaPackagesFinder->all();
    }
}
