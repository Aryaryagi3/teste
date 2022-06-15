<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        @routes
        <script src="{{ mix('js/app.js') }}" defer></script>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');
        </style>
        @inertiaHead
    </head>
    <body class="font-sans antialiased bg-slate-200">
        @inertia

        @env ('local')
            <script src="http://localhost:3000/browser-sync/browser-sync-client.js"></script>
        @endenv
    </body>
    <script>
    function checkCep() {
        let cep = document.querySelector('#cep').value;

        if (cep.length !== 8) {
            alert('O CEP inserido é inválido, leia atentamente o texto abaixo do campo CEP.')
            return;
        }
        let url = 'https://viacep.com.br/ws/' + cep + '/json/';


        fetch(url).then(function(response){
            response.json().then(function(data) {
                if (data.uf === undefined) {
                    alert('O CEP inserido não existe, por favor insira um CEP válido.')    
                    return;
                }
                
                showInfo(data);
            })
        });
    }

    function showInfo(data) {
        document.getElementById("street").value = data.logradouro;
        document.getElementById("complement").value = data.complemento;
        document.getElementById("neighbourhood").value = data.bairro;
        document.getElementById("city").value = data.localidade;
        document.getElementById("state").value = data.uf;
    }
</script>
</html>
