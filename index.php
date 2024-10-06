<!DOCTYPE html>
<htmll>
    <head>
        <title> Titulo do Site </title>
    </head>
    <body>
        <?php //inicio do codigo em php
			//toda variavel em php começa com $.
            $cor = "vermelho"; //definição de uma variavel em string.
            $ano = 2003; //definição de uma variavel em int(eira).
			$pi = 3.14; //definição de uma variavel float.
            $verdadeiro = true; //definição de uma variavel booleana.

			//array de multiplos tipos
            $arranjo = [2, "oi", 56]; //array com valores de int e string.
			
			//para imprimir na tela, é usado o comando echo.
            echo "meu carro é: ".$cor."<br>"; //para concatenar, é usado um ponto(.).
            echo $ano;
            echo "<br>"; //pula uma linha.
            var_dump($cor);
            echo "<br>";
            var_dump($ano); //imprime na tela o tipo da variavel - se é int, float, string, etc.
            echo "<br>";
            var_dump($verdadeiro);
            echo "<br>";
            var_dump($arranjo);
            echo "<br>";
            var_dump(3.14);
            echo "<br><br>"; //pula duas linhas.
			
            $carros = ["Celta", "Vectra", "BYD", "Mustang"]; //vetor com apenas strings.
            echo "<br> <hr> <br>"; //pula uma linha, adiciona um risco na tela e pula outra linha.
            for($i = 0; $i < 4; $i++) { //o for é usado como contador para navegar no vetor pelos indices.
                echo $carros[$i];
                echo "<br>";
            }
			
            echo "<br><br>";
            
			$livros = [
                "as cronicas de gelo e fogo",
                "jurassic park",
                "eu sou a lenda",
                "dracula",
                "frankenstein",
                "laranja mecanica"
            ];
			
            foreach ($livros as $livro) { //contador que imprime todos os elementos dentro de um vetor.
                echo "$livro <br>";
            }
            echo "<br><br>";
			
            $genero = ["M", "F", "L", "G", "B", "T"];
            $i = 0;
            while($i < count($genero)) { //laço while. enquanto i for menor que o numero de elementos dentro do vetor, o laço roda.
                $g = $genero[$i]; //cria uma variavel local associando ela ao vetor.
                if ($g == "M" || $g == "F"){ //se o laço encontrar os elementos iguais, ele para o loop.
                    echo $g;
                    echo "<br>";
                }
                echo "<br>";
                $i++; //incrementa a contagem do elemento i.
            }
        ?> //fim do bloco de codigo do php.
    </body>
</html>