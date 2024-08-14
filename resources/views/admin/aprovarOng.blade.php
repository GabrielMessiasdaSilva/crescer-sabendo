<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprovar ONG - Admin</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
    <script src=" {{ asset('js/script.js') }} "></script>

    @vite('resources/css/app.css')

</head>

<body class="bg-gray-100 overflow-x-hidden">
    <header class="bg-white  ">
        <div class="flex items-center justify-between ">
            <div id="logo" class="flex items-center p-5 bg-customBlue2 rounded-br-only">
                <p id="plogo" class="text-white font-itim text-5xl px-10">ADM</p>
            </div>

            <nav id="navbar" class="hidden  md:flex items-center space-x-12 gap-14">
                <a href="/admin" class="text-customBlue  text-2xl font-itim hover:text-blue-700 hover:underline hover:pb-3 ">Geral</a>
                <a href="#" class="text-blue-600 text-2xl font-itim hover:text-blue-700 hover:underline hover:pb-3 ">Aprovar ONG's</a>
            </nav>

            <div id="userAction" class="hidden md:flex items-center space-x-2 mr-3 ">
                <a href="#" class="text-gray-600 hover:text-blue-700 ">
                    <img id="userImg" class="h-10 mr-2" src="{{ asset('images/icons/userIconBlue.png') }}" alt="">
                </a>
            </div>

            <div id="mobile-nav" class="md:hidden mr-5 ">
                <button id="mobile-menu-toggle" class="focus:outline-none">
                    <img class="h-10" src="{{ asset('images/icons/taskbarBlue.png') }}" alt="">
                </button>
            </div>

        </div>


        <div id="mobile-menu" class="hidden bg-white  py-2 px-4 ">
            <a href="/admin" class="block text-customBlue2  text-lg font-itim py-2 ">Geral</a>
            <a href="" class="block text-blue-700  text-lg font-itim py-2">Aprovar ONG's</a>
        </div>
    </header>
    <h2 class=" text-gray-500 text-xl mt-10  md:text-3xl  text-center mb-4">Aprovar ONGs</h2>
    <!-- Tabela de Gerenciamento -->
    <div class="flex justify-center mx-auto  rounded-lg  p-6">

        <div class="overflow-x-auto overflow-y-auto max-h-[400px]">
            <table class=" bg-white">
                <thead>
                    <tr class="bg-customBlue2 border border-black text-left">
                        <th class="py-2 px-4 text-white">ONG</th>
                        <th class="py-2 px-4 text-white">Email</th>
                        <th class="py-2 px-4 text-center text-white">Opções</th>
                    </tr>
                </thead>
                <tbody class="border border-black">
                    <tr class="border-b">
                        <td class="py-2 px-4">ONG</td>
                        <td class="py-2 px-4">Email</td>
                        <td class="py-2 px-4 text-center">
                            <button class="text-gray-500" onclick="toggleModal('modal')">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>
                            </button>
                            <button class=" px-1  rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-green-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                            </button>
                            <button class="   rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-red-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 px-4">ONG</td>
                        <td class="py-2 px-4">Email</td>
                        <td class="py-2 px-4 text-center">
                            <button class="text-gray-500" onclick="toggleModal('modal')">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>
                            </button>
                            <button class=" px-1  rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-green-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                            </button>
                            <button class="   rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-red-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 px-4">ONG</td>
                        <td class="py-2 px-4">Email</td>
                        <td class="py-2 px-4 text-center">
                            <button class="text-gray-500" onclick="toggleModal('modal')">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>
                            </button>
                            <button class=" px-1  rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-green-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                            </button>
                            <button class="   rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-red-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 px-4">ONG</td>
                        <td class="py-2 px-4">Email</td>
                        <td class="py-2 px-4 text-center">
                            <button class="text-gray-500" onclick="toggleModal('modal')">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>
                            </button>
                            <button class=" px-1  rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-green-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                            </button>
                            <button class="   rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-red-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4">ONG</td>
                        <td class="py-2 px-4">Email</td>
                        <td class="py-2 px-4 text-center">
                            <button class="text-gray-500" onclick="toggleModal('modal')">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>
                            </button>
                            <button class=" px-1  rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-green-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                            </button>
                            <button class="   rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-red-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div id="modal" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center hidden">
        <div class="bg-white rounded-lg shadow-lg h-101  p-6 w-80 md:w-2/6 mx-4 flex flex-col">
            <h2 class="text-2xl  translate-y-7 mb-4 text-center">Crescer Sabendo</h2>
            <div class="flex flex-col mt-10 gap-6">
                <button class="bg-customBlue2 text-white py-2 rounded-xl hover:bg-blue-500">Ver Página da ONG</button>
                <button class="bg-customBlue2 text-white py-2 rounded-xl hover:bg-blue-500" onclick="toggleModal('modal-dados', 'modal')">Dados de Contato</button>

            </div>
            <div class="mt-auto">
                <button class="w-full py-2 rounded-xl border border-gray-300 text-gray-700" onclick="toggleModal('modal')">Fechar</button>
            </div>
        </div>
    </div>
    <div id="modal-dados" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center hidden">
        <div class="bg-white rounded-lg shadow-lg h-101  p-6 w-80 md:w-2/6 mx-4 flex flex-col">
            <h2 class="text-2xl  mb-4 text-center">Nome ONG</h2>
            <div class="flex flex-col space-y-2 ">
                <h2 class="text-xl">Email</h2>
                <p>Exemplo</p>
                <h2 class="text-xl">Telefone</h2>
                <p>Exemplo</p>
                <h2 class="text-xl">Telefone 2</h2>
                <p>Exemplo</p>
                <h2 class="text-xl">Endereço</h2>
                <p>Exemplo</p>

            </div>
            <div class="mt-auto">
                <button class="w-full py-2 rounded-xl border border-gray-300 text-gray-700" onclick="toggleModal('modal-dados')">Fechar</button>
            </div>
        </div>
    </div>

    <footer class="w-full mt-auto">
        <img class="w-full h-auto" src="{{ asset('images/footerBlue.png') }}" alt="">
    </footer>
</body>

</html>