@extends('layouts.app')

@section('content')
          @include('components.header') 
      
          @include('components.sidebar')
        
          <div class="h-full ml-14 mt-14 mb-10 md:ml-64">

            <!-- Client Table -->
            <div class="inline-flex md:col-span-2 xl:col-span-3 mt-4 mx-4 pl-4 rounded-lg shadow-lg border-b-4 border-blue-600 bg-blue-500 dark:bg-gray-800 dark:border-gray-600 text-white w-44 h-10">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 m-1.5 mr-1 ml-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m6.75 12l-3-3m0 0l-3 3m3-3v6m-1.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                </svg>                                
                <h3 class="py-2 mx-2 px-0.5 text-sm font-medium tracking-wider capitalize">Surat Keluar</h3>
            </div>
            <div class="mt-10 mx-4">
            <div class="w-full overflow-x-auto bg-blue-700 dark:bg-gray-900 mx-auto">
                    <div class="relative m-2 p-2 text-left">
                        <a href="{{ route('suratkeluar.add.suratkeluar')}}" class="inline-flex bg-blue-500 hover:bg-white hover:text-gray-900 dark:bg-gray-50 dark:hover:bg-blue-700 dark:hover:text-white  dark:active:bg-blue-800  text-white active:bg-blue-800 active:text-white dark:text-gray-800 dark:active:text-white text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                          </svg>
                          <span class="py-1">Tambah Data</span>
                        </a>
                    </div>
                  <table class="w-full">
                    <thead>
                      <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800 text-center">
                        <th class="px-4 py-3">No</th>
                        <th class="px-4 py-3">Nomor Surat</th>
                        <th class="px-4 py-3">Judul Surat</th>
                        <th class="px-4 py-3">Indeks Surat</th>
                        <th class="px-4 py-3">Tujuan Surat</th>
                        <th class="px-4 py-3">Tanggal Keluar</th>
                        <th class="px-14 py-3">Aksi</th>
                      </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @php
                      $id = 1;
                    @endphp
                      @if ($dtsurat_keluar->count())
                        @foreach ($dtsurat_keluar as $surat_keluar)
                          <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400 text-center">
                            <td class="px-4 py-3 text-sm">{{ $id++ }}</td>
                            <td class="px-4 py-3 text-sm">{{ $surat_keluar->no_surat}}</td>
                            <td class="px-4 py-3 text-sm">{{ $surat_keluar->judul_surat}}</td>
                            <td class="px-4 py-3 text-sm">{{ $surat_keluar->indeks_surat}}</td>
                            <td class="px-4 py-3 text-sm">{{ $surat_keluar->tujuan_surat}}</td>
                            <td class="px-4 py-3 text-sm">{{ $surat_keluar->tanggal_keluar}}</td>
                            <td class="px-4 py-3 text-sm">
                              <div class="items-center">
                                <ul class="inline-flex">
                                  <li class="flex rounded-xl px-2 py-2 mx-1 bg-yellow-400 text-gray-100 active:bg-yellow-600">
                                      <a href="{{ route('suratkeluar.edit.suratkeluar', $surat_keluar->id) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>
                                      </a>
                                  </li>
                                  <li class="flex rounded-xl px-2 py-2 mx-1 bg-red-600 text-gray-100 active:bg-red-800">
                                    <form action="{{ route('suratkeluar.destroy.suratkeluar', $surat_keluar->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                      <button type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                      </button>
                                    </form> 
                                  </li>
                                  <li class="flex rounded-xl py-2 px-2 mx-1 bg-blue-600 text-gray-100 active:bg-blue-800">
                                    <a href="{{ asset('storage/suratkeluar/' . $surat_keluar->filekeluar) }}">
                                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                      </svg>
                                    </a>
                                  </li>
                                </ul>
                              </div>  
                            </td>  
                          </tr>
                        @endforeach
                      @endif
                    </tbody>
                  </table>
                  <div class="px-5">
                    {{ $dtsurat_keluar->links('pagination::tailwind')}}
                  </div>
                </div>
              </div>
            </div>
        </div>
@endsection