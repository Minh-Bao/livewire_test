<div>
    <br>---------------------------------------------- <br>
    EVENTS: REMOVE next section to use thse setion <br><br>
    
    @foreach ($contacts as $contact)
    
        <div>
            @livewire('say-hi', ['contact' => $contact], key($contact->name))

            <button wire:click="removeContact('{{$contact->name}}')">Remove</button>
        </div>
        
    @endforeach

    <hr>
    
    <button wire:click="$emit('refreshChildren')">refreshChildrenOnly</button>
    <button wire:click="refreshChildren">refreshChildrenAndParent</button>
    {{now()}}
</div>



<!--
 <div>
    <br>---------------------------------------------- <br>
    NESTING COMPONENTS : (review the key concept for nested component prevent bug..)<br><br>

    @foreach ($contacts as $contact)
    
        <div>
            @livewire('say-hi', ['contact' => $contact], key($contact->name))

            <button wire:click="removeContact('{{$contact->name}}')">Remove</button>
        </div>
        
    @endforeach

    <hr>
    <button wire:click="$refresh">refresh</button>
    {{now()}}
</div>


<div>
    //////////////////////////// <a href="https://laravel-livewire.com/screencasts" target="_blank" >LIVEWIRE VIDEO TUTO </a>  \\\\\\\\\\\\\\\\\\\\\\\\\

    <br>---------------------------------------------- <br>
    DATABINDING :<br><br>

    {{--TESTBIND Bind modelexamople --}}
    <input style="color:rgb(207, 66, 89);" wire:model="name" type="text">
    <input wire:model="loud" type="checkbox">

    {{--TESTBIND Bind modelexamople next... --}}
    hello world <span style="color:rgb(180, 50, 72)">{{$name}}</span>  @if ($loud) !  @endif

    <br>---------------------------------------------- <br>
    ACTION :<br><br>

    {{-- TEST1 instead of classical select use of laravel/collective--}}
    {!! Form::select("test", $list, null, ["wire:model" => "greeting","style" => "color:blue"]) !!}
    
    {{-- TEST1 to show direct html element set in controller --}}
    @if($greeting)
    <span style="width: 25%; color: rgb(0, 68, 255)">
        {!!$greeting!!}       
    </span>
    @endif

    <br>---------------------------------------------- <br>


    {{-- TEST2 function need in controller  --}}
    <form action="#" wire:submit.prevent="resetName('bingooo')">
        <button >ResetName</button>
        <span style="color:grey">Reset the input and the shown text in pink</span>

    </form>

    {{-- TEST2 no form needeed --}}
    {{-- <button wire:mouseenter="resetName('bindo')">Reset name </button> --}}

    <br>---------------------------------------------- <br>

    {{-- TEST#  no function needed in controller we set the $name variable directly in the blade view --}}
    <form action="#" wire:submit.prevent="$set('name', 'TESTRER')">
        <button >RAIZETTE</button>
        <span style="color:grey">Reset the input and the shown text in pink</span>
    </form>
</div>
-->

{{--In order to this component to fully work place this div in top of code or remove previous div...... (a revoir ...) --}}


