
@extends('layout.layout')

@section ('title')

@section ('conteudo')


<link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet">

<section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators">
          <li data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></li>
          <li data-bs-target="#heroCarousel" data-bs-slide-to="1"></li>
          <li data-bs-target="#heroCarousel" data-bs-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" role="listbox">
          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('assets/img/banner1.jpg');">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Criative</span>Arte</h2>
                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Produtos</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url('assets/img/banner2.jpg');">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url('assets/img/banner3.jpg');">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon fas fa-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon fas fa-chevron-right" aria-hidden="true"></span>
        </a>
      </div>
    </div>
  </section>




  <main id="main">

    <section id="about" class="about">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-5 align-items-stretch">
              <!-- Fallback Image for Testing -->
              <img src="{{ asset('assets/img/sobre2.png') }}" alt="About Image">
            </div>
            <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">
              <div class="content">
                <h3>Sobre a <strong>CriativeArte</strong></h3>
                <p>
                  Na CriativeArte, nos especializamos em brindes personalizados de alta qualidade, perfeitos para todas as ocasiões. Nossa missão é ajudar você a criar lembranças únicas e inesquecíveis através de nossos produtos personalizados.
                </p>
                <p class="fst-italic">
                  Oferecemos uma ampla gama de produtos que podem ser personalizados conforme suas necessidades, seja para presentes corporativos, festas, eventos especiais ou uso pessoal.
                </p>
                <ul>
                  <li><i class="bx bx-gift"></i> Personalização de canecas, camisetas, agendas e muito mais.</li>
                  <li><i class="bx bx-customize"></i> Produtos de alta qualidade com impressões duradouras.</li>
                  <li><i class="bx bx-check-double"></i> Atendimento personalizado para garantir sua total satisfação.</li>
                </ul>
                <p>
                  Na CriativeArte, estamos comprometidos em oferecer produtos que não apenas atendam, mas superem suas expectativas. Seja qual for a ocasião, temos o brinde perfeito para você.
                </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section><!-- End About Section -->




    <section id="why-us" class="why-us">
        <div class="container">

          <div class="section-title">
            <h2>Por que escolher <span> a CriativeArte?</span></h2>
          </div>

          <div class="row">

            <div class="col-lg-4">
              <div class="box">
                <span>01</span>
                <h4>Personalização de Qualidade</h4>
                <p>Brindes personalizados com os melhores materiais e impressão de alta qualidade.</p>
              </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0">
              <div class="box">
                <span>02</span>
                <h4>Variedade e Inovação</h4>
                <p>Ampla variedade de produtos exclusivos e opções criativas para sua marca.</p>
              </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0">
              <div class="box">
                <span>03</span>
                <h4> Entrega Rápida e Segura</h4>
                <p>nvio rápido e seguro para todo o Brasil, garantindo a satisfação dos nossos clientes.</p>
              </div>
            </div>

          </div>

        </div>
      </section><!-- End Whu Us Section -->

      <style>
        .menu {
  padding: 60px 0;
}

.section-header {
  text-align: center;
  padding-bottom: 30px;
}

.section-header h2 {
  font-size: 32px;
  font-weight: 700;
  text-transform: uppercase;
  color: #333;
}

.section-header p {
  font-size: 18px;
  color: #666;
}

.menu .nav-tabs {
  border: none;
  margin-bottom: 30px;
}

.menu .nav-tabs .nav-link {
  color: #333;
  font-size: 20px;
  font-weight: 500;
  padding: 10px 30px;
  border: none;
  background: #f8f9fa;
  margin: 0 5px;
  border-radius: 5px;
  transition: 0.3s;
}

.menu .nav-tabs .nav-link.active,
.menu .nav-tabs .nav-link:hover {
  background: #343a40;
  color: #fff;
}

.menu .menu-item {
  text-align: center;
}

.menu .menu-item .menu-img {
  max-width: 100%;
  transition: 0.3s;
  border-radius: 5px;
}

.menu .menu-item h4 {
  font-size: 22px;
  font-weight: 600;
  margin: 10px 0;
  color: #333;
}

.menu .menu-item .ingredients {
  font-size: 16px;
  color: #666;
}

.menu .menu-item .price {
  font-size: 18px;
  font-weight: 700;
  color: #333;
  margin-top: 10px;
}

.menu .menu-item a {
  text-decoration: none;
}

.menu .menu-item a:hover .menu-img {
  transform: scale(1.1);
}

      </style>

      <section id="menu" class="menu">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Nossos Produtos</h2>
            <p>CriativeArte<span></span></p>
          </div>

          <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <li class="nav-item">
              <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#produtos-camisetas">
                <h4>Camisetas</h4>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#produtos-canecas">
                <h4>Canecas</h4>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#produtos-agendas">
                <h4>Agendas</h4>
              </a>
            </li>
          </ul>

          <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
            <div class="tab-pane fade active show" id="produtos-camisetas">
              <div class="row gy-5">

                <!-- Produto 1 - Camiseta -->
                <div class="col-lg-4 menu-item">
                  <a href="" class="glightbox"><img src="{{ asset('assets/img/camisa.png') }}" class="menu-img img-fluid" alt=""></a>
                  <h4>Magnam Tiste</h4>
                  <p class="ingredients">
                    Lorem, deren, trataro, filede, nerada
                  </p>
                  <p class="price">
                    $45.9
                  </p>
                </div><!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                    <a href="" class="glightbox"><img src="{{ asset('assets/img/camisa1.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Magnam Tiste</h4>
                    <p class="ingredients">
                      Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                      $45.9
                    </p>
                  </div><!-- Menu Item -->


                  <div class="col-lg-4 menu-item">
                    <a href="" class="glightbox"><img src="{{ asset('assets/img/camisa2.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Magnam Tiste</h4>
                    <p class="ingredients">
                      Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                      $45.9
                    </p>
                  </div><!-- Menu Item -->

                  <div class="col-lg-4 menu-item">
                    <a href="" class="glightbox"><img src="{{ asset('assets/img/camisa3.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Magnam Tiste</h4>
                    <p class="ingredients">
                      Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                      $45.9
                    </p>
                  </div><!-- Menu Item -->


                  <div class="col-lg-4 menu-item">
                    <a href="" class="glightbox"><img src="{{ asset('assets/img/camisa4.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Magnam Tiste</h4>
                    <p class="ingredients">
                      Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                      $45.9
                    </p>
                  </div><!-- Menu Item -->

                  <div class="col-lg-4 menu-item">
                    <a href="" class="glightbox"><img src="{{ asset('assets/img/camisa5.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Magnam Tiste</h4>
                    <p class="ingredients">
                      Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                      $45.9
                    </p>
                  </div><!-- Menu Item -->


                  <div class="col-lg-4 menu-item">
                    <a href="" class="glightbox"><img src="{{ asset('assets/img/camisa6.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Magnam Tiste</h4>
                    <p class="ingredients">
                      Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                      $45.9
                    </p>
                  </div><!-- Menu Item -->


                  <div class="col-lg-4 menu-item">
                    <a href="" class="glightbox"><img src="{{ asset('assets/img/camisa7.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Magnam Tiste</h4>
                    <p class="ingredients">
                      Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                      $45.9
                    </p>
                  </div><!-- Menu Item -->


                  <div class="col-lg-4 menu-item">
                    <a href="" class="glightbox"><img src="{{ asset('assets/img/camisa8.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Magnam Tiste</h4>
                    <p class="ingredients">
                      Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                      $45.9
                    </p>
                  </div><!-- Menu Item -->

              </div>
            </div><!-- End Produtos Camisetas -->

            <div class="tab-pane fade" id="produtos-canecas">
              <div class="row gy-5">

                <!-- Produto 1 - Caneca -->
                <div class="col-lg-4 menu-item">
                  <a href="" class="glightbox"><img src="{{ asset('assets/img/caneca1.png') }}" class="menu-img img-fluid" alt=""></a>
                  <h4>Caneca Magna</h4>
                  <p class="ingredients">
                    Lorem, deren, trataro, filede, nerada
                  </p>
                  <p class="price">
                    $35.9
                  </p>
                </div><!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                    <a href="" class="glightbox"><img src="{{ asset('assets/img/caneca2.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Caneca Magna</h4>
                    <p class="ingredients">
                      Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                      $35.9
                    </p>
                  </div><!-- Menu Item -->

                  <div class="col-lg-4 menu-item">
                    <a href="" class="glightbox"><img src="{{ asset('assets/img/caneca3.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Caneca Magna</h4>
                    <p class="ingredients">
                      Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                      $35.9
                    </p>
                  </div><!-- Menu Item -->



                  <div class="col-lg-4 menu-item">
                    <a href="" class="glightbox"><img src="{{ asset('assets/img/caneca4.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Caneca Magna</h4>
                    <p class="ingredients">
                      Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                      $35.9
                    </p>
                  </div><!-- Menu Item -->


                  <div class="col-lg-4 menu-item">
                    <a href="" class="glightbox"><img src="{{ asset('assets/img/caneca5.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Caneca Magna</h4>
                    <p class="ingredients">
                      Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                      $35.9
                    </p>
                  </div><!-- Menu Item -->


                  <div class="col-lg-4 menu-item">
                    <a href="" class="glightbox"><img src="{{ asset('assets/img/caneca6.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Caneca Magna</h4>
                    <p class="ingredients">
                      Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                      $35.9
                    </p>
                  </div><!-- Menu Item -->

                  <div class="col-lg-4 menu-item">
                    <a href="" class="glightbox"><img src="{{ asset('assets/img/caneca7.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Caneca Magna</h4>
                    <p class="ingredients">
                      Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                      $35.9
                    </p>
                  </div><!-- Menu Item -->

                  <div class="col-lg-4 menu-item">
                    <a href="" class="glightbox"><img src="{{ asset('assets/img/caneca8.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Caneca Magna</h4>
                    <p class="ingredients">
                      Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                      $35.9
                    </p>
                  </div><!-- Menu Item -->

                  <div class="col-lg-4 menu-item">
                    <a href="" class="glightbox"><img src="{{ asset('assets/img/caneca9.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Caneca Magna</h4>
                    <p class="ingredients">
                      Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                      $35.9
                    </p>
                  </div><!-- Menu Item -->

              </div>
            </div><!-- End Produtos Canecas -->

            <div class="tab-pane fade" id="produtos-agendas">
              <div class="row gy-5">

                <!-- Produto 1 - Agenda -->
                <div class="col-lg-4 menu-item">
                  <a href="" class="glightbox"><img src="{{ asset('assets/img/agenda.png') }}" class="menu-img img-fluid" alt=""></a>
                  <h4>Agenda Premium</h4>
                  <p class="ingredients">
                    Lorem, deren, trataro, filede, nerada
                  </p>
                  <p class="price">
                    $25.9
                  </p>
                </div><!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                    <a href="" class="glightbox"><img src="{{ asset('assets/img/agenda1.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Agenda Premium</h4>
                    <p class="ingredients">
                      Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                      $25.9
                    </p>
                  </div>

                  <div class="col-lg-4 menu-item">
                    <a href="" class="glightbox"><img src="{{ asset('assets/img/agenda2.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Agenda Premium</h4>
                    <p class="ingredients">
                      Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                      $25.9
                    </p>
                  </div>

                  <div class="col-lg-4 menu-item">
                    <a href="" class="glightbox"><img src="{{ asset('assets/img/agenda3.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Agenda Premium</h4>
                    <p class="ingredients">
                      Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                      $25.9
                    </p>
                  </div>


                  <div class="col-lg-4 menu-item">
                    <a href="" class="glightbox"><img src="{{ asset('assets/img/agenda4.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Agenda Premium</h4>
                    <p class="ingredients">
                      Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                      $25.9
                    </p>
                  </div>


                  <div class="col-lg-4 menu-item">
                    <a href="" class="glightbox"><img src="{{ asset('assets/img/agenda5.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Agenda Premium</h4>
                    <p class="ingredients">
                      Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                      $25.9
                    </p>
                  </div>


                  <div class="col-lg-4 menu-item">
                    <a href="" class="glightbox"><img src="{{ asset('assets/img/agenda6.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Agenda Premium</h4>
                    <p class="ingredients">
                      Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                      $25.9
                    </p>
                  </div>

                  <div class="col-lg-4 menu-item">
                    <a href="" class="glightbox"><img src="{{ asset('assets/img/agenda7.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Agenda Premium</h4>
                    <p class="ingredients">
                      Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                      $25.9
                    </p>
                  </div>


                  <div class="col-lg-4 menu-item">
                    <a href="" class="glightbox"><img src="{{ asset('assets/img/agenda8.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Agenda Premium</h4>
                    <p class="ingredients">
                      Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                      $25.9
                    </p>
                  </div>

              </div>
            </div><!-- End Produtos Agendas -->
          </div><!-- End Tab Content -->

      </section>

  </main>

  <section id="gallery" class="gallery">
    <div class="container-fluid">

      <div class="section-title">
        <h2>Galeria <span>Produtos</span></h2>
      </div>

      <div class="row g-0">

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="{{ asset('assets/img/caneca1.png') }}" class="gallery-lightbox">
              <img src="{{ asset('assets/img/caneca1.png') }}" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="{{ asset('assets/img/caneca2.png') }}" class="gallery-lightbox">
              <img src="{{ asset('assets/img/caneca2.png') }}" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="{{ asset('assets/img/camisa2.png') }}" class="gallery-lightbox">
              <img src="{{ asset('assets/img/camisa2.png') }}" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="{{ asset('assets/img/camisa3.png') }}" class="gallery-lightbox">
              <img src="{{ asset('assets/img/camisa3.png') }}" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="{{ asset('assets/img/camisa4.png') }}" class="gallery-lightbox">
              <img src="{{ asset('assets/img/camisa4.png') }}" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="{{ asset('assets/img/agenda2.png') }}" class="gallery-lightbox">
              <img src="{{ asset('assets/img/agenda2.png') }}" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="{{ asset('assets/img/agenda3.png') }}" class="gallery-lightbox">
              <img src="{{ asset('assets/img/agenda3.png') }}" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="{{ asset('assets/img/agenda4.png') }}" class="gallery-lightbox">
              <img src="{{ asset('assets/img/agenda4.png') }}" alt="" class="img-fluid">
            </a>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Gallery Section -->

  <section id="testimonials" class="testimonials">
    <div class="container">
      <div class="section-title">
        <h2>Depoimentos de Clientes</h2>
        <p>O que nossos clientes estão dizendo sobre nós</p>
      </div>

      <div class="testimonials-carousel swiper">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Os brindes personalizados da CriativeArte superaram todas as minhas expectativas. A qualidade é excelente e o atendimento foi impecável. Recomendo a todos!
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="img/testimonials/testimonial-1.jpg" class="testimonial-img" alt="">
              <h3>Maria Silva</h3>
              <h4>Cliente Satisfeita</h4>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Fiquei impressionado com a variedade de produtos e a facilidade de personalização. Os brindes fizeram o maior sucesso no evento da minha empresa.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="img/testimonials/testimonial-2.jpg" class="testimonial-img" alt="">
              <h3>Carlos Souza</h3>
              <h4>Empresário</h4>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                A CriativeArte realmente entende do assunto. Fiz uma encomenda de canecas personalizadas e todos adoraram o resultado. A entrega foi rápida e o produto chegou em perfeito estado.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="img/testimonials/testimonial-3.jpg" class="testimonial-img" alt="">
              <h3>Ana Pereira</h3>
              <h4>Cliente Fiel</h4>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Estou encantada com a CriativeArte! Fiz uma encomenda para o aniversário da minha filha e os produtos personalizados fizeram a diferença na decoração da festa. Excelente qualidade!
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="img/testimonials/testimonial-4.jpg" class="testimonial-img" alt="">
              <h3>Juliana Oliveira</h3>
              <h4>Mãe de Aniversariante</h4>
            </div>
          </div>

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section>

  <script src="js/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper('.testimonials-carousel', {
      speed: 600,
      loop: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false
      },
      slidesPerView: 'auto',
      pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
      }
    });
  </script>



  {{-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> --}}

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


 @endsection
