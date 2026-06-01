<?php

use Livewire\Component;

new class extends Component
{
    public $count = 0;

    public function incre(){
        $this->count++;
    }
    public function decre(){
        $this->count--;
    }
};
