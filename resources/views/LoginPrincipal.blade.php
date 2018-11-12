<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <title>Sistema Hotel</title>
    <meta name="description" content="A Bootstrap 4 admin dashboard theme that will get you started. The sidebar toggles off-canvas on smaller screens. This example also include large stat blocks, modal and cards. The top navbar is controlled by a separate hamburger toggle button." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Codeply">

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/login-style.css" />

  </head>
  <body id="LoginForm">
        <div class="container">
        <div class="login-form">
        <div class="main-div">
            <div class="panel">
           <h2>Sistema Hotel</h2>
           <p>Informe seu usuário e senha para acessar</p>
           </div>
           <form method="POST" action="/login">
            @csrf
                <div class="form-group">      
        
                    <input type="text" class="form-control" id="logon" name="logon" placeholder="Login">
        
                </div>
        
                <div class="form-group">
        
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
        
                </div>
       
                <button type="submit" class="btn btn-primary">Login</button>
        
            </form>
            </div>
       
        </div></div></div>
  </body>        
</html>
