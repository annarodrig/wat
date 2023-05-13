// Conecta-se ao banco de dados
const conexao = new XMLHttpRequest();
conexao.open('GET', 'consulta.php', true);
conexao.send();

// Executa uma consulta
conexao.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    const resultado = JSON.parse(this.responseText);
    exibirResultado(resultado);
  }
}

function exibirResultado(resultado) {
    const select1 = document.getElementById('select1');
    const select2 = document.getElementById('select2');
    const divResultado = document.getElementById('resultado');
  
    // Verifica se ambas as tags select possuem opções selecionadas
    if (select1.value != "" && select2.value != "") {
      const opcao1 = select1.value;
      const opcao2 = select2.value;
  
      // Filtra o resultado de acordo com as opções selecionadas
      const resultadoFiltrado = resultado.filter(function(item) {
        return item.coluna1 == opcao1 && item.coluna2 == opcao2;
      });
  
      // Exibe o resultado na div
      divResultado.innerHTML = resultadoFiltrado.map(function(item) {
        return item.coluna1 + ' - ' + item.coluna2;
      }).join('<br>');
    } else {
      divResultado.innerHTML = '';
    }
  }
  