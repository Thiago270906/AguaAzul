<?php
 require 'vendor/autoload.php'
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Água Azul</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fonte Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-50 text-[#0f0f0f] text-[15px] font-light">

    <!-- NAVBAR -->
    <nav class="flex justify-around items-center bg-[#457AA6] h-[10vh]">
        
        <img class="h-[60px]" src="images/agua-logo-removebg-preview.png" alt="logo">

        <ul class="flex space-x-8 text-white">
            <li><a class="hover:opacity-70 transition duration-300" href="index.php">Home</a></li>
            <li><a class="hover:opacity-70 transition duration-300" href="pescaLazer.php">Pesca e Lazer</a></li>
            <li><a class="hover:opacity-70 transition duration-300" href="restaurante.html">Restaurante</a></li>
            <li><a class="hover:opacity-70 transition duration-300" href="restaurante.html">Pizzaria</a></li>
            <li><a class="hover:opacity-70 transition duration-300" href="https://wa.me/5519971011205"  target="_blank">Contato</a></li>
        </ul>

        <a href="ingressos.html"
           class="text-white bg-[#F55F12] border-2 border-[#CC4500] rounded-full px-5 py-2 uppercase text-[16px] hover:opacity-90 transition duration-300">
           reserve agora
        </a>
    </nav>

    <!-- MAIN -->
    <main class="bg-gray-50 text-[16px]">

        <img class="h-[575px] w-full object-cover mb-12" src="images/banner-topo.png" alt="Banner-Entrada">

        <div class="flex justify-around gap-10 items-start px-10">

            <div>
                <h2 class="text-[#F55F12] text-[17px] uppercase">
                    conheça o nosso
                </h2>

                <h1 class="text-[#457AA6] text-[34px] font-bold uppercase">
                    água azul
                </h1>

                <div class="max-w-[500px]">
                    
                    <p class="max-w-[450px] mt-4">
                        Aqui a diversão é garantida para todas as idades! Um espaço familiar,
                        seguro e rodeado pela natureza, ideal para relaxar e aproveitar o seu final de semana.
                    </p>
                    <div class="flex gap-12 mt-6">
                        <ol class="list-disc list-inside">
                            <li>Parque Aquático</li>
                            <li>Pesca Esportiva</li>
                            <li>Lanchonete</li>
                        </ol>

                        <ol class="list-disc list-inside">
                            <li>Brinquedo para Crianças</li>
                            <li>Passeio de Pedalinho</li>
                            <li>Restaurante</li>
                        </ol>
                    </div>
                    <div class="flex gap-12 mt-6">
                        <a href="ingressos.html"
                            class="text-white bg-[#F55F12] border-2 border-[#CC4500] rounded-full px-5 py-2 uppercase text-[16px] hover:opacity-90 transition duration-300">
                            Reserve Agora
                        </a>
                    </div>
                </div>
            </div>
            

            <img class="h-[350px] shrink-0" src="images/fotos-aaz.png" alt="Agua-Azul">

        </div>
         <img class="mt-12 mb-12 h-full w-full object-cover mb-12" src="images/Barra 2.png" alt="Banner">
         <div class="flex justify-around gap-[170px] items-start px-10">

            <div>
                <h2 class="text-[#F55F12] text-[17px] uppercase">
                    diversão garantida
                </h2>

                <h1 class="text-[#457AA6] text-[34px] font-bold uppercase">
                    parque aquático
                </h1>

                <div class="max-w-[500px]">
                    
                    <p class="max-w-[450px] mt-4">
                        Nosso parque aquático conta com piscinas refrescantes, playground para os pequenos e atividades como pedalinho.
                    </p>

                </div>
            </div>
                <div class="w-[280px] h-[220px] p-1 flex items-center justify-center"></div>
        </div>

            <!-- CARDS -->
        <div class="flex justify-center w-full"></div>
            <div class="flex justify-around w-full gap-[150px]">
                <div class="w-[280px] h-[325px] border border-[#0f0f0f] rounded-xl bg-gray-50 flex flex-col items-center justify-between">

                    <img class="w-[270px] h-[270px] object-contain"
                        src="images/balde-img.png">

                    <p class="text-[35px] text-center text-[#f55f12] font-bold uppercase pb-2">
                        baldão
                    </p>

                </div>

                <div class="w-[280px] h-[325px] border border-[#0f0f0f] rounded-xl bg-gray-50 flex flex-col items-center justify-between">

                    <img class="w-[270px] h-[270px] object-contain"
                        src="images/toboagua-img.png">
                    <p class="text-[35px] text-center text-[#f7c314] font-bold uppercase pb-2">
                        toboágua
                    </p>
                </div>

                <div class="w-[280px] h-[325px] border border-[#0f0f0f] rounded-xl bg-gray-50 flex flex-col items-center justify-between">

                    <img class="w-[270px] h-[270px] object-contain" 
                        src="images/piscina-img.png">
                    <p class="text-[35px] text-center text-[#457aa6] font-bold uppercase pb-2">
                        piscina
                    </p>
                </div>
            </div>

        </div>
        <div class="mt-12 mb-12 h-[500px] bg-[url('images/fundo-pesca.png')] bg-cover bg-center bg-no-repeat text-gray-50 flex justify-around gap-10 items-center px-10">
 
            
            <img class="h-[350px] shrink-0" src="images/aaz-cima.png" alt="Agua-Azul">

            <div>
                <h2 class="text-[17px] uppercase">
                    conheça o nosso espaço de
                </h2>

                <h1 class="text-[34px] font-bold uppercase">
                    pesca esportiva
                </h1>

                <div class="max-w-[500px]">
                    
                    <p class="max-w-[450px] mt-4">
                        No Água Azul, a pesca esportiva é uma experiência para toda a família! Nosso pesqueiro conta com tanques amplos e bem cuidados. 
                        Aqui, o objetivo é aproveitar o momento, relaxar e se conectar com a natureza. Traga sua vara de pesca ou alugue a nossa e viva 
                        um dia de lazer diferente, cercado de paisagens lindas e muita tranquilidade.
                    </p>
                    <div class="flex gap-12 mt-6">
                        <a href="ingressos.html"
                            class="text-white bg-[#F55F12] border-2 border-[#CC4500] rounded-full px-5 py-2 uppercase text-[16px] hover:opacity-90 transition duration-300">
                            saiba mais
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <div class="flex justify-around gap-[170px] items-start px-10">

            <div>
                <h2 class="text-[#F55F12] text-[17px] uppercase">
                    ta com fome?
                </h2>

                <h1 class="text-[#457AA6] text-[34px] font-bold uppercase">
                    restaurante
                </h1>

                <div class="max-w-[500px]">
                    
                    <p class="max-w-[450px] mt-4">
                        Depois de um mergulho na diversão, nada melhor que saborear uma boa comida caseira! 
                        Nosso restaurante oferece self-service à vontade aos sábados e aos domingos. 
                        Um cardápio variado, feito com carinho, perfeito para reunir a família e repor as energias. 
                        Aqui, o sabor é tão acolhedor quanto o nosso ambiente.
                    </p>

                    <div class="flex gap-12 mt-6">
                        <a href="ingressos.html"
                            class="text-white bg-[#F55F12] border-2 border-[#CC4500] rounded-full px-5 py-2 uppercase text-[16px] hover:opacity-90 transition duration-300">
                            Reserve Agora
                        </a>
                    </div>
                </div>
            </div>
            

                <div class="w-[280px] border border-[#0f0f0f] rounded-xl bg-gray-50 p-1 flex items-center justify-center">

                    <img class="max-w-full object-contain"
                        src="images/restaurante1.png">

                </div>
        </div>
        <div class="flex justify-center w-full ">
            <div class="flex justify-evenly mt-12 w-full">

                <div class="w-[280px] border border-[#0f0f0f] rounded-xl bg-gray-50 p-1 flex items-center justify-center">
                    <img class="max-w-full object-contain"
                        src="images/cerveja.png">
                </div>

                <div class="w-[280px] border border-[#0f0f0f] rounded-xl bg-gray-50 p-1 flex items-center justify-center">
                    <img class="max-w-full object-contain"
                        src="images/comida.png">
                </div>

                <div class="w-[280px] border border-[#0f0f0f] rounded-xl bg-gray-50 p-1 flex items-center justify-center">
                    <img class="max-w-full object-contain"
                        src="images/restaurante2.png">
                </div>

            </div>
        </div>
    </main>

    <footer class="relative bg-[#F55F12] radios text-white mt-[150px] pt-32 pb-8">

        <!-- CARD CONTATO -->
        <div class="absolute -top-16 left-1/2 -translate-x-1/2 
                    bg-gray-100 text-gray-800 
                    w-[90%] max-w-4xl 
                    rounded-2xl shadow-xl 
                    p-8 flex justify-between items-center">

            <div>
                <h2 class="text-2xl font-bold text-[#457AA6] uppercase">
                    Contato
                </h2>
                <p class="mt-2 max-w-xl">
                    Se tiver alguma dúvida, interesse específico ou precisar de informações que não estejam no site, entre em contato diretamente conosco.
                </p>
            </div>

            <a href="#"
            class="bg-[#457AA6] text-white px-6 py-3 rounded-full font-semibold hover:opacity-90 transition">
                Entrar em Contato
            </a>
        </div>


        <!-- CONTEÚDO PRINCIPAL -->
        <div class="max-w-6xl mx-auto px-6">

            <div class="flex justify-center gap-40">

                <!-- MENU -->
                <div>
                    <h3 class="text-3xl font-bold text-[#457AA6] uppercase mb-4">
                        Menu
                    </h3>
                    <ul class="space-y-2">
                        <li><a class="hover:opacity-70 transition duration-300" href="index.php">Home</a></li>
                        <li><a class="hover:opacity-70 transition duration-300" href="pescalazer.html">Pesca e Lazer</a></li>
                        <li><a class="hover:opacity-70 transition duration-300" href="restaurante.html">Restaurante</a></li>
                        <li><a class="hover:opacity-70 transition duration-300" href="contato.html">Contato</a></li>
                    </ul>
                </div>

                <!-- INFORMAÇÕES -->
                <div>
                    <h3 class="text-3xl font-bold text-[#457AA6] uppercase mb-4">
                        Informações
                    </h3>
                    <ul class="space-y-2">
                        <li>(19) 99999-9999</li>
                        <li>(19) 99999-9999</li>
                        <li>CNPJ: 45.123.571/0001-51</li>
                        <li>Estrada Urutuba, 1165 – Estiva II, Estiva Gerbi, SP</li>
                    </ul>
                </div>

            </div>

            <!-- BOTÃO CENTRAL -->
            <div class="flex justify-center mt-12">
                <a href="#"
                class="bg-[#457AA6] text-white px-8 py-3 rounded-full font-semibold hover:opacity-90 transition">
                    Política de Privacidade
                </a>
            </div>

            <!-- LINHA -->
            <div class="border-t border-white/40 mt-10 pt-6 text-center text-sm">
                ©2025 todos os direitos reservados. Desenvolvido por Thiago Lopes
            </div>

        </div>

    </footer>

</body>
</html>