@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            @if(session()->has('status'))
                <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                    {{ session('status') }}
                </div>

            @endif

            Dashboard Dinas - 
                <?php
                $value = Session::get('username');
                ?>
                {{$value}}
        </div>
    </div>
@endsection