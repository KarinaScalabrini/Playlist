<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <style>
            body{
                display:flex;
                align-items: center;
                justify-content:center;
                background-image: url({{asset('background.png')}});
                background-repeat:no-repeat;
                background-size:cover;
                
            }
            main{
                width:80%;
                height:90vh;
                background:#ffffffa1;
            }
            .header{
                width:100%;
                height:15vh;
                background-color: #ffffff;
                display:flex;
                flex-direction: row;
                justify-content: space-between;
            }
            .header > img{
                margin-left:2%;
            }
            .header > h5{
                margin:0px;
                margin-right: 2%;
                font-size:35px;
                font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                color:#535353;
                font-weight: normal;
                height: 100%;
                text-align: center;
            }
            .pesquisa{
                margin-top:2%;
                padding-left:3%;
                padding-right:3%;
                display:flex;
                flex-wrap: wrap;
            }
            .pesquisa > input{
                width:80%;
                margin-right:5%!important;
            }
            .pesquisa > span{
                width:15%;
            }
            </style>
    </head>
    <body class="antialiased">
        <main>
            <section class="header">
                <img src={{ asset('logo.png')}} alt="imagem da logo">
                <h5>Discografia</h5>
            </section>
            <form action="{{ route('pesquisa')}}" method="GET" class="pesquisa" >
                <label for="pesquisa">Digite uma palavra chave</label>
                <input type="text" name="pesquisa" class="form-control"/><button type="submit" class="btn btn-dark">Procurar</button>
            </form>
            <ul>
                @foreach($albuns as $item)
                  <li><strong>Álbum: {{ $item['nomeAlbum'] }}, {{ $item['ano'] }}</strong></li>
                  <table>
                    <thead>
                      <tr>
                        <th>Nº</th>
                        <th>Faixa</th>
                        <th>Duração</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($item['musicas'] as $index => $musica)
                        <tr>
                          <td>{{ $index + 1 }}</td>
                          <td>{{ $musica['faixa'] }}</td>
                          <td>{{ $musica['duracao'] }}</td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                @endforeach
              </ul>
            <section></section>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    </body>
</html>
