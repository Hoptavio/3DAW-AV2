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
    <h1>Experiências</h1>
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
           
               <img src="https://media.istockphoto.com/id/104731717/pt/foto/resort-de-luxo.jpg?s=612x612&w=0&k=20&c=6rJBstFwB4tA-y7Fk8oEp9b8icCtQpS7-aKhKUxAbE4=" alt="" class=" atual item">
          
               <img src="https://www.uai.com.br/uainoticias/wp-content/uploads/2025/07/mosaico_1753278843876.jpg" alt="" class="  item">
              
               <img src="https://s2.glbimg.com/l4_m3rxVuo00_ygPFcBUHWEjoFE=/smart/e.glbimg.com/og/ed/f/original/2022/07/14/hotel-campos-do-jordao-melhor-do-mundo.jpg" alt="" class=" item">
  
               <img src="https://admin.cnnbrasil.com.br/wp-content/uploads/sites/12/2025/11/virginia-vinijr-nao-esta-solteira.jpg?w=1080&h=608&crop=1" alt="" class="  item">
          
               <img src="https://cdn-clubecandeias.s3.sa-east-1.amazonaws.com/uploads/2018/08/saiba-quais-sao-os-dez-hoteis-mais-incriveis-do-mundo.jpg" alt="" class="  item">
              
            </div>
            <!-- Fim Imagens-->
        </div>      
        
    </div>
    <!-- Fim do codigo do carrossel maneiro-->
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>