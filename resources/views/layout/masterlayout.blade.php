<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Ashok - @yield('title','Website')</title>
    @stack('style')
</head>
<body>
     <div id="container">
            <header id="header"><h1>Ashok Negi </h1></header>
        
            <nav id="navbar">
           <li> <a href="{{ route('index') }}">Home |</a></li>
           <li> <a href="{{ route('about') }}">About |</a></li>
            <li><a href="{{ route('post') }}">Post </a></li>
        </nav>
        <main> 
            <article>
                
                @hasSection('content')
                    @yield('content')   
               @else 
                  <h2>No data found</h2>
               @endif  
                 
            </article>
            <aside id="aside">
                    @section('sidebar')
                       <li> <a href="{{ route('index') }}">Home </a></li>
                      <li> <a href="{{ route('about') }}">About </a></li>
                      <li><a href="{{ route('post') }}">Post </a></li>                        
                    @show
            </aside>
                 
        </main>
        <footer>ashoknegi@copyright 2025</footer>
    </div>

        @stack('script')

 </body>
</html>
        