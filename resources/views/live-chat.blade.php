<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/css/live-chat.css'])
</head>
<body>
  
    <header>
        <h2 class="request-type">{{session('tipo_atendimento')}}</h2>
        <p class="attendant">Buscando Atendente</p>
    </header>
    <video id="webcamVideo" class="webcamVideo" autoplay playsinline></video>
    <video id="remoteVideo" class="remoteVideo" autoplay playsinline></video>

    <footer>
        <button class="hangup-call" id="hangupButton">Encerrar Chamada</button>
    </footer>

    <input type="hidden" name="userId" id="userId" value="{{ session('id') }}">

    @vite(['resources/js/app.js'])
</body>
</html>