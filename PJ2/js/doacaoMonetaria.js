const inputMesAno = document.getElementById('dateValido');
const valor = inputMesAno.value;
const regex = /^\d{2}\/\d{4}$/; // Expressão regular para formato "MM/AAAA" com números

if (regex.test(valor)) {
  const ano = valor.substring(4); // Obtém os últimos 4 caracteres (ano)
  const mes = valor.substring(0, 2); // Obtém os primeiros 2 caracteres (mês)

  console.log('Ano: ' + ano); // Exibe o ano no console
  console.log('Mês: ' + mes); // Exibe o mês no console
} else {
  console.log('Formato inválido'); // Exibe mensagem de erro no console
}
