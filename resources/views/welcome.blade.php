<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <style>
        nav { padding: 1rem; background-color: #ffffff; "display: flex; align-items: center;"}
nav img { height: 3rem; margin-right: 1rem; }

nav select { border: none; background-color: #a0a0a0; color: #fff; padding: 0.5rem; margin-right: 1rem; }

nav select option { background-color: #495057; color: #fff; }

nav select option:checked { background-color: #6c757d; }

nav select optgroup { background-color: transparent; }

.navbar {
            display: flex;
            justify-content: center;
            padding: 10px 0;
            border-bottom: 1px solid #ccc;
        }

        .navbar a {

            color: #555555;
            text-dergb(185, 185, 185)tion: none;
            color: #b4b4b4;
            text-dergb(190, 190, 190)tion: none;
            padding: 10px;
            margin: 0 5px;
            border-radius: 5px;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        .navbar a:hover {

            background-color: #cecaca;
        }


    </style>
    <nav style="display: flex; align-items: center;">
        <img src="{{ asset('fotos/meneame_logo.png') }}" alt="Descripción de la imagen">

        <select>
            <option value="portada">🏠 Portada</option>
            <option value="nuevas">🆕 Nuevas</option>
            <option value="articulos">📄 Artículos</option>
            <option value="popular">🔥 Popular</option>
            <option value="masVisitadas">  Mas visitadas</option>
            <option value="notame">👀 Notame</option>
            <optgroup label="Mis comunidades">
                <option value="ciencia">🔬 Ciencia</option>
                <option value="politica">🏛️ Política</option>
                <option value="economia">💰 Economía</option>
                <option value="actualidad">📰 Actualidad</option>
                <option value="serie">📺 Serie</option>
            </optgroup>
            <optgroup label="Otras secciones">
                <option value="comunidades">👥 Comunidades</option>
                <option value="fisgona">🔍 Fisgona</option>
            </optgroup>
        </select>

        <form id="searchForm">
            <input type="text" id="searchInput" placeholder="Buscar">
        </form>

        <div>
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif</nav>
    <body class="antialiased">
        <div class="navbar">
            <a href=""> 🏠 Portada</a>
            <a href="nuevas.html"> 🆕 Nuevas</a>
            <a href="articulos.html"> 📄 Artículos</a>
            <a href="populares.html"> 🔥 Populares</a>
            <a href="mas-visitadas.html"> 🔝 Más visitadas</a>
        </div>

        <div id="results">
            @if (!empty($noticias))
                @foreach ($noticias as $noticia)
                    <div class="noticia">
                        <h2>{{ $noticia->titulo }}</h2>
                        <p>{{ $noticia->descripcion }}</p>
                    </div>
                @endforeach
            @else
                <p>No se encontraron noticias con esa palabra clave.</p>
            @endif
        </div>

    </body>
</html>
