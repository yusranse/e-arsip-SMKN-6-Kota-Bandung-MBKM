@extends('layouts.app')

@section('content')

          @include('components.header') 
      
          @include('components.sidebar')
        
          <div class="h-full ml-14 mt-14 mb-10 md:ml-64">

            <!-- Client Table -->
            <div class="inline-flex md:col-span-2 xl:col-span-3 mt-4 mx-4 pl-4 rounded-lg shadow-lg border-b-4 border-blue-600 bg-blue-500 dark:bg-gray-800 dark:border-gray-600 text-white w-56 h-10">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 m-1.5 mr-1 ml-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m6.75 12l-3-3m0 0l-3 3m3-3v6m-1.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                </svg>                                
                <h3 class="py-2 mx-2 px-0.5 text-sm font-medium tracking-wider capitalize">Report Surat Keluar</h3>
            </div>
            <div class="mt-10 mx-4">
              <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto bg-blue-700 dark:bg-gray-900">
                    <div class="relative m-2 p-2 text-left inline-flex">
                        <div>
                            <a href="{{ route('export.suratkeluar') }}" class="inline-flex w-52 h-8 bg-blue-500 dark:bg-gray-100 text-white active:bg-blue-700 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0110.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0l.229 2.523a1.125 1.125 0 01-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0021 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 00-1.913-.247M6.34 18H5.25A2.25 2.25 0 013 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 011.913-.247m10.5 0a48.536 48.536 0 00-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5zm-3 0h.008v.008H15V10.5z" />
                                </svg>                              
                                <span class="py-1 px-2">Cetak Report (.xlsx)</span>
                            </a>
                        </div>
                        {{-- <div class="pl-20 pt-0.5">
                            <button id="dropdownDefault" data-dropdown-toggle="dropdownindex" class="inline-flex w-40 h-8 bg-blue-500 dark:bg-gray-100 text-white active:bg-blue-700 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">
                                <span class="py-1 px-2">Filter Index</span>
                                <svg class="w-6 h-6 ml-2" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                            <div id="dropdownindex" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 474px);">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                                <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                                </li>
                                </ul>
                            </div>
                        </div>
                        <div class="pl-20 pt-0.5">
                            <button id="dropdownDefault" data-dropdown-toggle="dropdowntanggal" class="inline-flex w-44 h-8 bg-blue-500 dark:bg-gray-100 text-white active:bg-blue-700 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">
                                <span class="py-1 px-2">Filter Tanggal</span>
                                <svg class="w-6 h-6 ml-2" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                            <div id="dropdowntanggal" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 474px);">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                                <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                                </li>
                                </ul>
                            </div>
                        </div> --}}
                    </div>
                    <table class="w-full">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800 text-center">
                            <th class="px-8 py-3">No</th>
                            <th class="px-8 py-3">Nomor Surat</th>
                            <th class="px-10 py-3">Judul Surat</th>
                            <th class="px-10 py-3">Indeks Surat</th>
                            <th class="px-12 py-3">Tujuan Surat</th>
                            <th class="px-10 py-3">Tanggal Keluar</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @php
                        $id = 1;
                            @endphp
                            @if ($dtsurat_keluar->count())
                            @foreach ($dtsurat_keluar as $surat_keluar)
                                <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400 text-center" >
                                <td class="px-4 py-3 text-sm">{{ $id++ }}</td>
                                <td class="px-4 py-3 text-sm">{{ $surat_keluar->no_surat}}</td>
                                <td class="px-4 py-3 text-sm">{{ $surat_keluar->judul_surat}}</td>
                                <td class="px-4 py-3 text-sm">{{ $surat_keluar->indeks_surat}}</td>
                                <td class="px-4 py-3 text-sm">{{ $surat_keluar->tujuan_surat}}</td>
                                <td class="px-4 py-3 text-sm">{{ $surat_keluar->tanggal_keluar}}</td>
                                </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
            <!-- ./Client Table -->
        </div>
    @endsection