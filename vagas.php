<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="carrossel.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- "defer" faz o codigo ser rodado no final(Prefiri deixar assim pela estetica do codigo)-->
    <script src="carrossel.js" defer></script>
    <title>Alugel Maneiro - Acomodações</title>
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
        <h1 class="page-header">Encontre Sua Acomodação Ideal</h1>
        <p class="page-subtitle">Descubra casas, apartamentos e pousadas perfeitos para sua viagem</p>
        
        <!--Cards de Acomodações-->
        <div class="card-container">
            <div class="card">
                <img src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Casa na praia">
                <div class="card-body">
                    <h5 class="card-title">Chalé à Beira-Mar</h5>
                    <p class="card-text">Encantador chalé com vista para o mar e acesso privativo à praia.</p>
                    <p class="price">R$ 350,00 / noite</p>
                    <a href="#" class="btn btn-primary">Ver Detalhes</a>
                </div>
            </div>
            
            <div class="card">
                <img src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Apartamento moderno">
                <div class="card-body">
                    <h5 class="card-title">Apartamento no Centro</h5>
                    <p class="card-text">Moderno apartamento no coração da cidade, próximo a todas as atrações.</p>
                    <p class="price">R$ 200,00 / noite</p>
                    <a href="#" class="btn btn-primary">Ver Detalhes</a>
                </div>
            </div>
            
            <div class="card">
                <img src="https://images.unsplash.com/photo-1449824913935-59a10b8d2000?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Casa na montanha">
                <div class="card-body">
                    <h5 class="card-title">Cabana nas Montanhas</h5>
                    <p class="card-text">Aconchegante cabana com lareira e vista deslumbrante para as montanhas.</p>
                    <p class="price">R$ 280,00 / noite</p>
                    <a href="#" class="btn btn-primary">Ver Detalhes</a>
                </div>
            </div>
            
            <div class="card">
                <img src="https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Hotel boutique">
                <div class="card-body">
                    <h5 class="card-title">Hotel Boutique Histórico</h5>
                    <p class="card-text">Charmoso hotel em edifício histórico com decoração única.</p>
                    <p class="price">R$ 420,00 / noite</p>
                    <a href="#" class="btn btn-primary">Ver Detalhes</a>
                </div>
            </div>
            
            <div class="card">
                <img src="https://images.unsplash.com/photo-1582268611958-ebfd161ef9cf?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Casa com piscina">
                <div class="card-body">
                    <h5 class="card-title">Vila Familiar com Piscina</h5>
                    <p class="card-text">Espaçosa vila perfeita para famílias, com piscina e área de churrasco.</p>
                    <p class="price">R$ 550,00 / noite</p>
                    <a href="#" class="btn btn-primary">Ver Detalhes</a>
                </div>
            </div>
            
            <div class="card">
                <img src="https://images.unsplash.com/photo-1571896349842-33c89424de2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Estúdio compacto">
                <div class="card-body">
                    <h5 class="card-title">Estúdio Compacto</h5>
                    <p class="card-text">Confortável estúdio para quem busca praticidade e bom custo-benefício.</p>
                    <p class="price">R$ 120,00 / noite</p>
                    <a href="#" class="btn btn-primary">Ver Detalhes</a>
                </div>
            </div>
        </div>
        <!--Fim dos Cards de Acomodações-->
        
        <h2 class="section-title">Acomodações em Destaque</h2>
        
        <!--Codigo do carrossel maneiro-->
        <div class="banner">
            <!--Setas-->
            <button class="arrow-left control" aria-label="Previous image">◀</button>
            <button class="arrow-right control" aria-label="Next Image">▶</button>
            <!-- Fim Setas-->

            <div class="bannerBox">
                <!--Imagens-->
                <div class="banners">
                    <img src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Casa na praia" class="atual item">
                    <img src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Apartamento moderno" class="item">
                    <img src="https://images.unsplash.com/photo-1449824913935-59a10b8d2000?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Casa na montanha" class="item">
                    <img src="https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Hotel boutique" class="item">
                    <img src="https://images.unsplash.com/photo-1582268611958-ebfd161ef9cf?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Casa com piscina" class="item">
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