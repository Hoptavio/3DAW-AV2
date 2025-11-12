<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="carrossel.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- "defer" faz o codigo ser rodado no final(Prefiri deixar assim pela estetica do codigo)-->
    <script src="carrossel.js" defer></script>
    <title>Alugel Maneiro</title>
</head>
<body>
    <?php include('navbar.php');?>
    <h1>Acomodações</h1>
    <!--Codigo do carrossel maneiro-->
     <!--Cridando o container-->
    <div class="banner">

          <!--Setas-->
          <button class="arrow-left control" aria-label control="Previous image">◀</button>

          <button class="arrow-right control" aria-label control="Next Image">▶</button>
          <!-- Fim Setas-->

        <div class="bannerBox">
            <!--Imagens-->
            <div class="banners">
           
               <img src="imgs/img1.jpg" alt="" class=" atual item">
          
               <img src="imgs/img2.jpg" alt="" class="  item">
              
               <img src="imgs/img3.jpg" alt="" class=" item">
  
               <img src="imgs/img1.jpg" alt="" class="  item">
          
               <img src="imgs/img2.jpg" alt="" class="  item">
              
               <img src="imgs/img3.jpg" alt="" class=" item">

               <img src="imgs/img1.jpg" alt="" class="  item">
          
               <img src="imgs/img2.jpg" alt="" class="  item">
              
               <img src="imgs/img3.jpg" alt="" class=" item">
  
  
            </div>
            <!-- Fim Imagens-->
        </div>      
        
    </div>
    <!-- Fim do codigo do carrossel maneiro-->
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>