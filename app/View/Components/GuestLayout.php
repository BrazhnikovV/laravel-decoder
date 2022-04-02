<?php

namespace App\View\Components;

use Illuminate\View\View;
use Illuminate\View\Component;

/**
 * @GuestLayout
 */
class GuestLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return View
     */
    public function render(): View
    {
        return view('layouts.guest');
    }
}
