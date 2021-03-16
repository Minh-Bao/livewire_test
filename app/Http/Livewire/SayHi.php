<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Validated;

class SayHi extends Component
{
    //NESTING
    /**
     * ".... there are a few important caveats to understand about seperating 
     * components into "parents" and "children" ...."
     */

    public $contact;

    //EVENTS//////
    /**
     * every time an event call refreshChildren is emited fire the refreshMe method
     *
     * @var array
     */
    protected $listeners = ['refreshChildren'];

    /**
     * refresh children
     *
     * @return void
     * 
     */
    public function refreshChildren(){
        //
    }

    //Or simply do => and put inn parameter a native livewire event like $refresh
   // protected $listeners = ['refreshChildren' => '$refresh'];

    public function mount(User $contact){
        $this->contact = $contact;
    }


    public function render()
    {
        return view('livewire.say-hi');
    }
}
