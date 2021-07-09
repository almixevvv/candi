<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Gustiawan\FormBuilder\Form;

class ModalForm extends Component
{

    public Form $form;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Form $form)
    {
        $this->form = $form;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modal-form');
    }
}
