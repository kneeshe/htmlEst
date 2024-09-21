function calculadora(){ //função para calcular a potencia do valor que o usuario inserir
    let pot = document.getElementById('val').value; //variavel para pegar o valor do input do usuario
    let res = pot ** 2; //calcula a exponenciação sobre 2
    document.getElementById('showResult').innerHTML = res; //localiza o elemento pelo id e mostra o resultado da variavel na div
}
