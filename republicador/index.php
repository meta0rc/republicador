<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicador</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
<div id="return"></div>
    <figure id="load">
        <figcaption id="status">
            <span id="valor"></span>
            <p class="progressBar" id="pIm">Baixando arquivos...:</p>
        </figcaption>
        <video id="success" src="loadFile.mp4" autoplay loop muted playsinline></video>
        <div class="progress" id="progress"><div class="progressBarD" id="progressBarD"></div></div>  

        
        
    </figure>

    <h1 style="color: #fff;">Republicador de Projetos</h1>
   

    <section id="main">
        <div class="ogranizar">
        <form id="projeto" method="post" action="publicador_develop.php" enctype="multipart/form-data">
        <label for="id_input">ID do projeto</label>
        <input id ="id_input" name="id" size="4" placeholder="ID" minlength="2" maxlength="4"  required/>
        <input name="submit" type="submit" id="btn">
      </form>
      </div>
      <img src="./humans.png" alt="">
        
    </section>
   
   
    <section id="upload">

        <img src="Download_file.gif" alt="Eu invoco Dragão branco de Olhos Azuis">

    </section>

    <span>by Inovation House</span>


</script>

<script src="jquery-3.5.1.min.js"></script>
<script src="script.js"></script>
<script src="functions.js"></script>

</body>

</html>