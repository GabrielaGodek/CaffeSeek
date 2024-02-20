<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        bg: "#F3EEEA",
                        bg_second: "#EBE3D5",
                        primary: "#776B5D",
                        secondary: "#B0A695",
                        detail: "#39604c",
                        detail_second: "#5b796a",
                        error: "#FF0000",
                    },
                },
            },
        };
    </script>
    <title>Coffee Seek</title>
</head>

<body>
    <div class="bg-bg pb-6 sm:pb-8 lg:pb-12">
        <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
            <header class="flex items-center justify-between py-4 md:py-4">
                <a href="/"
                    class="inline-flex items-center w-40 md:w-48 text-2xl font-bold text-black md:text-3xl"
                    aria-label="logo">
                    <img src="{{ asset('logo.png') }}" alt="CoffeeSeek">
                </a>
                <nav class=" gap-2 flex">
                    @auth
                        
                        <div class="flex">
                            <a href="/"
                                class="flex items-center justify-center w-28 text-lg font-semibold text-black md:w-32">
                                <lord-icon src="https://cdn.lordicon.com/cnpvyndp.json" target=".nav-home" trigger="hover"
                                    delay="200" style="width:25px;height:25px;">
                                </lord-icon>
                                <span class="inline-block float-right nav nav-home">Home</span>
                            </a>
                        </div>
                        <form action="/logout" method="POST"
                            class="flex items-center justify-center w-28 text-lg font-semibold text-black md:w-32">
                            @csrf
                            <lord-icon src="https://cdn.lordicon.com/nqtddedc.json" trigger="hover"
                                style="width:25px;height:25px">
                            </lord-icon>
                            <button type="submit">
                                Logout
                            </button>
                        </form>
                    @else
                        <div class="flex">
                            <a href="/"
                                class="flex items-center justify-center w-28 text-lg font-semibold text-black md:w-32">
                                <lord-icon src="https://cdn.lordicon.com/cnpvyndp.json" target=".nav-home" trigger="hover"
                                    delay="200" style="width:25px;height:25px;">
                                </lord-icon>
                                <span class="inline-block float-right nav nav-home">Home</span>
                            </a>
                        </div>
                        <div class="flex">
                            <a href="register"
                                class="flex items-center justify-center w-28 text-lg font-semibold text-black md:w-32">
                                <lord-icon src="https://cdn.lordicon.com/kthelypq.json" target=".nav-login" trigger="hover"
                                    delay="200" style="width:25px;height:25px;">
                                </lord-icon>
                                <span class="ml-1 nav nav-login">Register</span>
                            </a>
                        </div>

                    @endauth
                </nav>

            </header>
            <main>{{ $slot }}</main>
            <div class=" pt-4 sm:pt-10 lg:pt-12">
                <footer class="mx-auto max-w-screen-2xl px-4 md:px-8">
                    <div class="flex flex-col items-center justify-between gap-4 border-t border-b py-6 md:flex-row">
                        <nav class="flex flex-wrap justify-center gap-x-4 gap-y-2 md:justify-start md:gap-6">
                            <a href="/"
                                class="text-gray-500 transition duration-100 hover:text-primary-500 active:text-primary-600">Home</a>
                            <a href="https://github.com/GabrielaGodek/CaffeSeek"
                                class="text-gray-500 transition duration-100 hover:text-primary-500 active:text-primary-600">View
                                source code</a>
                        </nav>
                        <div class="flex gap-4">


                            <a href="https://www.linkedin.com/in/gabrielagodek/" target="_blank"
                                class="text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600">
                                <svg class="h-5 w-5" width="24" height="24" viewBox="0 0 24 24"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                </svg>
                            </a>

                            <a href="https://github.com/GabrielaGodek" target="_blank"
                                class="text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600">
                                <svg class="h-5 w-5" width="24" height="24" viewBox="0 0 24 24"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                                </svg>
                            </a>
                        </div>

                    </div>
                    <div class="py-8 text-center text-sm text-gray-400"><a href="https://lordicon.com/">Icons by
                            Lordicon.com</a></div>

                </footer>
            </div>
        </div>
    </div>
    @vite(['resources/js/app.js'])
    <script src="https://cdn.lordicon.com/lordicon.js"></script>
</body>

</html>
