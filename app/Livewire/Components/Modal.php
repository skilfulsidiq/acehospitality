<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Modal extends Component
{
    public $alias;
    public $params = [];

    protected $listeners = ['showModal', 'resetModal'];

    // public function render()
    // {
    //     return view('laravel-livewire-modals::modals');
    // }

    public function showModal($alias, ...$params)
    {
       
        if(is_array($alias)){
            $this->alias = $alias[0];
            $this->params = $alias;
        }else{

            $this->alias = $alias;
            $this->params = $params;

        }




        $this->emit('showBootstrapModal');
    }

    public function resetModal()
    {
        $this->reset();
    }
    public function render()
    {
        return view('livewire.components.modal');
    }
}
