<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicador</title>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body style="background: #39009B; ">
    <h1>Apagar Pasta Old</h1>
    <section id="main">
        <div class="opt">
        <h2 style="color: #fff;">Deletetar Old</h2>
        
    
        <div id="loading" style="display: none;"><img src="gif.gif" alt=""></div>
    
        <input type="button" value="Apagar pasta old" class="btn-opt" onclick="delold()" >
     

        
  
      
        </div>
        <img src="./humans.png" alt="">
    </section>
   
<script src="jquery-3.5.1.min.js"></script>

<script src="functions.js"></script>

<style>
    #main{
        background: none !important;
    }
    #main img {
        width: 200px;
        text-align: right;
        float: right;
    }
    h1{
        color: #fff;
    }
    .btn-opt {
    height: 55px;
    background: #ffa434;
    font-size: 16px;
    border-radius: 6px;
    border: none;
    }
    .btn-opt:hover {
    background: #4caf50;
    color: #fff;
    cursor: pointer;
    }
    .opt{
        display: grid;
    }
</style>

</body>
</html>