<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class HelloWorld extends Component
{
    //DATA BINDING//////////////
    /**
     * TESTBIND
     *
     * @var string
     */
    public $names = ['albert', "alphonse", "alelise", "allezloaime"];
    public $name = "JELLY";
    public $loud = "false";
    public $greeting = "hello";

    //ACTION/////////////
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

    //LIFECYCLE HOOK//////////

    /**
     * TEST3
     * To use this method comment the next mount() method....
     * 
     * mount method initialize logic like constructor
     * and override first for example any assigned variable
     *
     * @param $name variable passe in the view
     * 
     * @param request $request we can acces the request of the initial page loads like this  "example.com/?name=supername"
     * and the variable $name passed in the welcome.blade view will be override and we will see "supername"
     * 
     *
     * @return void
     */
   /*  public function mount(Request $request){
        $this->name= $request->input('name',$this->name);
    } */

    /**
     * Like mount method will be do before anything elese just after the mount method
     * 
     * @return void
     */
    public function hydrate(){
        $this->name = "hydrated@";
    }

    /**
     * Like hydrate method it will run anytimewe update a public property like an input model binded 
     *
     * @return void
     */
    public function updated(){
        $this->name = Str::upper($this->name);
    }

    /**
     * Like updated method it will run anytimewe update THE public property passeed in the method in this case $loud
     *
     * @return void
     */
    public function updatedLoud(){
        $this->name = Str::upper($this->name);
    }


    //NESTING////////////In order to use these next sections comment previous section ...

    public $contacts;

    /**
     * To use this method comment the previous mount() method....
     *
     * @param [type] $name
     * @return void
     */
    public function mount(){
        $this->contacts = User::all();
    }
    
    /**
     * delete specified resource
     *
     * @param [type] $name
     * @return void
     */
    public function removeContact($name){
            User::whereName($name)->delete();
            //to refresh the page 
            $this->contacts = User::all();
    }  
    
    //EVENTS/////////

    public function refreshChildren(){
        $this->emit('refreshChildren');
    }


    ///////////ALWays keep on bottom of the method///////
    public function render()
    {
        return view('livewire.hello-world');
    }
}
