@extends('cms.layouts.dashboard-admin')
@section('title', 'Data Absensi | ')
@section('content')
<div class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="w-full mb-1">
        <div class="mb-4">
            <nav class="flex mb-5" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                    <li class="inline-flex items-center">
                        <a href="{{ route('cmsDashboard') }}" class="inline-flex items-center text-gray-700 hover:text-blue-600 dark:text-gray-300 dark:hover:text-white">
                            <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                            </svg>
                            Home
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <a href="#" class="ml-1 text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">Absensi</a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500" aria-current="page">List</span>
                        </div>
                    </li>
                </ol>
            </nav>
            <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Absensi</h1>
        </div>
        <div class="sm:flex">
            <div class="items-center hidden mb-3 sm:flex sm:divide-x sm:divide-gray-100 sm:mb-0 dark:divide-gray-700">
                <form class="lg:pr-3" action="#" method="GET">
                    <label for="search" class="sr-only">Search</label>
                    <div class="relative mt-1 lg:w-64 xl:w-96">
                        <input type="text" name="search" id="search" value="{{ app('request')->input('search') }}" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for Data">
                    </div>
                </form>
            </div>
            <div class="flex items-center ml-auto space-x-2 sm:space-x-3">
                <button type="button" data-mana-modal-toggle="addAbsensiModal" class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 sm:w-auto dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="w-5 h-5 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                    </svg>
                    Add
                </button>
            </div>
        </div>
    </div>
</div>
<div class="flex flex-col">
    <div class="overflow-x-auto">
        <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden shadow">
                <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                    <thead class="bg-gray-100 dark:bg-gray-700">
                        <tr>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                #
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                Nama
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                Jam Masuk
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                Jam Keluar
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                Jam Kerja
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                Lokasi Absen
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                Status
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                        @if($paginationData['total'] > 0)
                        @foreach($dataAbsensi as $data)
                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                            <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $loop->iteration }}</td>
                            <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ ucwords($data->name) }}</td>
                            <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $data->jam_masuk ? date('H:i:s', strtotime($data->jam_masuk)) : "-" }}</td>
                            <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $data->jam_keluar ? date('H:i:s', strtotime($data->jam_keluar)) : "-" }}</td>
                            <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $data->jam_kerja ? $data->jam_kerja . "jam" : "-" }}</td>
                            <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $data->lokasi_absen ?: "-" }}</td>
                            <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ ucwords($data->status) }}</td>
                        </tr>
                        @endforeach
                        @else
                        <tr class="">
                            <td class="p-4 text-center text-gray-900 whitespace-nowrap dark:text-white" colspan="7">No Data</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="sticky bottom-0 right-0 items-center w-full p-4 bg-white border-t border-gray-200 sm:flex sm:justify-between dark:bg-gray-800 dark:border-gray-700">
    <div class="flex items-center mb-4 sm:mb-0">
        <a href="{{ $paginationData['prev_page_url'] ?? '#' }}" class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
        </a>
        <a href="{{ $paginationData['next_page_url'] ?? '#' }}" class="inline-flex justify-center p-1 mr-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
            </svg>
        </a>
        <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Showing <span class="font-semibold text-gray-900 dark:text-white">{{ $paginationData['first']+1 }}-{{ $paginationData['last'] }}</span> of <span class="font-semibold text-gray-900 dark:text-white">{{ $paginationData['total'] }}</span></span>
    </div>
    <div class="flex items-center space-x-3">
        <a href="{{ $paginationData['prev_page_url'] ?? '#' }}" class="inline-flex items-center justify-center flex-1 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <svg class="w-5 h-5 mr-1 -ml-1"" fill=" currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
            Previous
        </a>
        <a href="{{ $paginationData['next_page_url'] ?? '#' }}" class="inline-flex items-center justify-center flex-1 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Next
            <svg class="w-5 h-5 ml-1 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
            </svg>
        </a>
    </div>
</div>

<div id="addAbsensiModal" tabindex="-1" aria-hidden="true" class="modal">
    <div class="modal-dialog modal-2xl">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">
                    Add Data Absensi
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white" data-mana-modal-toggle="addAbsensiModal">
                    @includeif('components.icons.close')
                </button>
            </div>
            <div class="modal-body">
                <form id="formAddAbsensi">
                    <div class="">
                        {{ csrf_field() }}
                        <div class="mb-4">
                            <label for="addUser" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User  <span class="text-red-500">*</span></label>
                            <select id="addUser" name="user_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="" selected>Choose a user</option>
                                @foreach($listUser as $key => $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="addStatus" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status  <span class="text-red-500">*</span></label>
                            <select id="addStatus" name="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="" selected>Choose a status</option>
                                <option value="sakit">Sakit</option>
                                <option value="izin">Izin</option>
                                <option value="alpa">Alpa</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" onclick="add()">Add Absensi</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    function add() {
        var form = document.forms["formAddAbsensi"];

        var formData = new FormData(form);
        var formDataObj = new Object;
        formData.forEach((value, key) => (formDataObj[key] = value));

        loading(true)
        axios({
                method: 'post',
                url: '/cms/absensi',
                data: formDataObj
            })
            .then(function(response) {  
                if (response.data.status == "OK") {
                    $('#addUser').val('')
                    location.reload();
                }
            })
            .catch(function(error) {
                loading(false)
                if (error.response) {
                    let message = error.response.data.message;
                    let errors = error.response.data.errors;
                    let alertMessage = message;

                    for (var key in errors) {
                        alertMessage = alertMessage + "\n- " + errors[key]
                    }

                    alert(alertMessage)
                } else {
                    alert("Unknown Error")
                }
            });
    }
</script>
@endsection