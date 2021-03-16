<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{

    public $name = "youhou";
    public $loud = "false";
    public $greeting = "hello";

    /**
     * TEST1
     *
     * @var array
     */
    public $list = [
        'hello' => 'hello',
        'goodby'  => 'goodby',
        'merci'  => 'merci',
        '<img src="images/test.jpg" style="width:150px">'  => '/!\ IMAGE'
    ];


    /**
     * TEST2
     *
     * @param string $name
     * @return void
     */
    public function resetName($name ="chico"){
        $this->name = $name;
    }


    public function render()
    {
        return view('livewire.hello-world');
    }
}
