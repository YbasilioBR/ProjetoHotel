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
    <link rel="stylesheet" href="/css/base-style.css" />

  </head>
  <body>
     

        <div class="row no-gutters" id="conteudo">
                <div class="menuVertical longBarVertical">
                        <ul class="sidebar-nav">
                                <a class="navbar-brand">Sistema Hotel</a>
                                <li>
                                    <a href="home">Home</a>
                                </li>
                                <li>
                                    <a href="usuarios">Usuários</a>
                                </li>
                                <li>
                                    <a href="tarefas">Tarefa</a>
                                </li>
                                <li>
                                    <a href="quartos">Quarto Limpo</a>
                                </li>
                                <li>
                                    <a href="#">Relatórios</a>
                                </li>
                            </ul>
                </div>
                <div class="col">
                        <nav id="nav-menu" class="navbar justify-content-between">
                                <span class="navbar-brand">Seja Bem-vindo Hotel</span>
                                <form class="form-inline">
                                  <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Logout</button>
                                </form>
                        </nav>

                        @yield('content')
                </div>    
                
                

             </div>      
             
             
             <!--
             <footer id="footer" class="page-footer font-small blue">

                 
                    <div class="footer-copyright text-center py-3">
                        Desenvolvido por Ygor Basilio - 2018
                    </div>
                  
                  
                  </footer> -->

            

        <script src="/js/jquery.min.js"></script>
        <script src="/js/bootstrap.bundle.min.js"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

        @yield('javascript')




    </body>
</html>
