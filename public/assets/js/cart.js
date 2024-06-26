// cart.js

let cartItems = []; // Array para armazenar os itens no carrinho

// Função para adicionar um item ao carrinho
function addToCart(item) {
    cartItems.push(item);
    updateCartDisplay();
}

// Função para calcular o total do carrinho
function calculateTotal() {
    let total = 0;
    for (let item of cartItems) {
        total += item.price; // Supondo que cada item tem um preço (você pode ajustar isso conforme necessário)
    }
    return total;
}

// Função para atualizar a exibição do carrinho
function updateCartDisplay() {
    let total = calculateTotal();
    document.getElementById('cart-icon').innerHTML = `<i class="fas fa-shopping-cart"></i> Total: $${total.toFixed(2)}`;
}

// Exemplo de uso:
// Adicionar um item ao carrinho quando o ícone do carrinho é clicado
document.getElementById('cart-icon').addEventListener('click', function(event) {
    event.preventDefault(); // Impedir o comportamento padrão do link
    let newItem = { name: 'Product Name', price: 10 }; // Exemplo de um item (substitua com dados reais)
    addToCart(newItem);
});
