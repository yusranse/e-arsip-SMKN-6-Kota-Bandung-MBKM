@extends('layouts.app')

@section('content')
          @include('components.header') 
      
          @include('components.sidebar')
        
          <div class="h-full ml-14 mt-14 mb-10 md:ml-64">
        
            <!-- Client Table -->
            <div class="inline-flex md:col-span-2 xl:col-span-3 mt-4 mx-4 pl-4 rounded-lg shadow-lg border-b-4 border-blue-600 bg-blue-500 dark:bg-gray-800 dark:border-gray-600 text-white w-44 h-10">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 m-1.5 mr-1 ml-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 13.5h3.86a2.25 2.25 0 012.012 1.244l.256.512a2.25 2.25 0 002.013 1.244h3.218a2.25 2.25 0 002.013-1.244l.256-.512a2.25 2.25 0 012.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 00-2.15-1.588H6.911a2.25 2.25 0 00-2.15 1.588L2.35 13.177a2.25 2.25 0 00-.1.661z" />
                  </svg>                  
                <h3 class="py-2 mx-2 px-0.5 text-sm font-medium tracking-wider capitalize">Surat Masuk</h3>
            </div>
            <div class="mt-10 mx-4">
              <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto bg-blue-700 dark:bg-gray-900 mx-auto">
                  <form action="{{route('suratmasuk.index.suratmasuk')}}" method="GET" onclick="this.value=''">
                    <div class="relative flex m-2 p-2 text-left justify-between">
                      <div class="bg-white rounded sm:w-72 md:w-64 max-w-sm shadow-sm w-32 ml-4">
                        <input type="search" name="search" id="search" value="{{request('search')}}" placeholder="Search" class="relative w-32 sm:w-72 md:w-64 pl-3 text-sm text-black outline-none border-2 border-gray-300 focus:outline-none bg-white" />
                        <button class="cari outline-none focus:outline-none absolute bg-blue-700 p-2 py-2 rounded-r-full">
                          <svg class="w-5 text-white h-5 cursor-pointer" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </button>
                      </div>
                      <a href="{{ route('suratmasuk.add.suratmasuk')}}" class="inline-flex bg-blue-500 hover:bg-white hover:text-gray-900 dark:bg-gray-50 dark:hover:bg-blue-700 dark:hover:text-white  dark:active:bg-blue-800  text-white active:bg-blue-800 active:text-white dark:text-gray-800 dark:active:text-white text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                        </svg>
                        <span class="py-1">Tambah Data</span>
                      </a>
                    </div>
                  </form>
                  <table class="w-full">
                    <thead>
                      <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800 text-center">
                        <th class="px-4 py-3">No</th>
                        <th class="px-4 py-3">Nomor Surat</th>
                        <th class="px-4 py-3">Judul Surat</th>
                        <th class="px-4 py-3">Indeks Surat</th>
                        <th class="px-4 py-3">Asal Surat</th>
                        <th class="px-4 py-3">Tanggal Masuk</th>
                        <th class="px-14 py-3">Aksi</th>
                      </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                      @php
                          $id = 1;
                      @endphp
                      @if ($dtsurat_masuk->count())
                            @foreach ($dtsurat_masuk as $surat_masuk)
                        <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400 text-center">
                          <td class="px-4 py-3 text-sm">{{ $id++ }}</td>
                          <td class="px-4 py-3 text-sm">{{ $surat_masuk->no_surat}}</td>
                          <td class="px-4 py-3 text-sm">{{ $surat_masuk->judul_surat}}</td>
                          <td class="px-4 py-3 text-sm">{{ $surat_masuk->indeks_surat}}</td>
                          <td class="px-4 py-3 text-sm">{{ $surat_masuk->asal_surat}}</td>
                          <td class="px-4 py-3 text-sm">{{ $surat_masuk->tanggal_masuk}}</td>
                          <td class="px-4 py-3 text-sm">
              
                            <div class="items-center">
                            <ul class="inline-flex">
                                  <li class="flex rounded-xl py-2 px-2 mx-1 bg-yellow-400 text-gray-100 active:bg-yellow-600">                                                                        
                                        <a href="{{ route('suratmasuk.edit.suratmasuk', $surat_masuk->id) }}">
                                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                          </svg>
                                        </a>                                   
                                  </li>
                                  <li class="flex rounded-xl py-2 px-2 mx-1 bg-red-600 text-gray-100 active:bg-red-800">
                                    <form action="{{ route('suratmasuk.destroy.suratmasuk', $surat_masuk->id) }}" method="POST">
                                      @method('DELETE')
                                      @csrf
                                      <button type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>                                      
                                      </button>
                                    </form>
                              
                                  <li class="flex rounded-xl py-2 px-2 mx-1 bg-blue-600 text-gray-100 active:bg-blue-800">
                                    <a href="{{ asset('storage/suratmasuk/' . $surat_masuk->filemasuk) }}">
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
                    {{ $dtsurat_masuk->links('pagination::tailwind')}}
                  </div>
                </div>
              </div>
            </div>
          </div>
  @endsection