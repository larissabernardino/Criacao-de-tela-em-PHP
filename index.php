<!DOCTYPE html>
<html lang "en">
    <head>
     <meta charset="UTF-8">

     <title>Home Page</title>

      <style>
      body , li {
     
      margin:0;
      padding:0;
      list-style:none;
      font-family: 'Verdana';
      }
      #container{
          display:grid;
          grid-template-rows:15vh 85vh;
          grid-template-areas:
          'cabecalho'
          'conteudo'
      }
      #cabecalho{
                 grid-area:cabecalho;
                 background-color:#1d1d1d;
                 color:white;
                 display:flex;
                 justify-content:space-between;
                 align-items:center;
                 
           
      }
      #conteudo {
          grid-area:conteudo;
          background-color: #ccc;
      }
      img {
          margin-top:15px;
          margin-left:15px;
      }
      .menu{
          display:flex;
      }
      .menu li{
        padding:20px;
        margin-left:20px;
      }

      .menu li a{
          display:block;
          padding:10px;
          cursor:pointer;
          background-color:green;
      }
      </style>
     </head>
     <body> 
  <div id="container">
  <header id="cabecalho">
    <div class="logo">
        <img src="./logo.png"  width="75" height="75">
        </div>
<nav>
    <ul class="menu">
        <li>
            <a>Home</a></li>
        <li><a>Produtos</a></li>
        <li><a>Clientes</a></li>
</ul>
</nav>
</header>
    <main id = "conteudo">
    <h1> Bem Vindo a Home</h1>
    </main>
</div>
</body>
</html>