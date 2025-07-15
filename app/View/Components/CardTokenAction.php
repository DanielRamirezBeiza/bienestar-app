<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\TokenAction;

class CardTokenAction extends Component
{
    public $total;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->total = TokenAction::count();
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-token-action');
    }
}
