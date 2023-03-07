// Obtém o formulário
const form = document.querySelector('form');

// Adiciona um ouvinte de evento para o envio do formulário
form.addEventListener('submit', (event) => {
  // Impede o envio do formulário
  event.preventDefault();

  // Exibe uma mensagem de confirmação
  alert('Sua ordem de serviço foi enviada com sucesso!');
});
