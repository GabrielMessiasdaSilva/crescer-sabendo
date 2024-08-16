<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 overflow-x-hidden">
    <header class="bg-white shadow-lg">
        <div class="flex items-center justify-between">
            <div id="logo" class="flex items-center p-5 bg-customRed rounded-br-lg">
                <p id="plogo" class="text-white font-itim text-5xl">Meu Perfil</p>
            </div>
            <nav id="navbar" class="hidden md:flex items-center space-x-12 gap-14">
                <a href="/ong/account" class="text-customBlue text-2xl font-itim hover:text-customRed hover:underline hover:pb-3">Meus Dados</a>
                <a href="/ong/mural" class="text-customBlue text-2xl font-itim hover:text-customRed hover:underline hover:pb-3">Mural</a>
                <a href="/ong/courses" class="text-customRed text-2xl font-itim hover:text-red-700 hover:underline hover:pb-3">Cursos</a>
                <a href="/ong/volunteer" class="text-customBlue text-2xl font-itim hover:text-red-700 hover:underline hover:pb-3">Voluntários</a>
                <a href="/" class="text-customBlue text-2xl font-itim hover:text-red-700 hover:underline hover:pb-3">Matriculas</a>
            </nav>
            <div id="userAction" class="hidden md:flex items-center space-x-2 mr-3">
                <a href="#" class="text-gray-600 hover:text-customRed">
                    <img id="userImg" class="h-10 mr-2" src="{{ asset('images/icons/userIconRed.png') }}" alt="">
                </a>
            </div>
            <div id="mobile-nav" class="md:hidden mr-5">
                <button id="mobile-menu-toggle" class="focus:outline-none">
                    <img class="h-10" src="{{ asset('images/icons/taskbarRed.png') }}" alt="">
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="hidden bg-white py-2 px-4">
            <a href="/ong/account" class="block text-customBlue text-lg font-itim py-2 hover:text-customRed">Meus Dados</a>
            <a href="/ong/mural" class="text-customBlue text-lg font-itim hover:text-customRed">Mural</a>
            <a href="/ong/courses" class="block text-customRed text-lg font-itim py-2 hover:text-customRed">Cursos</a>
            <a href="/ong/volunteer" class="block text-customBlue text-lg font-itim py-2 hover:text-customRed">Voluntários</a>
            <a href="/" class="block text-customBlue text-lg font-itim py-2 hover:text-customRed">Matriculas</a>
        </div>
    </header>
    @if ($cursos->isEmpty())
        <p>Nenhum curso encontrado.</p>
    @else
        @foreach ($cursos as $curso)
            <p>{{ $curso->Nome }}</p>
        @endforeach
    @endif
  
    
    <div class="flex flex-col w-full h-full sm:w-full sm:h-full mb-20">
        <div id="gridCourses" class="grid grid-cols-1 md:grid-cols-4 my-3">
            <!-- Course Cards -->
            @foreach($cursos as $curso)
            <div class="flex flex-col items-center justify-center gap-4 my-5">
                <div class="max-w-full">
                    <p class="font-itim font-bold text-xl">{{ $curso->Nome }}</p>
                </div>
                <div class="border-2 rounded-xl border-gray-400 w-60 h-26 flex justify-center align-center">
                    <div class="flex flex-col justify-center w-40 h-26">
                        <img src="{{ $curso->Foto ? asset('storage/' . $curso->Foto) : asset('images/default-course.png') }}" alt=""
                            class="w-full h-full object-cover rounded-xl">
                    </div>
                </div>
                <button type="button" onclick="editCurso({{ $curso->Id_Curso }})">
                    <p class="text-customRed cursor-pointer">Editar</p>
                </button>
            </div>
            @endforeach
            <div class="flex flex-col items-center justify-center gap-4 my-5">
                <div class="max-w-full">
                    <p class="font-itim font-bold text-customRed text-xl">Adicionar um Curso</p>
                </div>
                <button type="button" onclick="toggleModal('modal')">
                    <div class="border-2 rounded-xl border-customRed w-60 h-36 flex justify-center align-center">
                        <div class="flex flex-col justify-center items-center w-40 h-26">
                            <img src="{{ asset('images/icons/PlusIcon.png') }}" alt=""
                                class="w-20 h-20 object-cover rounded-xl">
                        </div>
                    </div>
                </button>
            </div>
        </div>
    </div>

    <!-- Modal for Create/Edit Course -->
    <div id="modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 bg-gray-800 bg-opacity-75 justify-center items-center w-full inset-0 h-screen">
        <div class="relative p-5 w-11/12 sm:w-8/12 mx-auto rounded-lg shadow-lg bg-white overflow-y-auto max-h-[90vh]">
            <!-- Modal content -->
            <div class="flex flex-col items-center justify-center p-4 md:p-5 rounded-t">
                <h3 id="modal-title" class="text-3xl font-bold text-black">
                    Adicionar/Editar Curso
                </h3>
                <button type="button" onclick="toggleModal('modal')"
                    class="absolute top-4 right-4 text-gray-400 bg-transparent hover:bg-blue-300 rounded-lg text-sm w-8 h-8 inline-flex justify-center items-center">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
            <div class="p-2 md:p-8">
                <form id="curso-form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" id="form-method" value="POST">
                    <input type="hidden" name="Id_Curso" id="curso-id">
                    <div class="flex flex-col justify-center">
                        <div class="flex flex-col md:flex-row justify-center items-center">
                            <div class="w-full md:w-1/2 flex flex-col items-center justify-center mt-5 md:mt-0 mx-5">
                                <div class="mb-4 w-full">
                                    <label for="Nome" class="block mb-1 text-lg font-medium text-black">Nome do Curso</label>
                                    <input type="text" name="Nome" id="Nome"
                                        class="bg-white border border-customRed text-black text-lg rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full p-2.5"
                                        required />
                                </div>
                                <div class="mb-4 w-full">
                                    <label for="Duracao" class="block mb-1 text-lg font-medium text-black">Duração</label>
                                    <input type="text" name="Duracao" id="Duracao"
                                        class="bg-white border border-customRed text-black text-lg rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full p-2.5"
                                        required />
                                </div>
                                <div class="mb-4 w-full">
                                    <label for="Professor" class="block mb-1 text-lg font-medium text-black">Professor</label>
                                    <input type="text" name="Professor" id="Professor"
                                        class="bg-white border border-customRed text-black text-lg rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full p-2.5"
                                        required />
                                </div>
                                <div class="mb-4 w-full">
                                    <label for="Itens_Aula" class="block mb-1 text-lg font-medium text-black">Itens para as Aulas</label>
                                    <input type="text" name="Itens_Aula" id="Itens_Aula"
                                        class="bg-white border border-customRed text-black text-lg rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full p-2.5"
                                        required />
                                </div>
                            </div>
                            <div class="w-full md:w-1/2 flex flex-col items-center justify-center mt-5 md:mt-0">
                                <div class="mb-4 w-full">
                                    <label for="Sobre" class="block mb-1 text-lg font-medium text-black">Sobre o Curso</label>
                                    <input type="text" name="Sobre" id="Sobre"
                                        class="bg-white border border-customRed text-black text-lg rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full p-2.5"
                                        required />
                                </div>
                                <div class="mb-4 w-full">
                                    <label for="Dias" class="block mb-1 text-lg font-medium text-black">Dias da Semana</label>
                                    <input type="text" name="Dias" id="Dias"
                                        class="bg-white border border-customRed text-black text-lg rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full p-2.5"
                                        required />
                                </div>

                                <div class="mb-4 w-full">
                                    <label for="Foto" class="block mb-1 text-lg font-medium text-black">Capa do Curso</label>
                                    <input type="file" name="Foto" id="Foto"
                                        class="bg-white border border-customRed text-black text-lg rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full p-2.5" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit"
                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full mt-4">
                        Salvar
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Toggle modal visibility
        function toggleModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.toggle('hidden');
        }

        function editCurso(id) {
            fetch(`/ong/courses/${id}`)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('curso-id').value = data.Id_Curso;
                    document.getElementById('Nome').value = data.Nome;
                    document.getElementById('Duracao').value = data.Duracao;
                    document.getElementById('Professor').value = data.Professor;
                    document.getElementById('Itens_Aula').value = data.Itens_Aula;
                    document.getElementById('Sobre').value = data.Sobre;
                    document.getElementById('Dias').value = data.Dias;
                    document.getElementById('form-method').value = 'PUT';
                    document.getElementById('modal-title').innerText = 'Editar Curso';
                    toggleModal('modal');
                })
                .catch(error => console.error('Erro ao buscar o curso:', error));
        }
    </script>
</body>

</html>
