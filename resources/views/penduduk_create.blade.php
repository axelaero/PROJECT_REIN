@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            <div class="mb-4" style="text-align:center;">
            Dashboard 
                <?php
                $value = Session::get('username');
                ?>
                {{$value}}
            </div>
            <form action="{{ route('penduduk_created') }}" method="post">
                <div class="mb-4">
                    <label for="NIK" class="sr-only">NIK</label>
                    <input type="text" name="NIK" id="NIK" placeholder="NIK" 
                    class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('NIK') border-red-500 @enderror" 
                    value="{{ old('NIK') }}">

                    @error('NIK')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="KK" class="sr-only">KK</label>
                    <input type="text" name="KK" id="KK" placeholder="KK" 
                    class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('KK') border-red-500 @enderror" 
                    value="{{ old('KK') }}">

                    @error('KK')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="BDT" class="sr-only">BDT</label>
                    <input type="text" name="BDT" id="BDT" placeholder="BDT" 
                    class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('BDT') border-red-500 @enderror" 
                    value="{{ old('BDT') }}">

                    @error('BDT')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="Nama" class="sr-only">Nama</label>
                    <input type="text" name="Nama" id="Nama" placeholder="Nama" 
                    class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('Nama') border-red-500 @enderror" 
                    value="{{ old('Nama') }}">

                    @error('Nama')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="Alamat" class="sr-only">Alamat</label>
                    <input type="text" name="Alamat" id="Alamat" placeholder="Alamat" 
                    class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('Alamat') border-red-500 @enderror" 
                    value="{{ old('Alamat') }}">

                    @error('Alamat')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="Deskripsi" class="sr-only">Deskripsi</label>
                    <input type="text" name="Deskripsi" id="Deskripsi" placeholder="Deskripsi" 
                    class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('Deskripsi') border-red-500 @enderror" 
                    value="{{ old('Deskripsi') }}">

                    @error('Deskripsi')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    Periode: 
                    <?php
                        echo date("M") . date(" - Y");
                    ?>
                    <input type="hidden" name="periode" value="
                    <?php
                        echo date("M") . date(" - Y");
                    ?>
                    ">
                </div>
                <div class="mb-4">
                    Kelurahan: {{$value}}
                    <input type="hidden" name="kelurahan" value="{{$value}}">
                </div>
                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">
                        Tambah Penduduk</button>
                </div>
            </form>
        </div>
    </div>
@endsection