<?php

$getMahasiswa = DB::select ("select * from mahasiswas");
$countMahasiswa = count($getMahasiswa);

$getTi = DB::select ("select * from mahasiswas where jurusan='Teknik Informatika'");
$countTi = count($getTi);

$getSi = DB::select ("select * from mahasiswas where jurusan='Sistem Informatika'");
$countSi = count($getSi);

$getIlkom = DB::select ("select * from mahasiswas where jurusan='Ilmu Komunikasi'");
$countIlkom = count($getIlkom);
?>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
            <div class="bg-white shadow-sm sm:rounded-lg px-14 py-6">
                <div class="container items-center mx-6">
                        <div class="inline-flex items-center px-4 py-6 mx-2 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25"><h4>Jumlah Mahasiswa: <?= $countMahasiswa;?></h4></div>
                        <div class="inline-flex items-center px-4 py-6 mx-2 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25"><h4>Mahasiswa Teknik Informatika: <?= $countTi;?></h4></div>
                        <div class="inline-flex items-center px-4 py-6 mx-2 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25"><h4>Mahasiswa Sistem Informatika: <?= $countSi;?></h4></div>
                        <div class="inline-flex items-center px-4 py-6 mx-2 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25"><h4>Mahasiswa Ilmu Komunikasi: <?= $countIlkom;?></h4></div>
                </div>
                </div>
            </div>
    </div>
</x-app-layout>
