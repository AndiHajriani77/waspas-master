@extends('master')

@section('title', 'Index')

@section('main-content')
    @if (session('success'))
        <div class="flex justify-center fixed top-0 left-1/2 transform -translate-x-1/2 z-50 mt-6">
            <div id="toast-success"
                class="flex items-center w-full max-w-xs p-4 mb-4 text-primary bg-success rounded-lg shadow" role="alert"
                role="alert">
                <div
                    class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Check icon</span>
                </div>
                <div class="mx-3 text-sm font-normal">{{ session('success') }}</div>
                <button type="button"
                    class="ml-auto -mx-1.5 -my-1.5 rounded-lg focus:ring-2 focus:ring-green-100 p-1.5 inline-flex h-8 w-8 text-green-500 hover:text-green-500 bg-green-100 hover:bg-green-300"
                    data-dismiss-target="#toast-success" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        </div>
    @elseif(session('error'))
        <div class="flex justify-center fixed top-0 left-1/2 transform -translate-x-1/2 z-50 mt-6">
            <div id="toast-warning"
                class="flex items-center w-full max-w-xs p-4 text-primary bg-warning rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
                role="alert">
                <div
                    class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-orange-500 bg-orange-100 rounded-lg dark:bg-orange-700 dark:text-orange-200">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Warning icon</span>
                </div>
                <div class="mx-3 text-sm font-normal">{{ session('error') }}</div>
                <button type="button"
                    class="ml-auto -mx-1.5 -my-1.5 bg-white text-yellow-300 hover:text-yellow-700 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-yellow-400 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                    data-dismiss-target="#toast-warning" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        </div>
    @endif

    <div class="p-4 border border-purple mt-14 dark:border-none shadow-md rounded-lg bg-gray-100 dark:bg-secondary">
        <div class="row">
            <div class="flex justify-between">
                <div class="px-6 py-2">
                    <div class="text-primary dark:text-purple m-4 font-semibold text-2xl tracking-wide">KRITERIA</div>
                </div>

                <div class="right-8 mt-2">
                    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                        class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="button">
                        Tambah Kriteria
                    </button>
                    <div id="crud-modal" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-md max-h-full">
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <div
                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                        Create New Kriteria
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-toggle="crud-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <form class="p-4 md:p-5" method="post" action="{{ route('data-kriteria.store') }}"
                                    id="myForm" enctype="multipart/form-data">
                                    @csrf
                                    <div class="grid gap-4 mb-4 grid-cols-2">
                                        <div class="col-span-2">
                                            <label for="kode_kriteria"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode
                                                Kriteria</label>
                                            <input type="text" name="kode_kriteria" id="kode_kriteria"
                                                value="{{ $newCode }}"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                readonly>
                                        </div>
                                        <div class="col-span-2">
                                            <label for="nama_kriteria"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                                Kriteria</label>
                                            <input type="text" name="nama_kriteria" id="nama_kriteria"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        </div>
                                        <div class="col-span-2 sm:col-span-1">
                                            <label for="bobot_kriteria"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bobot
                                                Kriteria</label>
                                            <input type="text" name="bobot_kriteria" id="bobot_kriteria"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        </div>
                                        <div class="col-span-2 sm:col-span-1">
                                            <label for="jenis_kriteria"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                                                Kriteria</label>
                                            <select id="jenis_kriteria" name="jenis_kriteria"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                <option selected="">Pilih jenis kriteria</option>
                                                <option value="benefit">Benefit</option>
                                                <option value="cost">Cost</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="grid gap-4 mb-4 grid-cols-2">
                                        <div class="col-span-2">
                                            <label for="karakter_kriteria"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Karakter
                                                Kriteria</label>
                                            <select id="karakter_kriteria" name="karakter_kriteria"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                <option disabled selected="">Pilih Karakter kriteria</option>
                                                <option value="1">Typing</option>
                                                <option value="2">Opsi</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div id="input-container">
                                        <div class="mb-4 grid gap-4 grid-cols-3">
                                            <!-- Nama Anggota -->
                                            <div class="col-span-1">
                                                <label for="jawaban"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jawaban</label>
                                                <input type="text" name="jawaban[]"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            </div>

                                            <!-- Luas Tanah -->
                                            <div class="col-span-1">
                                                <label for="skor"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Skor</label>
                                                <input type="text" name="skor[]"
                                                    class="luas-tanah bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            </div>

                                            <!-- Tombol Add More -->
                                            <div class="col-span-1 flex items-end">
                                                <!-- Tombol Add More -->
                                                <button type="button" id="add-more"
                                                    class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                    Add

                                                </button>

                                            </div>

                                            <!-- Total Luas Tanah -->

                                        </div>
                                    </div>
                                    <button type="submit"
                                        class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        Submit
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative overflow-x-auto shadow-md rounded-lg md:mx-20">
            <table class="w-full text-sm">
                <thead class="text-xs text-primary dark:text-purple uppercase bg-purple dark:bg-table-head">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kode Kriteria
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Kriteria
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Bobot Kriteria
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jenis Kriteria
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Karakter Kriteria
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                        {{-- <th scope="col" class="px-6 py-3">
                        Action
                    </th> --}}
                    </tr>
                </thead>

                <tbody class="text-xs md:text-base">
                    @if ($kriteria->isEmpty())
                        <tr
                            class="bg-gray-100 dark:bg-primary border border-primary dark:border-purple text-primary dark:text-purple">
                            <td colspan="6" class="dark:bg-primary text-center py-4 text-primary dark:text-purple">
                                List Kriteria Kosong
                            </td>
                        </tr>
                    @else
                        @foreach ($kriteria as $Kriteria)
                            <tr
                                class="bg-gray-100 dark:bg-primary border-primary dark:border-purple text-primary dark:text-purple">
                                <td scope="row" class="text-center py-4 whitespace-nowrap dark:text-white">
                                    {{ $Kriteria->id }}
                                </td>
                                <td class="text-center py-4">
                                    {{ $Kriteria->kode_kriteria }}
                                </td>
                                <td class="text-center py-4">
                                    {{ $Kriteria->nama_kriteria }}
                                </td>
                                <td class="text-center py-4">
                                    {{ $Kriteria->bobot_kriteria }}
                                </td>
                                <td class="text-center py-4">
                                    {{ $Kriteria->jenis_kriteria }}
                                </td>

                                <td class="text-center py-4">
                                    @if ($Kriteria->karakter_kriteria == 1)
                                        <p>Typing</p>
                                    @else
                                        <p>Opsi</p>
                                    @endif
                                </td>
                                <td class="py-4">
                                    <div class="md:flex justify-around">
                                        <div class="flex items-center">
                                            <button data-modal-target="crud-modal-{{ $Kriteria->id }}"
                                                data-modal-toggle="crud-modal-{{ $Kriteria->id }}"
                                                class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                                type="button">
                                                Edit
                                            </button>
                                            <div id="crud-modal-{{ $Kriteria->id }}" tabindex="-1" aria-hidden="true"
                                                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                <div class="relative p-4 w-full max-w-md max-h-full">
                                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                        <div
                                                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                            <h3
                                                                class="text-lg font-semibold text-gray-900 dark:text-white">
                                                                Edit Kriteria
                                                            </h3>
                                                            <button type="button"
                                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                                data-modal-toggle="crud-modal-{{ $Kriteria->id }}">
                                                                <svg class="w-3 h-3" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 14 14">
                                                                    <path stroke="currentColor" stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="2"
                                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                                </svg>
                                                                <span class="sr-only">Close modal</span>
                                                            </button>
                                                        </div>
                                                        <!-- Modal body -->
                                                        <form class="p-4 md:p-5" method="post"
                                                            action="{{ route('data-kriteria.update', $Kriteria->id) }}"
                                                            id="myForm" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="grid gap-4 mb-4 grid-cols-2">
                                                                <div class="col-span-2">
                                                                    <label for="nama_kriteria"
                                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                                                        Kriteria</label>
                                                                    <input type="text" name="nama_kriteria"
                                                                        id="nama_kriteria"
                                                                        value="{{ $Kriteria->nama_kriteria }}"
                                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                </div>
                                                                <div class="col-span-2 sm:col-span-1">
                                                                    <label for="bobot_kriteria"
                                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bobot
                                                                        Kriteria</label>
                                                                    <input type="text" name="bobot_kriteria"
                                                                        id="bobot_kriteria"
                                                                        value="{{ $Kriteria->bobot_kriteria }}"
                                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                </div>
                                                                <div class="col-span-2 sm:col-span-1">
                                                                    <label for="jenis_kriteria"
                                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                                                                        Kriteria</label>
                                                                    <select id="jenis_kriteria" name="jenis_kriteria"
                                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                        <option selected="">Pilih jenis kriteria
                                                                        </option>
                                                                        <option value="benefit"
                                                                            {{ $Kriteria->jenis_kriteria === 'benefit' ? 'selected' : '' }}>
                                                                            Benefit</option>
                                                                        <option value="cost"
                                                                            {{ $Kriteria->jenis_kriteria === 'cost' ? 'selected' : '' }}>
                                                                            Cost</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-span-2 sm:col-span-1">
                                                                    <label for="karakter_kriteria"
                                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Karakter
                                                                        Kriteria</label>
                                                                    <select id="karakter_kriteria"
                                                                        name="karakter_kriteria"
                                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                        <option selected disabled>Pilih Karakter kriteria
                                                                        </option>
                                                                        <option value="1"
                                                                            {{ old('karakter_kriteria', $Kriteria->karakter_kriteria) == '1' ? 'selected' : '' }}>
                                                                            Typing</option>
                                                                        <option value="2"
                                                                            {{ old('karakter_kriteria', $Kriteria->karakter_kriteria) == '2' ? 'selected' : '' }}>
                                                                            Opsi</option>
                                                                    </select>
                                                                </div>


                                                            </div>

                                                            <button type="submit"
                                                                class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                                <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor"
                                                                    viewBox="0 0 20 20"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd"
                                                                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                                                        clip-rule="evenodd"></path>
                                                                </svg>
                                                                Submit
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @if ($Kriteria->karakter_kriteria == 2)
                                            <div class="flex items-center">
                                                <form action="{{ route('opsi') }}" method="post">
                                                    @csrf
                                                    <div class="flex justify-center">
                                                        <input type="hidden" name="kode_kriteria" value="{{$Kriteria->kode_kriteria}}">
                                                        <button type="submit"
                                                            class="text-white bg-yellow-600 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:focus:ring-yellow-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center delete-entry">
                                                            Opsi
                                                        </button>
                                                    </div>
                                                </form>
                                        @endif
                                        @if ($Kriteria->nama_kriteria != 'Luas Tanah' && $Kriteria->nama_kriteria != 'No SK')
                                            <button type="submit" data-modal-target="popup-modal-{{ $Kriteria->id }}"
                                                data-modal-toggle="popup-modal-{{ $Kriteria->id }}"
                                                class="bg-red-500 hover:bg-red-600 text-primary font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                                                type="submit">
                                                Hapus
                                            </button>
                                        @else
                                        @endif
                                        <div id="popup-modal-{{ $Kriteria->id }}" tabindex="-1"
                                            class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                            <div class="relative w-full max-w-md max-h-full">
                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                    <button type="button"
                                                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                        data-modal-hide="popup-modal-{{ $Kriteria->id }}">
                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                    <div class="p-6 text-center space-x-10">
                                                        <svg aria-hidden="true"
                                                            class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200"
                                                            fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                            </path>
                                                        </svg>
                                                        <h3
                                                            class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                                            Apakah anda yakin menghapus alternatif ini ? </h3>
                                                        <form action="{{ route('data-kriteria.destroy', $Kriteria->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <div class="flex justify-center">
                                                                <button data-modal-hide="popup-modal" type="submit"
                                                                    class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                                    Ya
                                                                </button>
                                                        </form>
                                                        <button data-modal-hide="popup-modal-{{ $Kriteria->id }}"
                                                            type="button"
                                                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600 mx-2">Tidak</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                </tbody>
                @endforeach
                @endif
            </table>
        </div>
        <div class="flex pt-10 justify-end">
            {{ $kriteria->links('kriteria.pagination') }}
        </div>
    </div>
    <script>
        setTimeout(function() {
            var toastElements = document.querySelectorAll('#toast-success, #toast-warning, #toast-danger');
            toastElements.forEach(function(element) {
                if (element) {
                    element.remove();
                }
            });
        }, 3000);
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Tambahkan event listener pada dokumen untuk mendeteksi klik tombol "Remove"
            document.addEventListener('click', function(event) {
                if (event.target.classList.contains('remove-entry')) {
                    // Hapus entri terkait ketika tombol "Remove" ditekan
                    event.target.closest('.grid').remove();

                    // Perbarui total luas tanah setelah menghapus entri
                    updateTotalLuasTanah();
                }
            });



            document.getElementById('add-more').addEventListener('click', function() {
                // Clone the first input container
                var inputContainer = document.getElementById('input-container');
                var newInputContainer = inputContainer.firstElementChild.cloneNode(true);

                // Clear the input values
                var inputElements = newInputContainer.querySelectorAll('input');
                inputElements.forEach(function(input) {
                    input.value = '';
                });

                // Tambahkan tombol "Remove"
                var removeButton = document.createElement('button');
                removeButton.type = 'button';
                removeButton.classList.add('inline-flex',
                    'items-center',
                    'bg-red-500',
                    'hover:bg-red-600',
                    'focus:ring-4',
                    'focus:outline-none',
                    'focus:ring-red-300',
                    'font-medium',
                    'rounded-lg',
                    'text-sm',
                    'px-5',
                    'py-2.5',
                    'text-center',
                    'dark:bg-red-600',
                    'dark:hover:bg-red-700',
                    'dark:focus:ring-red-800');
                removeButton.textContent = 'Del';

                // Tambahkan event listener untuk tombol "Remove"
                removeButton.addEventListener('click', function() {
                    // Hapus entri terkait ketika tombol "Remove" ditekan
                    newInputContainer.remove();

                    // Perbarui total luas tanah setelah menghapus entri
                    updateTotalLuasTanah();
                });

                newInputContainer.querySelector('.col-span-1.flex').appendChild(removeButton);

                // Append the cloned input container
                inputContainer.appendChild(newInputContainer);
            });

            // Update total luas tanah when input changes
            document.addEventListener('input', function(event) {
                if (event.target.classList.contains('luas-tanah')) {
                    updateTotalLuasTanah();
                }
            });

            // Function to update total luas tanah
            function updateTotalLuasTanah() {
                var luasTanahInputs = document.querySelectorAll('.luas-tanah');
                var totalLuasTanahInput = document.getElementById('total_luas_tanah');
                var totalLuasTanah = 0;

                luasTanahInputs.forEach(function(input) {
                    var luasTanahValue = parseFloat(input.value) || 0;
                    totalLuasTanah += luasTanahValue;
                });

                totalLuasTanahInput.value = totalLuasTanah;
            }
        });
    </script>
@endsection
