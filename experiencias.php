<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="carrossel.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- "defer" faz o codigo ser rodado no final(Prefiri deixar assim pela estetica do codigo)-->
    <script src="carrossel.js" defer></script>
    <title>Alugel Maneiro - Experiências</title>
</head>
<body>
    <?php include('navbar.php');?>
    
    <!--Carousel Principal -->
    <div class="main-carousel">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://media.istockphoto.com/id/104731717/pt/foto/resort-de-luxo.jpg?s=612x612&w=0&k=20&c=6rJBstFwB4tA-y7Fk8oEp9b8icCtQpS7-aKhKUxAbE4=" class="d-block w-100" alt="Resort de luxo" style="height: 500px; object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Viva as experiências mais maneiras do mundo</h3>
                        <p>Descubra passeios incríveis e momentos únicos em destinos paradisíacos.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://admin.cnnbrasil.com.br/wp-content/uploads/sites/12/2025/11/virginia-vinijr-nao-esta-solteira.jpg?w=1080&h=608&crop=1" class="d-block w-100" alt="Passeio de barco" style="height: 500px; object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Aventuras Inesquecíveis</h3>
                        <p>Passeios de barco, trilhas ecológicas e muito mais.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://cdn-clubecandeias.s3.sa-east-1.amazonaws.com/uploads/2018/08/saiba-quais-sao-os-dez-hoteis-mais-incriveis-do-mundo.jpg" class="d-block w-100" alt="Hotel luxuoso" style="height: 500px; object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Conforto e Beleza</h3>
                        <p>Hospede-se nos locais mais incríveis do mundo.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!--Fim do Carousel Principal -->
    
    <div class="container">
        <h1 class="page-header">Viva Experiências Únicas</h1>
        <p class="page-subtitle">Descubra passeios, excursões e atividades incríveis para tornar sua viagem inesquecível</p>
        
        <!--Cards de Experiências-->
        <div class="card-container">
            <div class="card">
                <img src="https://images.unsplash.com/photo-1506929562872-bb421503ef21?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Passeio de barco">
                <div class="card-body">
                    <h5 class="card-title">Passeio de Barco nas Ilhas</h5>
                    <p class="card-text">Navegue pelas águas cristalinas e descubra paraísos tropicais escondidos.</p>
                    <p class="price">R$ 150,00 / pessoa</p>
                    <a href="#" class="btn btn-primary">Reservar Agora</a>
                </div>
            </div>
            
            <div class="card">
                <img src="https://images.unsplash.com/photo-1551632811-561732d1e306?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Trilha na natureza">
                <div class="card-body">
                    <h5 class="card-title">Trilha Ecológica com Guia</h5>
                    <p class="card-text">Explore a natureza em sua forma mais pura com guias especializados.</p>
                    <p class="price">R$ 80,00 / pessoa</p>
                    <a href="#" class="btn btn-primary">Reservar Agora</a>
                </div>
            </div>
            
            <div class="card">
                <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Passeio cultural">
                <div class="card-body">
                    <h5 class="card-title">Tour Cultural Histórico</h5>
                    <p class="card-text">Conheça a história e cultura local com passeios pelos pontos históricos.</p>
                    <p class="price">R$ 120,00 / pessoa</p>
                    <a href="#" class="btn btn-primary">Reservar Agora</a>
                </div>
            </div>
        </div>
        <!--Fim dos Cards de Experiências-->
        
        <h2 class="section-title">Experiências perto de você</h2>
        
        <!--Codigo do carrossel maneiro-->
        <div class="banner">
            <!--Setas-->
            <button class="arrow-left control" aria-label="Previous image">◀</button>
            <button class="arrow-right control" aria-label="Next Image">▶</button>
            <!-- Fim Setas-->

            <div class="bannerBox">
                <!--Imagens-->
                <div class="banners">
                    <img src="https://media.istockphoto.com/id/104731717/pt/foto/resort-de-luxo.jpg?s=612x612&w=0&k=20&c=6rJBstFwB4tA-y7Fk8oEp9b8icCtQpS7-aKhKUxAbE4=" alt="Resort de luxo" class="atual item">
                    <img src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Pôr do sol" class="item">
                    <img src="https://images.unsplash.com/photo-1501555088652-021faa106b9b?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Montanhas" class="item">
                    <img src="https://images.unsplash.com/photo-1439066615861-d1af74d74000?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Lago" class="item">
                    <img src="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Praia" class="item">
                </div>
                <!-- Fim Imagens-->
            </div>      
        </div>
        <!-- Fim do codigo do carrossel maneiro-->
    </div>
    
    <?php include('footer.php'); ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>