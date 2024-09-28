function calculadora(){ //função para calcular a potencia do valor que o usuario inserir
    let pot = document.getElementById('val').value; //variavel para pegar o valor do input do usuario
    let res = pot ** 2; //calcula a exponenciação sobre 2
    document.getElementById('showResult').innerHTML = res; //localiza o elemento pelo id e mostra o resultado da variavel na div
}

function validaForm(){ //função para validar os inputs dos usuarios
    const nome = document.getElementById("nome").value; //variavel imutavel. const = constante
    const endereco = document.getElementById("endereco").value; //variavel para instanciar o input no arquivo de html
    const email = document.getElementById("email").value;

    let erroNome = document.getElementById("erro-nome"); //variavel que sera chamada no span caso ela passe pela estrutura de decisão
    let erroEnd = document.getElementById("erro-endereco"); 
    let erroEmail = document.getElementById("erro-email"); 

    erroNome.textContent = ""; //atribui valor vazio a variavel
    erroEnd.textContent = ""; 
    erroEmail.textContent = ""; 

    let estaValido = true; //variavel booleana

    if(nome === "" || /\d/.test(nome)){ //testa se a variavel nome está vazia ou se está com numeros
        erroNome.textContent = "Por favor, entre com um nome valido"; //informa a mensagem de erro
        estaValido = false; //altera o estado da variavel de true para false
    } 

    if(endereco === ""){ //verifica se o campo esta vazio
        erroEnd.textContent = "Por favor, entre com um endereço valido"; 
        estaValido = false; 
    } 

    if(email === "" || !email.includes("@")){ //verificar se o campo esta vazio ou se o email é valido. a exclamação representa o not
        erroEmail.textContent = "Por favor, entre com um email valido"; 
        estaValido = false; 
    } 

    return estaValido; //retorna a variavel 
}; 
