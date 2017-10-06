<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                background-color: lightgrey;
            }

        </style>

    </head>
    <body>
    <h1 style="text-align: center; color: #2a88bd; ">DATOS PERSONALES</h1>
    <br>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <h2 style="text-align: center; color: #985f0d; ">Nombre:  Carlos Arturo León Casanova</h2>
                <br>
                <h2 style="text-align: center; color: #985f0d; ">Dirección: cra 10 # 17 N 58, apto 602, torre 1</h2>
                <br>
                <h2 style="text-align: center; color: #985f0d; ">Teléfono: 3017408978</h2>
                <br>
                <h2 style="text-align: center; color: #985f0d; ">Ciudad: Popayán</h2>
                <br>
                <h2 style="text-align: center; color: #985f0d; ">Código postal: 190002</h2>
                <br>
<div class="row">
                <h1>Intereses personales</h1>
                <br>
                <li style="font-family: cursive "><Strong>fútbol</Strong></li>
                <p>Me gusta ver los equipos de europa y colombia jugar</p>
                <li style="font-family: cursive "><Strong>tennnis de campo</Strong></li>
                <p>Me intereso mucho por los partidos y los grand slam de tennis</p>
                <li style="font-family: cursive "><Strong>Conocer playas de México</Strong></li>
                <p>Me han hablado mucho en colombia de las playas mexicanas, por lo tanto deseo conocerlas</p>
                <li style="font-family: cursive "><Strong>Tener buen promedio</Strong></li>
                <p>Cuando termine la universidad deseo hacer un master en Europa</p>
                <li style="font-family: cursive "><Strong>Conocer gente</Strong></li>
                <p>Siempre es bueno conocer personas para aprender de las culturas</p>
                <li style="font-family: cursive "><Strong>Aprender nuevos lenguajes de progrmación</Strong></li>
                <p>Hay que estar a la vanguardia de las nuevas tecnologias</p>
                <li style="font-family: cursive "><Strong>Conocer ciudades</Strong></li>
                <p>Conocer culturas y diversidad de flora y fauna que hay en las ciudades</p>
                <li style="font-family: cursive "><Strong>Comer pizza</Strong></li>
                <p>A todos los sitios que voy, me gusta probar las pizzas</p>
                <li style="font-family: cursive "><Strong>Visitar amigos</Strong></li>
                <p>Visitar amigos para recordar viejas anecdotas</p>
                <li style="font-family: cursive "><Strong>Visitar familiares</Strong></li>
                <p>Siempre es grato visitar a nuestros familiares que han viajado a otras partes del mundo</p>
                <br>
                <h1>JOBIES</h1>
                <br>
                <li style="font-family: cursive "><Strong>fútbol</Strong></li>
                <p>Me gusta jugar fútbol en los ratos libres con mis amigos</p>
                <li style="font-family: cursive "><Strong>tennnis de campo</Strong></li>
                <p>Desde pequeño entrenaba tennis de campo en popayán y participaba en torneos</p>
                <li style="font-family: cursive "><Strong>Bailar</Strong></li>
                <p>Me gusta salir con mi novia a discotecas para bailar</p>
                <li style="font-family: cursive "><Strong>Correr</Strong></li>
                <p>Los fines de semana salgo con mis amigos a correr a montañas</p>
                <li style="font-family: cursive "><Strong>Programación</Strong></li>
                <p>Todos los dias debo programar ya sea por la universidad o el trabajo</p>
                <br>
                <h1>PÁGINAS FAVORITAS</h1>
                <p>1. <a href="http://www.espn.com.mx">ESPN</a></p>
                <p>2. <a href="https://github.com">GITHUB</a></p>
                <p>3. <a href="http://www.mundodeportivo.com">MUNDO DEPORTIVO</a></p>
                <p>4. <a href="https://www.facebook.com">FACEBOOK</a></p>
                <p>5. <a href="https://www.instagram.com">INSTAGRAM</a></p>
</div>
            </div>


        </div>
    </body>
<footer style="text-align: center">
    Carlos Arturo León Casanova
    <br>
    3017408978
    <br>
    cra 10 # 17 N 58, apto 602, torre 1, ALTEA CLUB HOUSE
</footer>
</html>
