<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class LandingLayout extends Component
{
    public function render():view
    {
        return view('layouts.landing');
    }
}

?>