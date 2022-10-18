@extends('layouts.app')

@section('content')

    @include('components.header')
    @include('components.sidebar')
    <div class="h-full ml-14 mt-14 mb-10 md:ml-64">
        <div class="inline-flex md:col-span-2 xl:col-span-3 mt-4 mx-4 pl-4 rounded-lg shadow-lg border-b-4 border-blue-600 bg-blue-500 dark:bg-gray-800 dark:border-gray-600 text-white w-44 h-10">                 
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 m-1.5 mr-1 ml-1">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
              </svg>              
            <h3 class="py-2 mx-2 px-0.5 text-sm font-medium tracking-wider capitalize">Tambah Data</h3>
        </div>
        <form action="{{ route('suratkeluar.store.suratkeluar') }}" method="POST" class="mx-4 my-4">
            @csrf
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="no_surat" class="block mb-2 text-sm font-semibold capitalize text-gray-900 dark:text-gray-300">Nomor Surat</label>
                    <input type="text" id="no_surat" name="no_surat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
                <div>
                    <label for="judul_surat" class="block mb-2 text-sm font-semibold capitalize text-gray-900 dark:text-gray-300">Judul Surat</label>
                    <input type="text" id="judul_surat" name="judul_surat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
                <div>
                    <label for="indeks_surat" class="block mb-2 text-sm font-semibold capitalize text-gray-900 dark:text-gray-300">Indeks Surat</label>
                    <input type="number" id="indeks_surat" name="indeks_surat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
                <div>
                    <label for="tujuan_surat" class="block mb-2 text-sm font-semibold capitalize text-gray-900 dark:text-gray-300">Asal Surat</label>
                    <input type="text" id="tujuan_surat" name="tujuan_surat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>                
                <div class="relative">
                    <label for="tanggal_keluar" class="block mb-2 text-sm font-semibold capitalize text-gray-900 dark:text-gray-300">Tanggal Masuk</label>
                    <input type="date" id="tanggal_keluar" name="tanggal_keluar"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker-input" placeholder="Select date">
                </div>
                <div>                    
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="pdf_masuk">Upload file</label>
                    <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="pdf_masuk_help" id="pdf_masuk" type="file">
                </div>
                <button type="submit" class="inline-flex bg-blue-700 rounded-lg shadow-sm hover:bg-blue-800 text-white font-semibold capitalize px-8 py-2 w-fit">
                    <span>Save</span>
                </button>
            </div>
        </form>
    </div>

@endsection