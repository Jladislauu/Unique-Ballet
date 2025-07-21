<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Endpoint correto para listar páginas/posts
$token = '869981747593eb88ef111d77edeb8021';
$url = "https://aqua-hippopotamus-874519.hostingersite.com/blog/api/pages?token=$token";

$json = file_get_contents($url);
$response = json_decode($json, true);

// Pega os 3 primeiros posts publicados
$recentPosts = [];
if (isset($response['data'])) {
  foreach ($response['data'] as $key => $post) {
    if ($post['type'] === 'published') {
      $post['key'] = $key;
      $recentPosts[] = $post;
      if (count($recentPosts) == 3)
        break;
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Unique Ballet Studio Sabrina Lemes - Escola de Ballet Infantil em Curitiba</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <link rel="icon" type="image/x-icon" href="images/favicon.ico">
  <link rel="stylesheet" type="text/css" href="css/vendor.css">
  <link rel="stylesheet" type="text/css" href="fonts/icomoon.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
  <div class="preloader-wrapper">
    <div class="preloader"></div>
  </div>

  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top py-4">
    <div class="container-fluid">
      <div class="main-logo">
        <a href="index.php">
          <img src="images/Marca/logo-unique.png" alt="logo">
        </a>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end align-items-center flex-grow-1 pe-3 gap-4">
            <li class="nav-item text-uppercase">
              <a href="#" class="nav-link active">Início</a>
            </li>
            <li class="nav-item text-uppercase">
              <a href="#about" class="nav-link">Sobre Nós</a>
            </li>
            <li class="nav-item text-uppercase">
              <a href="https://aqua-hippopotamus-874519.hostingersite.com/blog" class="nav-link">Blog</a>
            </li>
            <li class="nav-item text-uppercase">
              <a href="#products" class="nav-link">Produtos</a>
            </li>
            <li class="nav-item text-uppercase">
              <a href="#contact" class="nav-link">Contatos</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <section id="hero-section" class="text-center jarallax mt-5 py-5">
    <img src="images/Apresentações/apresentação-hero.jpg" alt="Ballet para crianças em Curitiba" class="jarallax-img">
    <div class="banner-content py-5 my-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <h1 class="text-white display-1 mt-5">Unique Ballet Studio Sabrina Lemes</h1>
            <span class="text-white">Encante sua filha com a magia do ballet! Oferecemos aulas especializadas para
              crianças de 3 a 12 anos, com turmas reduzidas e atenção personalizada. Descubra nossa nova turma de Jazz
              Juvenil e transforme a infância com dança em um ambiente acolhedor e seguro.</span>
            <div class="buttons d-flex flex-wrap justify-content-center gap-3 my-4">
              <a href="#agenda" class="btn btn-medium btn-primary rounded-pill">Ver Horários</a>
              <a href="#agenda" class="btn btn-medium btn-dark rounded-pill">Agende uma Aula Experimental</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="about" class="padding-large">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <img src="images/Sabrina Lemes/Sabrina-Lemes.png" alt="Aulas de ballet para crianças em Curitiba" class="img-fluid">
        </div>
        <div class="col-md-6">
          <div class="block-text">
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="0">
              <span class="text-primary">Bem-vindo à</span> Unique Ballet Studio
            </h2>
            <p data-aos="fade-up" data-aos-delay="100">Na Unique Ballet Studio Sabrina Lemes, acreditamos que ensinar
              ballet é mais do que passos: é encantar e transformar vidas! Liderada pela professora Sabrina Lemes, com
              mais de 15 anos de experiência em dança e 10 anos dedicados à educação infantil, nossa escola é
              especializada em aulas de ballet para crianças de 3 a 12 anos. Com turmas reduzidas, oferecemos atenção
              personalizada em um ambiente acolhedor e seguro.</p>
            <p data-aos="fade-up" data-aos-delay="100">Nossa missão é proporcionar um aprendizado significativo na
              primeira infância, com didática profissional e carinho. Além do ballet, agora oferecemos uma nova turma de
              Jazz Juvenil para crianças de 10 a 12 anos. Localizada em Água Verde, Curitiba, a Unique Ballet Studio é o
              lugar onde sua filha pode crescer, se expressar e brilhar através da dança.</p>
            <div class="btn-left" data-aos="fade-up" data-aos-delay="200">
              <a href="#agenda" class="btn btn-outline-primary btn-pill btn-medium">Agendar Visita</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="videos">
    <div class="container-fluid">
      <div class="row">
        <div class="section-header">
          <h2 class="section-title text-center">
            <span class="text-primary">Conheça</span> Nossas Aulas
          </h2>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="class-item" data-aos="fade" data-aos-delay="0">
              <figure>
                <img src="images/Turmas/Turma 3 e 5 anos.jpeg" alt="Baby Class Ballet em Curitiba" class="img-fluid">
                <figcaption class="p-5 text-white">
                  <h2 class="text-white m-0">Baby Class Ballet (3 a 5 anos)</h2>
                  <p class="m-0">Introdução encantadora ao ballet para crianças de 3 a 5 anos, com aulas de 40 minutos
                    em turmas reduzidas, promovendo diversão, coordenação e confiança.</p>
                  <a href="#agenda" class="btn btn-outline-light rounded-pill">Agendar Aula Experimental</a>
                </figcaption>
              </figure>
            </div>
          </div>
          <div class="col-md-6">
            <div class="class-item" data-aos="fade" data-aos-delay="100">
              <figure>
                <img src="images/Turmas/Turma 6 e 7.jpeg" alt="Ballet Infantil em Curitiba" class="img-fluid">
                <figcaption class="p-5 text-white">
                  <h2 class="text-white m-0">Ballet Infantil (6 e 7 anos)</h2>
                  <p class="m-0">Aulas de 50 minutos que desenvolvem técnica, criatividade e expressão em um ambiente
                    acolhedor, perfeitas para crianças de 6 e 7 anos.</p>
                  <a href="#agenda" class="btn btn-outline-light rounded-pill">Agendar Aula Experimental</a>
                </figcaption>
              </figure>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="class-item" data-aos="fade" data-aos-delay="200">
              <figure>
                <img src="images/Turmas/Turma 8 e 10 anos.jpeg" alt="Ballet Preparatório em Curitiba" class="img-fluid">
                <figcaption class="p-5 text-white">
                  <h2 class="text-white m-0">Ballet Preparatório (8 a 10 anos)</h2>
                  <p class="m-0">Aulas de 50 minutos que aprimoram técnica e disciplina, com atenção personalizada para
                    crianças de 8 a 10 anos.</p>
                  <a href="#agenda" class="btn btn-outline-light rounded-pill">Agendar Aula Experimental</a>
                </figcaption>
              </figure>
            </div>
          </div>
          <div class="col-md-4">
            <div class="class-item" data-aos="fade" data-aos-delay="300">
              <figure>
                <img src="images/video-item3.jpg" alt="Jazz Juvenil em Curitiba" class="img-fluid">
                <figcaption class="p-5 text-white">
                  <h2 class="text-white m-0">Jazz Juvenil (10 a 12 anos)</h2>
                  <p class="m-0">Nova turma de Jazz para crianças de 10 a 12 anos! Aulas dinâmicas de 50 minutos que
                    combinam ritmo, energia e expressão.</p>
                  <a href="#agenda" class="btn btn-outline-light rounded-pill">Agendar Aula Experimental</a>
                </figcaption>
              </figure>
            </div>
          </div>
          <divmil style="color: rgb(255, 0, 0); display:-

System: inline-block;"> <a href="#agenda" class="btn btn-outline-light rounded-pill">Agendar Aula Experimental</a>
            </figcaption>
            </figure>
        </div>
      </div>
    </div>
    </div>
    </div>
  </section>

  <section class="my-2 py-2 my-lg-5 py-lg-5">
    <div class="container">
      <h2>Horários e Turmas</h2>
      <div class="table-responsive">
        <table class="table table-striped table-hover table-borderless align-middle">
          <thead>
            <tr>
              <th>Turma</th>
              <th>Dia</th>
              <th>Horário</th>
              <th>Idade</th>
              <th>Investimento</th>
              <th>Agendar</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <td><strong>Baby Class Ballet</strong></td>
              <td>Segunda-feira</td>
              <td>18:30 às 19:10</td>
              <td>3 a 5 anos</td>
              <td>R$150,00</td>
              <td><a href="#agenda" class="btn btn-outline-dark rounded-pill">Agendar</a></td>
            </tr>
            <tr>
              <td><strong>Ballet Infantil</strong></td>
              <td>Quinta-feira</td>
              <td>18:30 às 19:20</td>
              <td>6 a 7 anos</td>
              <td>R$150,00</td>
              <td><a href="#agenda" class="btn btn-outline-dark rounded-pill">Agendar</a></td>
            </tr>
            <tr>
              <td><strong>Ballet Preparatório</strong></td>
              <td>Terça-feira</td>
              <td>18:30 às 19:20</td>
              <td>8 a 10 anos</td>
              <td>R$150,00</td>
              <td><a href="#agenda" class="btn btn-outline-dark rounded-pill">Agendar</a></td>
            </tr>
            <tr>
              <td><strong>Jazz Juvenil</strong></td>
              <td>Terça-feira</td>
              <td>19:10 às 20:00</td>
              <td>10 a 12 anos</td>
              <td>R$150,00</td>
              <td><a href="#agenda" class="btn btn-outline-dark rounded-pill">Agendar</a></td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <td colspan="6" class="text-muted">*Aulas experimentais limitadas a 3 alunas por turma. Cancelamento com
                24h de antecedência.</td>
            </tr>
          </tfoot>
        </table>
      </div>

      <div class="btn-center">
        <a href="#agenda" class="btn btn-outline-primary btn-pill btn-medium">Fazer Agendamento</a>
      </div>
    </div>
  </section>

  <section id="agenda">
    <iframe src="https://aqua-hippopotamus-874519.hostingersite.com/agenda/index.php" width="100%" height="800px"
      style="border: none;">
    </iframe>
  </section>

  <section id="products" class="padding-medium">
    <div class="section-header text-center">
      <h2 class="section-title">
        <span class="text-primary">Conheça</span> Nossos Produtos
      </h2>
    </div>
    <div class="container">
      <div class="swiper product-swiper product-content">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="product-item">
              <div class="image-holder align-center">
                <img src="images/Uniforme/colan.png" alt="shoes">
              </div>
              <div class="products-title text-center">
                <a href="single-product.html">Colan com Saia</a>
                <span class="price text-primary">R$149,00</span>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-item">
              <div class="image-holder align-center">
                <img src="images/Uniforme/meia-calça.jpg" alt="sweatshirt">
              </div>
              <div class="products-title text-center">
                <a href="single-product.html">Meia Calça Conversível</a>
                <span class="price text-primary">R$45,00</span>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-item">
              <div class="image-holder align-center">
                <img src="images/Uniforme/sapatilha.jpg" alt="shirt">
              </div>
              <div class="products-title text-center">
                <a href="single-product.html">Sapatilha Meia Ponta Infantil</a>
                <span class="price text-primary">R$50,00</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="btn-center">
      <a href="https://api.whatsapp.com/send?1=pt_BR&phone=5541987260614&fbclid=PAZXh0bgNhZW0CMTEAAafrs5EtWAApVrymVEtzLKZMhzFz7DKsr4zvx8aQhLQxJz549MiHk4bTM_-VrA_aem_8KLKKlNLGfL1Ji1jzFDXEA"
        class="btn btn-outline-primary btn-pill btn-medium">Fazer Pedido</a>
    </div>
  </section>

  <section class="inspiring-quote bg-light-grey padding-large">
    <div class="container">
      <div class="row">
        <div class="section-header text-center">
          <h2 class="section-title">
            <span class="text-primary">Inspiração</span> Diária
          </h2>
        </div>
        <div class="quotation">
          <blockquote class="blockquote align-center">
            <p>"A dança é a poesia do movimento, que desperta a magia na alma das crianças e as inspira a sonhar."</p>
            <span class="author">- Unique Ballet Studio</span>
          </blockquote>
        </div>
      </div>
    </div>
  </section>

  <!-- BLOG DINÂMICO -->
  <section id="blog" class="latest-blogs padding-large">
    <div class="container">
      <div class="section-header text-center">
        <h2 class="section-title">
          <span class="text-primary">Veja Nossos</span> Últimos Posts do Blog
        </h2>
      </div>
      <div class="row">
        <?php foreach ($recentPosts as $post): ?>
          <?php
          // Extrai apenas o nome do arquivo, mesmo que venha um caminho completo
          $coverImage = !empty($post['coverImage']) ? basename($post['coverImage']) : '';
          if ($coverImage && !empty($post['uuid'])) {
            $cover = "/blog/bl-content/uploads/pages/{$post['uuid']}/thumbnails/{$coverImage}";
          } else {
            $cover = "images/no-image.png";
          }
          ?>
          <div class="col-md-4">
            <div class="post-item" data-aos="fade" data-aos-delay="0">
              <figure class="zoom-effect">
                <img src="<?php echo $cover; ?>" alt="postitem" class="blog-image"
                  onerror="this.onerror=null;this.src='images/no-image.png';">
              </figure>
              <div class="post-content">
                <div class="meta-tags">
                  <span class="meta-date">Posted on <?php echo date('M d, Y', strtotime($post['date'])); ?></span>
                  <span class="meta-author">By <a href="#"><?php echo $post['username']; ?></a></span>
                </div>
                <h3 class="post-title">
                  <a href="/blog/<?php echo $post['key']; ?>"><?php echo $post['title']; ?></a>
                </h3>
                <p>
                  <?php echo $post['description']; ?>
                  <a href="/blog/<?php echo $post['key']; ?>" class="link">Read More</a>
                </p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="btn-center">
        <a href="/blog/" class="btn btn-outline-primary btn-pill btn-medium">Visite o Blog</a>
      </div>
    </div>
  </section>

  <section id="newsletter" class="newsletter padding-large no-padding-top">
    <div class="container position-relative">
      <div class="row justify-content-center">
        <div class="col-md-4">
          <div class="image-holder">
            <img src="images/Sabrina Lemes/Sabrina-Lemes1.png" alt="dancer" class="newsletter-image">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-content">
            <div class="section-header">
              <h2 class="section-title text-center mb-0">
                <span class="text-primary">Siga no</span> Instagram
              </h2>
              <div>
                <a href="https://www.instagram.com/uniqueballetstudio/" class="btn btn-medium btn-primary rounded-pill"
                  target="_blank">
                  <i class="fab fa-instagram"></i> uniqueballetstudio
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="contact" class="padding-large bg-light-grey">
    <div class="container">
      <div class="row">
        <div class="section-header text-center">
          <h2 class="section-title">
            <span class="text-primary">Entre em</span> Contato
          </h2>
          <p class="lead">Estamos prontos para encantar sua filha com a magia do ballet! Entre em contato para agendar
            uma aula experimental ou tirar suas dúvidas sobre nossas turmas de ballet e jazz em Curitiba.</p>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="contact-info">
            <h3>Como Nos Encontrar</h3>
            <ul class="list-unstyled">
              <li class="mb-3">
                <i class="fas fa-map-marker-alt text-primary me-2"></i>
                Rua República Argentina, 1672, Água Verde, Curitiba - PR
              </li>
              <li class="mb-3">
                <i class="fas fa-envelope text-primary me-2"></i>
                <a href="mailto:uniqueballetstudio@gmail.com">uniqueballetstudio@gmail.com</a>
              </li>
              <li class="mb-3">
                <i class="fab fa-whatsapp text-primary me-2"></i>
                <a href="https://wa.me/554187260614" target="_blank">+55 41 98726-0614</a>
              </li>
              <li class="mb-3">    
                <i class=" fas fa-instagram text-primary me-2"></i>
                <a href="https://www.instagram.com/uniqueballetstudio" target="_blank">@uniqueballetstudio</a>
              </li>
              <li class="mb-3">
                <i class="fas fa-clock text-primary me-2"></i>
                Aulas experimentais de segunda a quinta, 18:30 às 20:00. <a href="agenda">Ver horários
                  completos</a>.
              </li>
            </ul>
            <p><strong>Nota:</strong> Aulas experimentais limitadas a 3 alunas por turma, com cancelamento até 24h
              antes. Agende já e faça parte da nossa família!</p>
            <div class="btn-left mt-4">
              <a href="[INSIRA URL DO SISTEMA DE AGENDAMENTO]" class="btn btn-primary btn-pill btn-medium">Agendar Aula
                Experimental</a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3602.9042250594673!2d-49.28930738497673!3d-25.43987698378924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce3f0b7c1b7b7%3A0x5c7b1b8f6c7c5b2a!2sRua%20Rep%C3%BAblica%20Argentina%2C%201672%2C%20%C3%81gua%20Verde%2C%20Curitiba%20-%20PR%2C%2080240-210%2C%20Brasil!5e0!3m2!1spt-BR!2sus!4v1634567890123"
              width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
              title="Localização da Unique Ballet Studio em Água Verde, Curitiba"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

  <a href="https://wa.me/5541987260614" target="_blank" id="whatsapp-float" aria-label="Fale conosco no WhatsApp">
  <i class="fab fa-whatsapp"></i>
</a>
<style>
  #whatsapp-float {
    position: fixed;
    width: 60px;
    height: 60px;
    bottom: 32px;
    right: 32px;
    background-color: #25d366;
    color: #fff;
    border-radius: 50%;
    text-align: center;
    font-size: 2.5rem;
    box-shadow: 0 2px 10px rgba(0,0,0,0.2);
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background 0.2s;
  }
  #whatsapp-float:hover {
    background: #20ba5a;
    color: #fff;
    text-decoration: none;
  }
</style>


  <footer id="footer" class="padding-large">
    <div class="container">
      <div class="footer-content row">
        <div class="col-md-4">
          <div class="footer-menu">
            <ul class="d-flex list-unstyled justify-content-md-start justify-content-center">
              <li>
                <a href="#">Início</a>
              </li>
              <li>
                <a href="#">Políticas e privacidades</a>
              </li>
              <li>
                <a href="#">Terms e Condições</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="footer-logo align-center">
            <img src="images/Marca/uniqueballetstudiologo.jpg" alt="logo">
          </div>
        </div>
        <div class="col-md-4">
          <div class="social-links">
            <ul class="d-flex list-unstyled justify-content-md-end justify-content-center">
              <li>
                <a href="https://www.facebook.com/balletkids2">
                  <i class="icon icon-facebook"></i>
                </a>
              </li>
              <li>
                <a href="https://www.instagram.com/uniqueballetstudio/">
                  <i class="icon icon-instagram"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="icon icon-youtube"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <div id="footer-bottom">
    <div class="container">
      <div class="copyright align-center">
        <p>Developed by <a href="http://www.recepcionistai.com/">RecepcionistAI</a>
        </p>
      </div>
    </div>
  </div>
  <script src="js/jquery-1.11.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
</body>

</html>