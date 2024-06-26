@extends('layout.layout')

@section('title')

@section('conteudo')

<section id="gallery" class="gallery">
    <div class="container-fluid">

      <div class="section-title">
        <h2>Galeria <span>Produtos</span></h2>
      </div>

      <!-- Filtros -->
      <div class="filters">
        <button class="filter-btn" data-filter="all">Todos</button>
        <button class="filter-btn" data-filter="canecas">Canecas</button>
        <button class="filter-btn" data-filter="camisetas">Camisetas</button>
        <button class="filter-btn" data-filter="agendas">Agendas</button>
      </div>

      <div class="row g-0">

        <div class="col-lg-3 col-md-4 filter canecas">
          <div class="gallery-item">
            <a href="{{ asset('assets/img/caneca1.png') }}" class="gallery-lightbox">
              <img src="{{ asset('assets/img/caneca1.png') }}" alt="" class="img-fluid">
              <div class="product-info">
                <h4>Caneca Personalizada 1</h4>
                <p>R$ 25,00</p>
              </div>
            </a>
          </div>
        </div>

        <!-- Repetir estrutura para outros produtos -->

      </div>

    </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');

    filterButtons.forEach(button => {
      button.addEventListener('click', () => {
        const filter = button.getAttribute('data-filter');

        galleryItems.forEach(item => {
          if (filter === 'all' || item.classList.contains(filter)) {
            item.style.display = 'block';
          } else {
            item.style.display = 'none';
          }
        });
      });
    });
  });
</script>

@endsection
