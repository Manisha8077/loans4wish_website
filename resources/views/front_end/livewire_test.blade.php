<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    @livewireStyles
{{-- 
  @vite('resources/css/app.css') --}}
    
  {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
</head>
<body>

    {{-- <h1>Hellow this</h1>

        <h1 class="text-6xl font-bold underline">
        Hello world!
        </h1>



<p class="text-sm ...">The quick brown fox ...</p>
<p class="text-base ...">The quick brown fox ...</p>
<p class="text-lg ...">The quick brown fox ...</p>
<p class="text-xl ...">The quick brown fox ...</p>
<p class="text-2xl ...">The quick brown fox ...</p>

<p class="text-base/6 ...">So I started to walk into the water...</p>
<p class="text-base/7 ...">So I started to walk into the water...</p>
<p class="text-base/loose ...">So I started to walk into the water...</p>

    <livewire:show-posts /> --}}

    {{-- <livewire:customer-primary-form /> --}}
    <livewire:customer-primary-form />
    
@livewireScripts    
</body>
</html>