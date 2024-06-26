@extends('layout.layout')

@section('title', 'Nossos Produtos')

@section('conteudo')
<main id="main">

    <section id="filter-search" class="filter-search py-5 bg-light">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-8">
                    <input type="text" class="form-control" placeholder="Buscar produtos...">
                </div>
                <div class="col-md-4 text-md-end mt-3 mt-md-0">
                    <button class="btn btn-primary">Buscar</button>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="list-inline">
                        <li class="list-inline-item"><button class="btn btn-outline-secondary">Todas</button></li>
                        <li class="list-inline-item"><button class="btn btn-outline-secondary">Canecas</button></li>
                        <li class="list-inline-item"><button class="btn btn-outline-secondary">Camisetas</button></li>
                        <li class="list-inline-item"><button class="btn btn-outline-secondary">Agendas</button></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="products" class="products py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('assets/img/caneca1.png') }}" alt="Caneca Personalizada" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Caneca Personalizada</h5>
                            <p class="card-text">Descrição breve do produto. Pode conter detalhes como material, capacidade, etc.</p>
                            <p class="card-text"><strong>R$ 25,00</strong></p>
                            <a href="#" class="btn btn-primary">Adicionar ao Carrinho</a>
                        </div>
                    </div>
                </div>
                <!-- Adicione mais colunas conforme necessário -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('assets/img/camiseta1.png') }}" alt="Camiseta Personalizada" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Camiseta Personalizada</h5>
                            <p class="card-text">Descrição breve do produto. Pode conter detalhes como material, tamanho, etc.</p>
                            <p class="card-text"><strong>R$ 35,00</strong></p>
                            <a href="#" class="btn btn-primary">Adicionar ao Carrinho</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('assets/img/agenda1.png') }}" alt="Agenda Personalizada" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Agenda Personalizada</h5>
                            <p class="card-text">Descrição breve do produto. Pode conter detalhes como material, formato, etc.</p>
                            <p class="card-text"><strong>R$ 30,00</strong></p>
                            <a href="#" class="btn btn-primary">Adicionar ao Carrinho</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer mt-auto py-3 bg-light">
        <div class="container text-center">
            <span class="text-muted">© 2024 Nome da Loja. Todos os direitos reservados.</span>
        </div>
    </footer>

</main>
@endsection
