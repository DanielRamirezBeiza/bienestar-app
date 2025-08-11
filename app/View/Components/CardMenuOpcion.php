<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardMenuOpcion extends Component
{
    public $titulo;
    public $descripcion;
    public $detalle;
    public $tipo;

    /**
     * Create a new component instance.
     */
    public function __construct($titulo, $descripcion=null, $detalle=null, $tipo=null)
    {
    //
    $this->titulo = $titulo;
    $this->descripcion = $descripcion;
    $this->detalle = $detalle;
    $this->tipo = $tipo;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-menu-opcion');
    }
}
