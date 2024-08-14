<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ONGS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <script src=" {{ asset('js/script.js') }} "></script>
    @vite('resources/css/app.css')

</head>


<body class="bg-gray-100 overflow-x-hidden margin-auto">
    <!-- Header  -->
    <header class="bg-white  ">
        <div class="flex items-center justify-between ">
            <div id="logo" class="flex items-center border bg-customYellow rounded-br-only">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class=" pl-5 pb-2 pr-7 pt-1">
            </div>

            <nav id="navbar" class="hidden  md:flex items-center space-x-12 gap-14">
                <a href="/"
                    class="text-customBlue  text-2xl font-itim hover:text-yellow-600 hover:underline hover:pb-3 ">Home</a>
                <a href="/#aboutus"
                    class="text-customBlue text-2xl font-itim hover:text-yellow-600 hover:underline hover:pb-3">Sobre
                    nós</a>
                <a href="#"
                    class="text-customYellow text-2xl font-itim hover:text-yellow-600 hover:underline hover:pb-3">ONG's</a>
                <a href="#"
                    class="text-customBlue text-2xl font-itim hover:text-yellow-600 hover:underline hover:pb-3">Doações</a>
                <a href="#contactus"
                    class="text-customBlue text-2xl font-itim hover:text-yellow-600 hover:underline hover:pb-3">Fale
                    Conosco</a>

            </nav>

            <div id="userAction" class="hidden md:flex items-center space-x-2 mr-3 ">
                <a href="{{ url('/signin') }}" class="text-gray-600 hover:text-yellow-600 ">
                    <img id="userImg" class="h-10 mr-2" src="{{ asset('images/icons/userIconYellow.png') }}" alt="">
                </a>
                <a id="button" href="{{ url('/signup')}}"
                    class="bg-customYellow ml-3 font-itim text-xl text-white px-3 py-1 rounded-full hover:bg-yellow-500">Sign
                    up</a>
            </div>

            <div id="mobile-nav" class="md:hidden ml-5 mr-5 ">
                <button id="mobile-menu-toggle" class="focus:outline-none">
                    <img class="h-10" src="{{ asset('images/icons/taskbarRed.png') }}" alt="">
                </button>
            </div>
        </div>


        <div id="mobile-menu" class="hidden bg-white  py-2 px-4 ">
            <a href="{{ url('/home')}}#home"
                class="text-customYellow text-lg font-itim py-2  hover:text-yellow-600">Home</a>
            <a href="#aboutus" class="block text-customBlue text-lg font-itim py-2  hover:text-yellow-600">Sobre nós</a>
            <a href="#sponsors" class="block text-customBlue text-lg font-itim py-2 hover:text-yellow-600">ONG's</a>
            <a href="{{ url('/donates')}}#doacao"
                class="block text-customBlue text-lg font-itim py-2 hover:text-yellow-600">Doações</a>
            <a href="#contactus" class="block text-customBlue text-lg font-itim py-2 hover:text-yellow-600">Fale
                Conosco</a>
            <a href="{{ url('/signin') }}"
                class="block  text-customBlue text-lg font-itim py-2 hover:text-yellow-600">Entrar</a>
            <a href="{{ url('/signup')}}"
                class="block  text-customBlue text-lg font-itim py-2 hover:text-yellow-600">Registrar-se</a>
        </div>
    </header>
    <!-- End Header -->

    <!-- Where I am -->
    <div id="home"
        class=" w-screen h-screen flex justify-center items-center bg-[url('/public/images/backContent-Yellow.png')] bg-no-repeat bg-cover overflow-hidden">
        <!-- Overlay Div -->

        <div class="bg-white w-dados mx-4 h-101 rounded-3xl shadow-2xl p-5">
            <div class="w-full h-full flex flex-col justify-center items-center">
                <div class=" w-full flex flex-col p-4">
                    <h1 class="text-black text-2xl lg:text-6xl sm:text-5xl font-itim mb-4 text-center">Encontre ONGs que
                        transformam vidas através da
                        educação
                        infantil.</h1>
                    <p class="text-black text-lg lg:5xl sm:text-3xl font-itim text-center">Conectando você a projetos
                        que moldam o amanhã
                        perto
                        da sua casa.</p>
                </div>
                <div class="flex items-center justify-center flex-col sm:flex-row  max-w-md mx-4">
                    <label class="relative block w-full mb-4 md:mb-0">
                        <span class="sr-only">Search</span>
                        <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                            <svg class="h-5 w-5 fill-slate-300" viewBox="0 0 50 40">
                                <image xlink:href="{{ asset('images/icons/iconHouse.svg') }}" alt="Logo" class="w-12">
                                </image>
                            </svg>
                        </span>
                        <input
                            class="block bg-gray-100 w-full border-2 border-customYellow rounded-full py-2 pl-9 pr-3 lg:pr-20 shadow appearance-none text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            placeholder="Onde você está?" type="text" name="search" />
                    </label>
                    <button
                        class="w-full md:w-40 h-10 bg-customYellow hover:bg-yellow-500 rounded-full font-bold md:ml-2">Pesquisar</button>
                </div>


            </div>
        </div>
    </div>

    <!-- End Where I am  -->


    <!-- Approaches -->
    <div class="container mx-auto p-6 justify-center ">
        <div class="flex justify-center align-center mb-20  p-14  w-full max-h-xl text-center">
            <p class="text-4xl md:text-7xl font-itim mb-4  ">Algumas das diferentes abordagens presente nas
                ONGs.</p>
        </div>
        <div id="gridCourses" class="grid grid-cols-1 md:grid-cols-6 gap-4 sm:gap-y-12">
            <div class="bg-customGreen2 shadow-xl rounded-lg  w-40 h-40 mx-auto items-end justify-center mb-8 sm:mb-12">
                <img src="{{ asset('images/Artes.png') }}" alt="" class="relative inset-0  object-cover items-end">
                <div class="flex justify-center items-center">
                    <p class="text-gray-700 text-lg font-itim my-5">Artes</p>
                </div>
            </div>
            <div class="bg-customGreen2 shadow-xl rounded-lg  w-40 h-40 mx-auto items-end justify-center mb-8 sm:mb-12">
                <img src="{{ asset('images/Esporte.png') }}" alt="" class="relative inset-0  object-cover items-end">
                <div class="flex justify-center items-center">
                    <p class="text-gray-700 text-lg font-itim my-5">Esporte</p>
                </div>
            </div>
            <div class="bg-customGreen2 shadow-xl rounded-lg  w-40 h-40 mx-auto items-end justify-center mb-8 sm:mb-12">
                <img src="{{ asset('images/Danca.png') }}" alt="" class="relative inset-0  object-cover items-end">
                <div class="flex justify-center items-center">
                    <p class="text-gray-700 text-lg font-itim my-5">Dança</p>
                </div>
            </div>
            <div class="bg-customGreen2 shadow-xl rounded-lg  w-40 h-40 mx-auto items-end justify-center mb-8 sm:mb-12">
                <img src="{{ asset('images/Comunicação.png') }}" alt=""
                    class="relative inset-0  object-cover items-end">
                <div class="flex justify-center items-center">
                    <p class="text-gray-700 text-lg font-itim my-5">Comunicação</p>
                </div>
            </div>
            <div class="bg-customGreen2 shadow-xl rounded-lg  w-40 h-40 mx-auto items-end justify-center mb-8 sm:mb-12">
                <img src="{{ asset('images/Numeros.png') }}" alt="" class="relative inset-0  object-cover items-end">
                <div class="flex justify-center items-center">
                    <p class="text-gray-700 text-lg font-itim my-5">Números</p>
                </div>
            </div>
            <div class="bg-customGreen2 shadow-xl rounded-lg  w-40 h-40 mx-auto items-end justify-center mb-8 sm:mb-12">
                <img src="{{ asset('images/Linguagem.png') }}" alt="" class="relative inset-0  object-cover items-end">
                <div class="flex justify-center items-center">
                    <p class="text-gray-700 text-lg font-itim my-5">Linguagem</p>
                </div>
            </div>
        </div>
    </div>
    <!-- END Approaches -->

    <!--Positives Points-->
    <div id="gridCourses" class="grid grid-cols-1 md:grid-cols-3 gap-y-12 my-28">
        <div class="bg-customGreen2 shadow-xl rounded-3xl  w-80 h-40 mx-auto items-center">
            <div class="flex mt-5 ml-5">
                <p class="font-itim font-bold text-3xl"> Alfabetização</p>
            </div>
            <div class="flex flex-wrap justify-between mt-2 ml-5">
                <div class="w-1/2 flex items-end h-20">
                    <a href="#" class="font-itim text-base py-2 px-2"> Saiba mais.</a>
                </div>
                <div class="w-1/2 flex justify-end items-end">
                    <img src="{{ asset('images/book.png') }}" alt="" class="object-cover w-36 h-36">
                </div>
            </div>
        </div>
        <div class="bg-customGreen2 shadow-xl rounded-3xl  w-80 h-40 mx-auto items-center">
            <div class="flex mt-2 ml-5 w-20">
                <p class="font-itim font-bold text-3xl"> Inclusão Educacional</p>
            </div>
            <div class="flex flex-wrap justify-between mt-2 ml-5">
                <div class="w-1/2 flex items-end h-16">
                    <a href="#" class="font-itim text-base py-2 px-2"> Saiba mais.</a>
                </div>
                <div class="w-1/2 flex justify-end items-end">
                    <img src="{{ asset('images/hand.png') }}" alt="" class="object-cover w-36 h-36">
                </div>
            </div>
        </div>
        <div class="bg-customGreen2 shadow-xl rounded-3xl w-80 h-40 mx-auto flex items-center">
            <div class="w-1/2 pl-5">
                <p class="font-itim font-bold text-2xl" style="word-break: break-all; white-space: normal;">
                    Apoio a <br>Professores e<br> Educadores
                </p>
                <a href="#" class="font-itim text-base py-2 px-2"> Saiba mais.</a>
            </div>
            <div class="w-1/2 pr-5">
                <img src="{{ asset('images/teacher.png') }}" alt="" class="object-cover w-36 h-36">
            </div>
        </div>
    </div>
    <!--end Positives Points -->

    <!-- Divider Point -->
    <div class="w-full h-16 bg-gray-100"></div>
    <!-- END Divider Point -->

    <!--Rating-->
    <div class="flex flex-col w-screen h-screen sm:w-full sm:h-full md:mb-20 mb-44">
        <div class=" my-14 mx-10 max-w-full">
            <p class="font-itim font-bold text-4xl">ONGs que priorizam a inclusão</p>
        </div>
        <div id="gridCourses"
            class="grid grid-cols-1 md:grid-cols-3 spaced-items gap-5 h-screen w-screen sm:w-full sm:h-full">

            <div class="flex items-center justify-center gap-4  ">
                <div class="w-24 h-20 border border-gray-300 rounded">
                    <!-- Espaço para a foto -->
                </div>
                <div class="flex flex-col justify-center w-40">
                    <h3 class="font-bold text-lg">Crescer Sabendo</h3>
                    <p class="text-gray-600">Alfabetização/Inclusão...</p>


                    <p class="text-gray-500 text-sm mt-1">7h as 19h</p>
                </div>
            </div>

            <div class="flex items-center justify-center gap-4">
                <div class="w-24 h-20 border border-gray-300 rounded">
                    <!-- Espaço para a foto -->
                </div>
                <div class="flex flex-col justify-center w-40">
                    <h3 class="font-bold text-lg">Crescer Sabendo</h3>
                    <p class="text-gray-600">Alfabetização/Inclusão...</p>

                    <p class="text-gray-500 text-sm mt-1">7h as 19h</p>
                </div>
            </div>

            <div class="flex items-center justify-center gap-4">
                <div class="w-24 h-20 border border-gray-300 rounded">
                    <!-- Espaço para a foto -->
                </div>
                <div class="flex flex-col justify-center w-40">
                    <h3 class="font-bold text-lg">Crescer Sabendo</h3>
                    <p class="text-gray-600">Alfabetização/Inclusão...</p>

                    <p class="text-gray-500 text-sm mt-1">7h as 19h</p>
                </div>
            </div>
            <div class="flex items-center justify-center gap-4">
                <div class="w-24 h-20 border border-gray-300 rounded">
                    <!-- Espaço para a foto -->
                </div>
                <div class="flex flex-col justify-center w-40">
                    <h3 class="font-bold text-lg">Crescer Sabendo</h3>
                    <p class="text-gray-600">Alfabetização/Inclusão...</p>

                    <p class="text-gray-500 text-sm mt-1">7h as 19h</p>
                </div>
            </div>
            <div class="flex items-center justify-center gap-4">
                <div class="w-24 h-20 border border-gray-300 rounded">
                    <!-- Espaço para a foto -->
                </div>
                <div class="flex flex-col justify-center w-40">
                    <h3 class="font-bold text-lg">Crescer Sabendo</h3>
                    <p class="text-gray-600">Alfabetização/Inclusão...</p>

                    <p class="text-gray-500 text-sm mt-1">7h as 19h</p>
                </div>
            </div>
            <div class="flex items-center justify-center gap-4">
                <div class="w-24 h-20 border border-gray-300 rounded">
                    <!-- Espaço para a foto -->
                </div>
                <div class="flex flex-col justify-center w-40">
                    <h3 class="font-bold text-lg">Crescer Sabendo</h3>
                    <p class="text-gray-600">Alfabetização/Inclusão...</p>

                    <p class="text-gray-500 text-sm mt-1">7h as 19h</p>
                </div>
            </div>
        </div>
    </div>
    <!--END Rating-->

    <!-- ONGS -->
    <div id="home"
        class="relative w-full h-screen flex flex-col sm:flex-row items-center justify-center bg-[url('/public/images/backContent-Yellow2.png')] bg-no-repeat bg-cover bg-center  ">
        <!-- Texto e Botão -->
        <div
            class="w-full mt-5 sm:w-1/2 flex flex-col justify-center items-center text-center sm:text-left sm:items-center mb-8 sm:mb-0">
            <h1 class="text-4xl sm:text-6xl md:text-8xl font-itim text-black mb-4 ">É uma ONG?</h1>
            <p class=" sm:text-4xl font-serif text-black mb-4">
                Junte-se a nós na<br>
                missão de<br>
                transformar a<br>
                educação infantil.
            </p>
            <button
                class="bg-customGreen2 hover:bg-green-700 text-black font-bold py-2 px-4 rounded-full w-full sm:w-60 md:w-72 h-12 md:h-14 focus:outline-none focus:ring-2 focus:ring-green-500">
                Cadastrar
            </button>
        </div>
        <!-- Imagem -->
        <div class="w-full sm:w-1/2 flex items-center justify-center">
            <img src="{{ asset('images/Child.png') }}" alt="Criança" class="object-cover max-w-full  w-fit sm:h-fit">
        </div>
    </div>
    <!-- End ONGS -->


    <!--ONGS RELACIONATED-->
    <div class="flex flex-col w-full h-full sm:w-full sm:h-full mb-20">
        <div class=" my-14 mx-10 max-w-full">
            <p class="font-itim font-bold text-4xl">As melhores ONGs para alfabetização</p>
        </div>
        <div id="gridCourses" class="grid grid-cols-1 md:grid-cols-4 my-20">
            <div class="flex items-center justify-center gap-4 my-10">
                <div class="border-2 rounded-xl border-gray-400 w-60 h-26 flex justify-center align-center">
                    <div class="flex flex-col justify-center w-40 h-26 ">
                        <img src="{{ asset('images/Casa-Isabel.png') }}" alt=""
                            class="w-full h-full object-cover rounded-xl">
                    </div>
                </div>
            </div>



            <div class="flex items-center justify-center gap-4 my-10">
                <div class="border-2 rounded-xl border-gray-400 w-60 h-26 flex justify-center align-center">
                    <div class="flex flex-col justify-center w-40 h-26 ">
                        <img src="{{ asset('images/Casa-Isabel.png') }}" alt=""
                            class="w-full h-full object-cover rounded-xl">
                    </div>
                </div>
            </div>




            <div class="flex items-center justify-center gap-4 my-10">
                <div class="border-2 rounded-xl border-gray-400 w-60 h-26 flex justify-center align-center">
                    <div class="flex flex-col justify-center w-40 h-26 ">
                        <img src="{{ asset('images/Casa-Isabel.png') }}" alt=""
                            class="w-full h-full object-cover rounded-xl">
                    </div>
                </div>
            </div>




            <div class="flex items-center justify-center gap-4 my-10">
                <div class="border-2 rounded-xl border-gray-400 w-60 h-26 flex justify-center align-center">
                    <div class="flex flex-col justify-center w-40 h-26 ">
                        <img src="{{ asset('images/Casa-Isabel.png') }}" alt=""
                            class="w-full h-full object-cover rounded-xl">
                    </div>
                </div>
            </div>




            <div class="flex items-center justify-center gap-4 my-10">
                <div class="border-2 rounded-xl border-gray-400 w-60 h-26 flex justify-center align-center">
                    <div class="flex flex-col justify-center w-40 h-26 ">
                        <img src="{{ asset('images/Casa-Isabel.png') }}" alt=""
                            class="w-full h-full object-cover rounded-xl">
                    </div>
                </div>
            </div>


            <div class="flex items-center justify-center gap-4 my-10">
                <div class="border-2 rounded-xl border-gray-400 w-60 h-26 flex justify-center align-center">
                    <div class="flex flex-col justify-center w-40 h-26 ">
                        <img src="{{ asset('images/Casa-Isabel.png') }}" alt=""
                            class="w-full h-full object-cover rounded-xl">
                    </div>
                </div>
            </div>


            <div class="flex items-center justify-center gap-4 my-10">
                <div class="border-2 rounded-xl border-gray-400 w-60 h-26 flex justify-center align-center">
                    <div class="flex flex-col justify-center w-40 h-26 ">
                        <img src="{{ asset('images/Casa-Isabel.png') }}" alt=""
                            class="w-full h-full object-cover rounded-xl">
                    </div>
                </div>
            </div>


            <div class="flex items-center justify-center gap-4 my-10">
                <div class="border-2 rounded-xl border-gray-400 w-60 h-26 flex justify-center align-center">
                    <div class="flex flex-col justify-center w-40 h-26 ">
                        <img src="{{ asset('images/Casa-Isabel.png') }}" alt=""
                            class="w-full h-full object-cover rounded-xl">
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--END ONGS RELACIONATED-->


    <!--Partner-->
    <div id="home"
        class="relative w-full h-screen flex flex-col sm:flex-row items-center justify-center bg-[url('/public/images/backContent-Green.png')]  bg-no-repeat bg-cover bg-center overflow-hidden">
        <!-- Texto e Botão -->
        <div
            class="w-full sm:w-1/2 flex flex-col justify-center items-center text-center sm:text-left sm:items-center mb-8 sm:mb-0">
            <h1 class="text-3xl sm:text-5xl md:text-6xl font-itim text-black mb-4 leading-tight">QUER AJUDAR?</h1>
            <p class="text-base sm:text-2xl font-serif text-black mb-4 leading-snug">
                Encontre e apoie ONGs<br>
                comprometidas com a<br>
                educação das futuras<br>
                gerações.
            </p>
            <button
                class="bg-customYellow hover:bg-green-800 text-black font-bold py-2 px-4 rounded-full w-full sm:w-60 h-14">
                Seja parceiro
            </button>
        </div>
        <!-- Imagem -->
        <div class="w-full sm:w-1/2 flex items-center justify-center p-4 sm:p-8">
            <img src="{{ asset('images/Co-workers.png') }}" alt="Co-work"
                class="object-contain w-full sm:w-auto h-auto max-w-xs sm:max-w-full">
        </div>
    </div>




    <!--end Partner-->

    <!--Call with US -->
    <div id="   contactus" class="flex flex-col sm:flex-row my-20 w-screen h-full">
        <!-- Text -->
        <div class=" w-full h-full sm:w-1/2 flex justify-center items-center ">
            <div class="w-2/3">
                <h1 class="text-3xl font-itim mb-4 text-start">Entre em contato</h1>
                <p class="text-black text-xl  font-itim mb-4"> Se você tiver dúvidas, sugestões ou reclamações sobre
                    o
                    site,
                    entre em contato conosco pelo e-mail xxxxx@gmail.com. Para dúvidas relacionadas a uma das
                    organizações,
                    consulte as informações de contato disponíveis na página de perfil de cada ONG.
                </p>
            </div>
        </div>
        <!-- Form -->
        <div class=" w-full h-full sm:w-1/2 flex justify-center items-center ">
            <div class="w-2/3">
                <form>
                    <div class="mb-4">
                        <label for="nome" class="block text-gray-700 text-sm font-bold mb-2">Nome</label>
                        <input type="text" id="nome" name="nome"
                            class="shadow appearance-none border-4 rounded-full border-customYellow w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                        <input type="email" id="email" name="email"
                            class="shadow appearance-none border-4 rounded-full border-customYellow w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="mb-4">
                        <label for="assunto" class="block text-gray-700 text-sm font-bold mb-2">Assunto</label>
                        <input type="text" id="assunto" name="assunto"
                            class="shadow appearance-none border-4 rounded-full border-customYellow w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="mb-4">
                        <label for="mensagem" class="block text-gray-700 text-sm font-bold mb-2">Sua
                            mensagem</label>
                        <textarea
                            class="mt-1 block w-full border-4 border-customYellow  rounded-xl px-6 py-3"></textarea>
                    </div>
                    <button type="submit"
                        class="bg-customYellow hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded-full focus:outline-none focus-shadow-outline">Enviar</button>
                </form>
            </div>
        </div>
    </div>
    <!--END CALL of US-->

    <footer>
        <div class="max-w-full max-h-20">
            <!-- Image -->
            <img src="{{ asset('images/Finalback-Green.png') }}" alt=""
                class="relative inset-0 w-full h-full object-fit ">
        </div>
    </footer>
</body>

</html>