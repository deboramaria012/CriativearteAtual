@extends('layout.layout')

@section('title', 'Nossos Serviços')

@section('conteudo')
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processo de Personalização</title>
</head>
<body>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 20px;
        }

        .section-title {
            text-align: center;
            margin-bottom: 40px;
        }

        .section-title h2 {
            color: #333;
            font-size: 36px;
            font-weight: 600;
        }

        .section-title p {
            color: #666;
            font-size: 18px;
        }

        .processo-steps {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .processo-step {
            width: calc(50% - 20px);
            margin-bottom: 30px;
            background-color: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .processo-step:hover {
            transform: translateY(-5px);
        }

        .processo-step-icon {
            text-align: center;
            margin-bottom: 20px;
        }

        .processo-step-icon i {
            color: #dc3545;
        }

        .processo-step h3 {
            color: #333;
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .processo-step p {
            color: #666;
            font-size: 16px;
            line-height: 1.6;
        }

        @media (max-width: 768px) {
            .processo-step {
                width: 100%;
            }
        }

        .preview-area img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }
    </style>

    <main id="main">
        <section id="processo-personalizacao" class="processo-personalizacao">
            <div class="container">
                <div class="section-title">
                    <h2>Processo de Personalização</h2>
                    <p>Veja como é simples personalizar seus brindes conosco</p>
                </div>
                <div class="processo-steps">
                    <div class="processo-step">
                        <div class="processo-step-icon">
                            <i class="fas fa-shopping-cart fa-2x"></i>
                        </div>
                        <h3>1. Escolha do Produto</h3>
                        <p>Explore nossa variedade de produtos personalizáveis para encontrar o item ideal.</p>
                    </div>
                    <div class="processo-step">
                        <div class="processo-step-icon">
                            <i class="fas fa-paint-brush fa-2x"></i>
                        </div>
                        <h3>2. Opções de Personalização</h3>
                        <p>Escolha cores, envie seu design ou selecione entre nossos modelos disponíveis.</p>
                    </div>
                    <div class="processo-step">
                        <div class="processo-step-icon">
                            <i class="fas fa-upload fa-2x"></i>
                        </div>
                        <h3>3. Envio de Arquivos</h3>
                        <p>Faça o upload de imagens, logotipos ou textos que deseja incluir no seu produto.</p>
                    </div>
                    <div class="processo-step">
                        <div class="processo-step-icon">
                            <i class="fas fa-search fa-2x"></i>
                        </div>
                        <h3>4. Visualização e Aprovação</h3>
                        <p>Visualize uma prévia digital do produto personalizado e faça ajustes, se necessário.</p>
                    </div>
                    <div class="processo-step">
                        <div class="processo-step-icon">
                            <i class="fas fa-cogs fa-2x"></i>
                        </div>
                        <h3>5. Ajustes Técnicos</h3>
                        <p>Nossa equipe realiza ajustes técnicos para garantir a qualidade da personalização.</p>
                    </div>
                    <div class="processo-step">
                        <div class="processo-step-icon">
                            <i class="fas fa-print fa-2x"></i>
                        </div>
                        <h3>6. Produção</h3>
                        <p>Seu pedido é encaminhado para produção usando técnicas avançadas de impressão.</p>
                    </div>
                    <div class="processo-step">
                        <div class="processo-step-icon">
                            <i class="fas fa-shipping-fast fa-2x"></i>
                        </div>
                        <h3>7. Envio Rápido</h3>
                        <p>Garantimos uma entrega rápida e segura do seu produto personalizado.</p>
                    </div>
                    <div class="processo-step">
                        <div class="processo-step-icon">
                            <i class="fas fa-hands-helping fa-2x"></i>
                        </div>
                        <h3>8. Atendimento ao Cliente</h3>
                        <p>Nossa equipe está disponível para fornecer suporte e assistência durante todo o processo.</p>
                    </div>
                    <div class="processo-step">
                        <div class="processo-step-icon">
                            <i class="fas fa-gift fa-2x"></i>
                        </div>
                        <h3>9. Brindes e Promoções</h3>
                        <p>Oferecemos brindes e promoções especiais para pedidos personalizados em quantidade.</p>
                    </div>
                    <div class="processo-step">
                        <div class="processo-step-icon">
                            <i class="fas fa-check-circle fa-2x"></i>
                        </div>
                        <h3>10. Satisfação Garantida</h3>
                        <p>Garantimos a qualidade e a satisfação com seu produto personalizado ou seu dinheiro de volta.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Passo 2: Opções de Personalização -->
        <div class="processo-step">
            <div class="processo-step-icon">
                <i class="fas fa-paint-brush fa-2x"></i>
            </div>
            <h3>2. Opções de Personalização</h3>
            <p>Escolha cores, envie seu design ou selecione entre nossos modelos disponíveis.</p>
            <label for="color">Selecione a cor:</label>
            <select id="color">
                <option value="vermelho">Vermelho</option>
                <option value="azul">Azul</option>
                <option value="verde">Verde</option>
                <!-- Adicione mais opções conforme necessário -->
            </select>
        </div>

        <!-- Passo 4: Visualização e Aprovação -->
        <div class="processo-step">
            <div class="processo-step-icon">
                <i class="fas fa-search fa-2x"></i>
            </div>
            <h3>4. Visualização e Aprovação</h3>
            <p>Veja uma prévia interativa do seu design personalizado antes de finalizar.</p>

            <!-- Área de Visualização Interativa -->
            <div id="previewArea" class="preview-area">
                <img id="previewImage" src="placeholder.jpg" alt="Visualização do produto">
            </div>

            <!-- Formulário de Opções -->
            <form id="optionsForm">
                <label for="color">Selecione a cor:</label>
                <select id="color">
                    <option value="vermelho">Vermelho</option>
                    <option value="azul">Azul</option>
                    <option value="verde">Verde</option>
                    <!-- Adicione mais opções conforme necessário -->
                </select>

                <label for="text">Texto personalizado:</label>
                <input type="text" id="text" placeholder="Digite seu texto">

                <button type="button" onclick="atualizarPreview()">Atualizar Visualização</button>
            </form>
        </div>

        <script>
            // Função para atualizar a visualização baseada nas opções selecionadas
            function atualizarPreview() {
                var selectedColor = document.getElementById('color').value;
                var customText = document.getElementById('text').value;

                // Exemplo simples de atualização da visualização (substitua com sua lógica específica)
                document.getElementById('previewImage').src = selectedColor + '.jpg';
                document.getElementById('previewImage').alt = customText;
            }
        </script>

        <!-- Novos Serviços -->
        <section id="additional-services" class="additional-services">
            <div class="container">
                <div class="section-title">
                    <h2>Serviços Adicionais</h2>
                    <p>Explore outros serviços que oferecemos para enriquecer sua experiência</p>
                </div>
                <div class="additional-services-list">
                    <div class="additional-service">
                        <div class="additional-service-icon">
                            <i class="fas fa-tshirt fa-2x"></i>
                        </div>
                        <h3>Personalização de Vestuário</h3>
                        <p>Oferecemos personalização de camisetas, bonés, jaquetas e muito mais. Ideal para eventos corporativos e equipes.</p>
                    </div>
                    <div class="additional-service">
                        <div class="additional-service-icon">
                            <i class="fas fa-mug-hot fa-2x"></i>
                        </div>
                        <h3>Canecas Personalizadas</h3>
                        <p>Crie canecas únicas com seu logotipo ou design. Perfeito para brindes e campanhas de marketing.</p>
                    </div>
                    <div class="additional-service">
                        <div class="additional-service-icon">
                            <i class="fas fa-calendar-alt fa-2x"></i>
                        </div>
                        <h3>Calendários e Agendas</h3>
                        <p>Personalize calendários e agendas com sua marca e mantenha seus clientes organizados e lembrando de você o ano todo.</p>
                    </div>
                    <div class="additional-service">
                        <div class="additional-service-icon">
                            <i class="fas fa-bag-shopping fa-2x"></i>
                        </div>
                        <h3>Sacolas Personalizadas</h3>
                        <p>Produzimos sacolas personalizadas para lojas, eventos e feiras. Ótimo para visibilidade da marca.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>

@endsection
