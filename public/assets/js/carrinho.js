// carrinho.js

document.addEventListener('DOMContentLoaded', function() {
    exibirCarrinho();
});

// Função para exibir o carrinho na página
function exibirCarrinho() {
    let carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];
    let carrinhoContainer = document.getElementById('carrinho-container');

    carrinhoContainer.innerHTML = ''; // Limpa o conteúdo anterior

    carrinho.forEach((item, index) => {
        let itemHTML = `
            <div class="item-carrinho">
                <span>${item.nome}</span>
                <span>R$ ${item.preco.toFixed(2)}</span>
                <span>Quantidade: ${item.quantidade}</span>
                <button onclick="removerDoCarrinho(${index})">Remover</button>
            </div>
        `;
        carrinhoContainer.innerHTML += itemHTML;
    });
}

// Função para remover item do carrinho
function removerDoCarrinho(index) {
    let carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];
    carrinho.splice(index, 1);
    localStorage.setItem('carrinho', JSON.stringify(carrinho));
    exibirCarrinho(); // Atualiza a exibição do carrinho após remover o item
}
