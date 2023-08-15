<head>
    <title>FusionAuth & Laravel API</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite('resources/css/app.css')

    <style>
        pre {
            white-space: pre-wrap;
        }

        .text-center {
            text-align: center;
        }

        .mb-3 {
            margin-bottom: 0.755rem;
        }

        .px-4 {
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .py-3 {
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
        }

    </style>
</head>

<body class="antialiased">
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dotted-spacing-10 bg-dotted-gray-600 bg-center bg-[#111827] selection:bg-red-500 selection:text-white">

        <div class="max-w-7xl mx-auto p-6 lg:p-8">

            <div class="flex flex-col mt-16 justify-center items-center">
                @if(session('error'))
                <div class="alert alert-danger">
                    {!! session('error') !!}
                </div>
                @endif
                @auth
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                    <div
                        class="scale-100 p-6 bg-gray-200 rounded-md bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-10 border border-gray-100">

                        <div class="flex items-center">
                            <div
                                class="h-16 w-16 bg-red-50 bg-red-800/20 flex items-center justify-center rounded-full">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="w-7 h-7 stroke-red-500">

                                    <path
                                        d="M16 15H8C5.79086 15 4 16.7909 4 19V21H20V19C20 16.7909 18.2091 15 16 15Z" />

                                    <path
                                        d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z" />
                                </svg>
                            </div>

                            <h2 class="ml-4 text-xl font-semibold text-white">
                                Hello, {{ auth()->user()->name }}
                            </h2>
                        </div>
                    </div>

                    <div
                        class="scale-100 p-6 bg-gray-200 rounded-md bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-10 border border-gray-100">

                        <div class="flex items-center">
                            <div
                                class="h-16 w-16 bg-red-50 bg-red-800/20 flex items-center justify-center rounded-full">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                    stroke-linecap="round" stroke-linejoin="round" class="w-7 h-7 stroke-red-500">

                                    <path
                                        d="M17.98 10.79V14.79C17.98 15.05 17.97 15.3 17.94 15.54C17.71 18.24 16.12 19.58 13.19 19.58H12.79C12.54 19.58 12.3 19.7 12.15 19.9L10.95 21.5C10.42 22.21 9.56 22.21 9.03 21.5L7.82999 19.9C7.69999 19.73 7.41 19.58 7.19 19.58H6.79001C3.60001 19.58 2 18.79 2 14.79V10.79C2 7.86001 3.35001 6.27001 6.04001 6.04001C6.28001 6.01001 6.53001 6 6.79001 6H13.19C16.38 6 17.98 7.60001 17.98 10.79Z"
                                        stroke-width="1.5" stroke-miterlimit="10" />
                                    <path
                                        d="M21.98 6.79001V10.79C21.98 13.73 20.63 15.31 17.94 15.54C17.97 15.3 17.98 15.05 17.98 14.79V10.79C17.98 7.60001 16.38 6 13.19 6H6.79004C6.53004 6 6.28004 6.01001 6.04004 6.04001C6.27004 3.35001 7.86004 2 10.79 2H17.19C20.38 2 21.98 3.60001 21.98 6.79001Z"
                                        stroke-width="1.5" stroke-miterlimit="10" />

                                    <path d="M13.4955 13.25H13.5045" stroke-width="2" />

                                    <path d="M9.9955 13.25H10.0045" stroke-width="2" />

                                    <path d="M6.4955 13.25H6.5045" stroke-width="2" />
                                </svg>
                            </div>

                            <h2 class="ml-4 text-xl font-semibold text-white">
                                It's Me
                            </h2>
                        </div>
                    </div>
                    
                </div>

                <div class="flex space-x-4 mt-8">
                
                    <button class="w-48 px-4 py-3 bg-gray-100 rounded-full shadow-2xl text-center">
                        <a href="/logout">
                            Log out
                        </a>
                    </button>

                    <button class="w-48 px-4 py-3 bg-gray-100 rounded-full shadow-2xl text-center">
                        <a href="http://localhost/dashboard">
                            Go To Dashboard
                        </a>
                    </button>

                    @else
                    {{-- <button class="w-48 px-4 py-3 bg-gray-100 rounded-full shadow-2xl text-center">
                        <a href="{{ $loginUrl }}">
                            Login
                        </a>
                    </button> --}}

                    
                    @endauth
                </div>
            </div>
        </div>
    </div>

    @auth
        <script src="/js/fusionauth.js"></script>
        {{-- <script>FusionAuth("{{ $baseUrl }}");</script> --}}
    @endauth
</body>
