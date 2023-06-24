<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Edit Mata Kuliah') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                <a href="{{ route('makuls.index') }}"
                    class="inline-flex items-center px-4 py-2 mb-4 text-xs font-semibold tracking-widest text-black uppercase transition duration-150 ease-in-out bg-green-600 border border-transparent rounded-md hover:bg-green-500 active:bg-green-700 focus:outline-none focus:border-green-700 focus:shadow-outline-gray disabled:opacity-25">
                    <- Go back
                </a>
                <form action="{{ route('makuls.update', $makul->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                    <label for="textkode_mk"
                        class="block mb-2 text-sm font-bold text-gray-700">Kode Mata Kuliah</label>
                    <input type="text"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        name="kode_mk"
                        value="{{ $makul->kode_mk }}"
                        placeholder="Enter Kode Mata Kuliah">
                    @error('kode_mk') <span class="text-red-500">{{ $message }}
                    </span>@enderror
                </div>
                <div class="mb-4">
                    <label for="textmatkul"
                        class="block mb-2 text-sm font-bold text-gray-700">Mata Kuliah</label>
                    <input type="text"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        name="matkul"
                        value="{{ $makul->matkul }}"
                        placeholder="Enter Mata Kuliah">
                    @error('matkul') <span class="text-red-500">{{ $message }}
                    </span>@enderror
                </div>
                <div class="mb-4">
                    <label for="textkelas"
                        class="block mb-2 text-sm font-bold text-gray-700">Kelas</label>
                    <input type="text"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        name="kelas"
                        value="{{ $makul->kelas }}"
                        placeholder="Enter Kelas">
                    @error('kelas') <span class="text-red-500">{{ $message }}
                    </span>@enderror
                </div>
                <div class="mb-4">
                    <label for="textdosen_pengampu"
                        class="block mb-2 text-sm font-bold text-gray-700">Dosen Pengampu</label>
                    <input type="text"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        name="dosen_pengampu"
                        value="{{ $makul->dosen_pengampu }}"
                        placeholder="Enter Dosen Pengampu">
                    @error('dosen_pengampu') <span class="text-red-500">{{ $message }}
                    </span>@enderror
                </div>
                <div class="mb-4">
                    <label for="texthari"
                        class="block mb-2 text-sm font-bold text-gray-700">Hari</label>
                    <input type="text"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        name="hari"
                        value="{{ $makul->hari }}"
                        placeholder="Enter Hari">
                    @error('hari') <span class="text-red-500">{{ $message }}
                    </span>@enderror
                </div>
                <div class="mb-4">
                    <label for="textruang"
                        class="block mb-2 text-sm font-bold text-gray-700">Ruang</label>
                    <input type="text"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        name="ruang"
                        value="{{ $makul->ruang }}"
                        placeholder="Enter Ruang">
                    @error('ruang') <span class="text-red-500">{{ $message }}
                    </span>@enderror
                </div>
                <div class="mb-4">
                    <label for="textjam"
                        class="block mb-2 text-sm font-bold text-gray-700">Jam</label>
                    <input type="text"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        name="jam"
                        value="{{ $makul->jam }}"
                        placeholder="Enter Jam">
                    @error('jam') <span class="text-red-500">{{ $message }}
                    </span>@enderror
                </div>
                <div class="mb-4">
                    <label for="textsks"
                        class="block mb-2 text-sm font-bold text-gray-700">SKS</label>
                    <input type="text"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        name="sks"
                        value="{{ $makul->sks }}"
                        placeholder="Enter SKS">
                    @error('sks') <span class="text-red-500">{{ $message }}
                    </span>@enderror
                </div>
                <div>
                    <button type="submit"
                    class="inline-flex items-center px-4 py-2 my-3 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25">
                        Save
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

