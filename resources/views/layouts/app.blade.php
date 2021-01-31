<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Escuela Técnica 27 "Hipolito Yrigoyen"</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="css/app.css">
        <style>
            /* RED BORDER ON INVALID INPUT */
            .check input:invalid {
                border-color: red;
            }
          
            /* FLOATING LABEL */
            .label-floating input:not(:placeholder-shown),
            .label-floating textarea:not(:placeholder-shown) {
                padding-top: 1.4rem;
            }
            .label-floating input:not(:placeholder-shown) ~ label,
            .label-floating textarea:not(:placeholder-shown) ~ label {
                font-size: 0.8rem;
                transition: all 0.2s ease-in-out;
                color: #1f9d55;
                opacity: 1;
            }
          
        </style>

        <!-- Favs -->
        <link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="favicons/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="favicons/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
        <link rel="manifest" href="favicons/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="favicons/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        @livewireStyles

        
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')
            
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts

    </body>

    <footer class="py-3 bg-gray-700 text-center text-white">
        Todo lo que esta bien en esta vida
    </footer>

    <!-- Scripts -->
    <script src="js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        //RED BORDER ON INVALID INPUT
        document.getElementById('contact-me').addEventListener("invalid", function (event) {
            this.classList.add('check');
        }, true);
        
            // TEXT AREA AUTO EXPAND
        var textarea = document.querySelector('textarea.autoexpand');
        
        textarea.addEventListener('keydown', autosize);
        
        function autosize(){
          var el = this;
          setTimeout(function(){
            el.style.cssText = 'height:auto; padding: 1.4rem .2rem .5rem';
            
            el.style.cssText = 'height:' + el.scrollHeight + 'px';
          },0);
        }
    </script>

    @if(session('msg') == 'send')
    <script>
        Swal.fire(
            'Genial!',
            'El correo fue enviado con exito',
            'success'
            )
        </script>
    @endif
</html>
