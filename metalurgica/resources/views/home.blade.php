<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Metalurgica - Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 

        <!-- Styles -->
        <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" />       

        <!-- JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="{{URL::asset('js/ajax.js')}}"></script>   
</head>
<body>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <div>
                    <div class="d-flex">
                    <svg width="1em" height="1.7em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg>
                    <h5 style="color: #6495ED;">Bem vindo, {{ Auth::user()->name }}</h5>
                    </div>
                    <div class="float-right"> 
                       <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>

                    </div>
                   
                </div>

            </div>

            <div class="row">
                <div class="col-md-12" style="margin-top: 10px;">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Produtos</li>
                  </ol>
                </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-md-9">
                    <button type="button" class="btn btn-success">NOVA COMPRA</button>

                </div>
                <div class="float-right">
                    <form class="form-inline">
                            <div class="form-group mx-sm-3 mb-2">
                                
                                <input type="password" class="form-control" id="inputPassword2" placeholder="Pesquise">
                                <button type="button" class="btn btn-outline-primary" style="margin-left:2px;">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                      <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                                      <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                                    </svg>
                            </button>
                            </div>
                    </form>
                </div>
            </div>

            <div>

                <div class="#">
                    <div class="col-md-12">   
                        <br />
                        <h4 id="center" style="margin-top: 30px;"><b>PRODUTOS DISPONÍVEIS</b></h4>
                    </div>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th id="center">ID</th>
                                        <th>Nome</th>
                                        <th>Descrição</th>
                                        <th id="center">Quantidade</th>
                                        <th>Preço</th>                
                                        <th id="center">Código</th>                               
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($produtos as $produto)
                                    <tr>
                                        <td id="center">{{$produto->id}}</td>
                                        <td title="Nome">{{$produto->name}}</td>
                                        <td title="Descrição">{{$produto->description}}</td>
                                        <td title="Quantidade" id="center">{{$produto->quantity}}</td>
                                        <td title="Preço">R$ {{number_format($produto->price, 2,',','.')}}</td> 
                                        <td id="center" title="Preço">{{$produto->codigo}}</td> 
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>


