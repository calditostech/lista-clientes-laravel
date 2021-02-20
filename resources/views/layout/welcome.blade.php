<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lista Clientes</title>

        <!-- icon font -->
        <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

        <!--CSS-->
        <link rel="stylesheet" href="assets/css/styles.css"> 
    </head>
    <body class="antialiased">
      
    <nav class="navbar navbar-light bg-primary">
          <div class="container-fluid">
               <a class="navbar-brand" href="#">
               <img src="assets/img/clientes.png" alt="" width="30" height="24" class="d-inline-block align-top">
                  <h2 class ="titulo">Lista Clientes</h2>
               </a>
         </div>
   </nav>
   
   <div class = "addclient">
   <button type="button" class="btn btn-primary btn-lg" href="/criarcliente"><i class="fas fa-user-plus">Adicionar Cliente +</i></button>
   </div>
       
   <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">CPF</th>
      <th scope="col">TELEFONE</th>
      <th scope="col">LOCALIDADE</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach($clientes as $cliente)
      <td scope="row">{{$cliente->id}}</td>
      <td>{{$cliente->nome}}</td>
      <td>{{$cliente->email}}</td>
      <td>{{$cliente->cpf}}</td>
      <td>{{$cliente->telefone}}</td>
      <td>{{$cliente->localidade}}</td>
      @endforeach
    </tr>
  </tbody>
</table>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script defer src="/your-path-to-fontawesome/js/all.js"></script> 
    </body>
</html>
