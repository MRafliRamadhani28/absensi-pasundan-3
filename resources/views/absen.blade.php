
<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Absensi | SMA PASUNDAN 3 BANDUNG</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.1.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-gray-50 dark:bg-gray-800">
    <div id="overflowLoading" class="fixed left-0 right-0 z-100 items-center justify-center overflow-x-hidden overflow-y-auto md:inset-0 h-modal sm:h-full flex bg-gray-900 bg-opacity-80 dark:bg-opacity-80 hidden">
        <div role="status">
            <svg aria-hidden="true" class="inline w-10 h-10 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor" />
                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill" />
            </svg>
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <div class="px-5 py-5 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-end">
            <div class="flex items-center">
                <button id="theme-toggle" data-tooltip-target="tooltip-toggle" type="button" class="text-gray-500 dark:text-gray-400 bg-gray-200 dark:bg-gray-900 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-700 rounded-full text-sm p-2.5">
                    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div id="tooltip-toggle" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                    Toggle dark mode
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex items-center justify-center">
        <div class="flex flex-col items-center space-y-10">
            <div class="flex flex-col items-center">
                <h1 class="font-bold text-center dark:text-white">SMA PASUNDAN 3 BANDUNG</h1>
            </div>
            <div class="flex flex-col items-center space-y-8">
                <div id="time" class="text-time font-medium dark:text-white"></div>
                <div id="currentDate" class="text-2xl font-medium dark:text-white"></div>
            </div>
            <input type="hidden" id="lat" name="lat">
            <input type="hidden" id="lng" name="lng">
            @if ($userAbsen)
                @if ($userAbsen->status == "hadir")
                    @if ($userAbsen->jam_keluar == null)
                        <div class="flex flex-col justify-center items-center w-round h-round shadow-3xl dark:shadow-3xl bg-red-500 dark:bg-red-800 rounded-full cursor-pointer" id="btnAbsen" onclick="absenKeluar()">
                            <svg id="thumbsUp" xmlns="http://www.w3.org/2000/svg" width="55" viewBox="0 0 384 512"><path d="M64 64V241.6c5.2-1 10.5-1.6 16-1.6H96V208 64c0-8.8-7.2-16-16-16s-16 7.2-16 16zM80 288c-17.7 0-32 14.3-32 32c0 0 0 0 0 0v24c0 66.3 53.7 120 120 120h48c52.5 0 97.1-33.7 113.4-80.7c-3.1 .5-6.2 .7-9.4 .7c-20 0-37.9-9.2-49.7-23.6c-9 4.9-19.4 7.6-30.3 7.6c-15.1 0-29-5.3-40-14c-11 8.8-24.9 14-40 14H120c-13.3 0-24-10.7-24-24s10.7-24 24-24h40c8.8 0 16-7.2 16-16s-7.2-16-16-16H120 80zM0 320s0 0 0 0c0-18 6-34.6 16-48V64C16 28.7 44.7 0 80 0s64 28.7 64 64v82c5.1-1.3 10.5-2 16-2c25.3 0 47.2 14.7 57.6 36c7-2.6 14.5-4 22.4-4c20 0 37.9 9.2 49.7 23.6c9-4.9 19.4-7.6 30.3-7.6c35.3 0 64 28.7 64 64v64 24c0 92.8-75.2 168-168 168H168C75.2 512 0 436.8 0 344V320zm336-64c0-8.8-7.2-16-16-16s-16 7.2-16 16v48 16c0 8.8 7.2 16 16 16s16-7.2 16-16V256zM160 240c5.5 0 10.9 .7 16 2v-2V208c0-8.8-7.2-16-16-16s-16 7.2-16 16v32h16zm64 24v40c0 8.8 7.2 16 16 16s16-7.2 16-16V256 240c0-8.8-7.2-16-16-16s-16 7.2-16 16v24z"/></svg>
                            <span class="mt-5 font-semibold dark:text-white">Click Out!</span>
                        </div>
                    @else
                        <div class="flex flex-col justify-center items-center w-round h-round shadow-3xl dark:shadow-3xl rounded-full cursor-pointer" id="btnAbsen">
                            <svg id="thumbsUp" xmlns="http://www.w3.org/2000/svg" width="55" viewBox="0 0 384 512"><path d="M64 64V241.6c5.2-1 10.5-1.6 16-1.6H96V208 64c0-8.8-7.2-16-16-16s-16 7.2-16 16zM80 288c-17.7 0-32 14.3-32 32c0 0 0 0 0 0v24c0 66.3 53.7 120 120 120h48c52.5 0 97.1-33.7 113.4-80.7c-3.1 .5-6.2 .7-9.4 .7c-20 0-37.9-9.2-49.7-23.6c-9 4.9-19.4 7.6-30.3 7.6c-15.1 0-29-5.3-40-14c-11 8.8-24.9 14-40 14H120c-13.3 0-24-10.7-24-24s10.7-24 24-24h40c8.8 0 16-7.2 16-16s-7.2-16-16-16H120 80zM0 320s0 0 0 0c0-18 6-34.6 16-48V64C16 28.7 44.7 0 80 0s64 28.7 64 64v82c5.1-1.3 10.5-2 16-2c25.3 0 47.2 14.7 57.6 36c7-2.6 14.5-4 22.4-4c20 0 37.9 9.2 49.7 23.6c9-4.9 19.4-7.6 30.3-7.6c35.3 0 64 28.7 64 64v64 24c0 92.8-75.2 168-168 168H168C75.2 512 0 436.8 0 344V320zm336-64c0-8.8-7.2-16-16-16s-16 7.2-16 16v48 16c0 8.8 7.2 16 16 16s16-7.2 16-16V256zM160 240c5.5 0 10.9 .7 16 2v-2V208c0-8.8-7.2-16-16-16s-16 7.2-16 16v32h16zm64 24v40c0 8.8 7.2 16 16 16s16-7.2 16-16V256 240c0-8.8-7.2-16-16-16s-16 7.2-16 16v24z"/></svg>
                            <span class="mt-5 font-bold dark:text-white">Bye!</span>
                        </div>
                    @endif
                @else
                    <div class="flex flex-col justify-center items-center w-round h-round shadow-3xl dark:shadow-3xl rounded-full cursor-pointer" id="btnAbsen">
                        <svg id="thumbsUp" xmlns="http://www.w3.org/2000/svg" width="55" viewBox="0 0 384 512"><path d="M64 64V241.6c5.2-1 10.5-1.6 16-1.6H96V208 64c0-8.8-7.2-16-16-16s-16 7.2-16 16zM80 288c-17.7 0-32 14.3-32 32c0 0 0 0 0 0v24c0 66.3 53.7 120 120 120h48c52.5 0 97.1-33.7 113.4-80.7c-3.1 .5-6.2 .7-9.4 .7c-20 0-37.9-9.2-49.7-23.6c-9 4.9-19.4 7.6-30.3 7.6c-15.1 0-29-5.3-40-14c-11 8.8-24.9 14-40 14H120c-13.3 0-24-10.7-24-24s10.7-24 24-24h40c8.8 0 16-7.2 16-16s-7.2-16-16-16H120 80zM0 320s0 0 0 0c0-18 6-34.6 16-48V64C16 28.7 44.7 0 80 0s64 28.7 64 64v82c5.1-1.3 10.5-2 16-2c25.3 0 47.2 14.7 57.6 36c7-2.6 14.5-4 22.4-4c20 0 37.9 9.2 49.7 23.6c9-4.9 19.4-7.6 30.3-7.6c35.3 0 64 28.7 64 64v64 24c0 92.8-75.2 168-168 168H168C75.2 512 0 436.8 0 344V320zm336-64c0-8.8-7.2-16-16-16s-16 7.2-16 16v48 16c0 8.8 7.2 16 16 16s16-7.2 16-16V256zM160 240c5.5 0 10.9 .7 16 2v-2V208c0-8.8-7.2-16-16-16s-16 7.2-16 16v32h16zm64 24v40c0 8.8 7.2 16 16 16s16-7.2 16-16V256 240c0-8.8-7.2-16-16-16s-16 7.2-16 16v24z"/></svg>
                        <span class="mt-5 font-bold dark:text-white">{{ ucwords($userAbsen->status) }}</span>
                    </div>
                @endif
            @else
                <div class="flex flex-col justify-center items-center w-round h-round shadow-3xl dark:shadow-3xl rounded-full cursor-pointer" id="btnAbsen" onclick="absen()">
                    <svg id="thumbsUp" xmlns="http://www.w3.org/2000/svg" width="55" viewBox="0 0 384 512"><path d="M64 64V241.6c5.2-1 10.5-1.6 16-1.6H96V208 64c0-8.8-7.2-16-16-16s-16 7.2-16 16zM80 288c-17.7 0-32 14.3-32 32c0 0 0 0 0 0v24c0 66.3 53.7 120 120 120h48c52.5 0 97.1-33.7 113.4-80.7c-3.1 .5-6.2 .7-9.4 .7c-20 0-37.9-9.2-49.7-23.6c-9 4.9-19.4 7.6-30.3 7.6c-15.1 0-29-5.3-40-14c-11 8.8-24.9 14-40 14H120c-13.3 0-24-10.7-24-24s10.7-24 24-24h40c8.8 0 16-7.2 16-16s-7.2-16-16-16H120 80zM0 320s0 0 0 0c0-18 6-34.6 16-48V64C16 28.7 44.7 0 80 0s64 28.7 64 64v82c5.1-1.3 10.5-2 16-2c25.3 0 47.2 14.7 57.6 36c7-2.6 14.5-4 22.4-4c20 0 37.9 9.2 49.7 23.6c9-4.9 19.4-7.6 30.3-7.6c35.3 0 64 28.7 64 64v64 24c0 92.8-75.2 168-168 168H168C75.2 512 0 436.8 0 344V320zm336-64c0-8.8-7.2-16-16-16s-16 7.2-16 16v48 16c0 8.8 7.2 16 16 16s16-7.2 16-16V256zM160 240c5.5 0 10.9 .7 16 2v-2V208c0-8.8-7.2-16-16-16s-16 7.2-16 16v32h16zm64 24v40c0 8.8 7.2 16 16 16s16-7.2 16-16V256 240c0-8.8-7.2-16-16-16s-16 7.2-16 16v24z"/></svg>
                    <span class="mt-5 dark:text-white">Click In!</span>
                </div>
            @endif

            <div class="flex items-end text-sm text-center dark:text-white" style="margin-top: 1.5rem">
                <span><svg id="mapMarker" xmlns="http://www.w3.org/2000/svg" width="15" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
                </span>&nbsp;
                Location:&nbsp;<span id="koordinates"></span>
            </div>
            {{-- <div class="flex">
                <i class="fi fi-br-time-check text-2xl"></i>
                <i class="fi fi-br-time-check text-2xl"></i>
                <i class="fi fi-br-time-check text-2xl"></i>
            </div> --}}
            <form id="formLogout" action="{{ route('logoutUser') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary">Logout</button>
            </form>
        </div>
    </div>
    <script>
        function sweetalert(icon, title, text) {
            Swal.fire({
                icon: `${icon}`,
                title: `${title}`,
                text: `${text}`,
            })
        }

        document.getElementById('btnAbsen').addEventListener('mousedown', function () {
            this.classList.remove('shadow-3xl');
            this.classList.remove('dark:shadow-3xl');
        });
        document.getElementById('btnAbsen').addEventListener('mouseup', function () {
            this.classList.add('shadow-3xl');
            this.classList.add('dark:shadow-3xl');
        });

        window.setTimeout(function(){ document.getElementById('btnAbsen').removeAttribute('disabled') }, 5000);

        getLocation();

        function getLocation() {
            document.getElementById('lat').value = null;
            document.getElementById('lng').value = null;

            if (navigator.geolocation) {

                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                alert('Geolocation tidak didukung oleh peramban ini');
            }
        }

        function showPosition(position) {
            var lat = position.coords.latitude;
            var lng = position.coords.longitude;

            document.getElementById('lat').value = lat;
            document.getElementById('lng').value = lng;
            document.getElementById('koordinates').innerHTML = lat + ', ' + lng;
        }

        function loading(show) {
            var element = document.getElementById("overflowLoading");
            if (show) {
                element.classList.remove('hidden');
            } else {
                element.classList.add('hidden');
            }
        }

        function absen() {
            loading(true)
            axios({
                    method: 'post',
                    url: '/absen',
                    data: {
                        lat: document.getElementById('lat').value,
                        lng: document.getElementById('lng').value,
                    }
                })
                .then(function(response) {
                    loading(false)
                    if (response.data.status == "OK") {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: response.data.message,
                        })
                        .then((result) => {
                            if (result.isConfirmed) {
                                location.reload();
                            }
                        })
                    } else {
                        sweetalert(response.data.status, 'Error', response.data.message)
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
                        sweetalert('error', 'Error', alertMessage)
                    } else {
                        sweetalert('error', 'Error', "Unknown Error")
                    }
                });
        }

        function absenKeluar() {
            loading(true)
            axios({
                    method: 'post',
                    url: '/absenKeluar',
                    data: {
                        lat: document.getElementById('lat').value,
                        lng: document.getElementById('lng').value,
                    }
                })
                .then(function(response) {
                    loading(false)
                    if (response.data.status == "OK") {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: response.data.message,
                        })
                        .then((result) => {
                            if (result.isConfirmed) {
                                location.reload();
                            }
                        })
                    } else {
                        sweetalert(response.data.status, 'Error', response.data.message)
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
                        sweetalert('error', 'Error', alertMessage)
                    } else {
                        sweetalert('error', 'Error', "Unknown Error")
                    }
                });
        }

        function updateTime() {
            const now = new Date();
            const hours = now.getHours().toString().padStart(2, '0');
            const minutes = now.getMinutes().toString().padStart(2, '0');
            document.getElementById('time').textContent = `${hours}:${minutes}`;
        }
        updateTime();
        setInterval(updateTime, 1000);
        
        const now = new Date();
        const day = now.getDate().toString().padStart(2, '0');
        const dayOfWeek = now.getDay();
        const month = now.getMonth();

        const days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
        const months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'];

        document.getElementById('currentDate').textContent = `${days[dayOfWeek]}, ${months[month]} ${day}`;

        var thumbsUp  = document.getElementById('thumbsUp');
        var mapMarker = document.getElementById('mapMarker');

        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
            thumbsUp.setAttribute('fill', '#eaeaea');
            mapMarker.setAttribute('fill', '#eaeaea');
        } else {
            document.documentElement.classList.remove('dark')
            thumbsUp.setAttribute('fill', '#000000');
            mapMarker.setAttribute('fill', '#000000');
        }

        var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            themeToggleLightIcon.classList.remove('hidden');
            thumbsUp.setAttribute('fill', '#eaeaea');
            mapMarker.setAttribute('fill', '#eaeaea');
        } else {
            themeToggleDarkIcon.classList.remove('hidden');
            thumbsUp.setAttribute('fill', '#000000');
            mapMarker.setAttribute('fill', '#000000');
        }

        var themeToggleBtn = document.getElementById('theme-toggle');

        themeToggleBtn.addEventListener('click', function() {
            themeToggleDarkIcon.classList.toggle('hidden');
            themeToggleLightIcon.classList.toggle('hidden');

            if (localStorage.getItem('color-theme')) {
                if (localStorage.getItem('color-theme') === 'light') {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                    thumbsUp.setAttribute('fill', '#eaeaea');
                    mapMarker.setAttribute('fill', '#eaeaea');
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                    thumbsUp.setAttribute('fill', '#000000');
                    mapMarker.setAttribute('fill', '#000000');
                }
            } else {
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                    thumbsUp.setAttribute('fill', '#000000');
                    mapMarker.setAttribute('fill', '#000000');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                    thumbsUp.setAttribute('fill', '#eaeaea');
                    mapMarker.setAttribute('fill', '#eaeaea');
                }
            }

        });
    </script>
    <script src="/js/app.js"></script>
</body>
</html>