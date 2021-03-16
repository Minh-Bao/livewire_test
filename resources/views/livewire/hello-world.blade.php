<div>

    {{--TESTBIND Bind modelexamople --}}
    <input style="color:rgb(207, 66, 89)" wire:model="name" type="text">
    <input wire:model="loud" type="checkbox">

    {{--TESTBIND Bind modelexamople next... --}}
    hello world <span style="color:rgb(180, 50, 72)">{{$name}}</span>  @if ($loud) !  @endif

    <hr>---------------------------------------------- <br>

    {{-- TEST1 instead of classical select use of laravel/collective--}}
    {!! Form::select("test", $list, null, ["wire:model" => "greeting","style" => "color:blue"]) !!}
    
    {{-- TEST1 to show direct html element set in controller --}}
    @if($greeting)
    <span style="width: 25%; color: rgb(0, 68, 255)">
        {!!$greeting!!}       
    </span>
    @endif

    <hr>---------------------------------------------- <br>


    {{-- TEST2 function need in controller  --}}
    <form action="#" wire:submit.prevent="resetName('bingooo')">
        <button >ResetName</button>
        <span style="color:grey">Reset the input and the shown text in pink</span>

    </form>

    {{-- TEST2 no form needeed --}}
    {{-- <button wire:mouseenter="resetName('bindo')">Reset name </button> --}}

    <hr>---------------------------------------------- <br>

    {{-- TEST#  no function needed in onctroller --}}
    <form action="#" wire:submit.prevent="$set('name', 'TESTRER')">
        <button >RAIZETTE</button>
        <span style="color:grey">Reset the input and the shown text in pink</span>
    </form>
</div>
