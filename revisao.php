<?php

//============================================
//                atividade 1
//============================================


$a = "10";
$b = 10;
$c = 10;

echo "1. " . ($a == $b ? 'true' : 'false') . "<br>";
echo "2. " . ($a === $b ? 'true' : 'false') . "<br>";
echo "3. " . ($b == $c ? 'true' : 'false') . "<br>";
echo "4. " . ($b === $c ? 'true' : 'false') . "<br>";

//explicação
//o `==` verifica apenas se os valores são iguais
//'===` ele verifica o valor e também o tipo de dado, como a variavel $a é uma string e $b é um número inteiro, eles não são parecidos e por isso ele retonra false.


//============================================
//                atividade 2
//============================================

//esse eu pesquisei no youtube já que não pode o tal do claudê, fui alem do que pensei kkk
$quantidade = 0; //essa variável é para contar os múltiplos

for ($i = 3; $i <= 30; $i++) {
    if ($i % 3 == 0) {
        echo $i . " ";
        $quantidade++; // aumenta 1 na quantidade
    }
}

echo "<br>quantidade total: " . $quantidade;

//============================================
//                atividade 3
//============================================

function areaRetangulo($base, $altura) {
    if ($base < 0 || $altura < 0) {
        return "Valores inválidos";
    } //verifica se os valores estão negativos 
    return $base * $altura; //retorna a area do retangulo
}

$area1 = areaRetangulo(5, 10); //para chamar a função e passa os valores para calcular 
$area2 = areaRetangulo(3, 7);
$area3 = areaRetangulo(-2, 5);

echo "Area 1: " . $area1 . "<br>"; 
echo "Area 2: " . $area2 . "<br>";
echo "Area 3: " . $area3 . "<br>";

//============================================
//                atividade 4
//============================================

$dia = 2; //

switch ($dia) {
    case 1:
        echo "SEGUNDA: Frango grelhado";
        break;
    case 2:
        echo "TERÇA: Fricasse";
        // break; ta comentado porque pediu pra tirar mas deixei ele.
        echo "QUARTA: Feijoada";
        break;
    case 4:
        echo "QUINTA: Carne de panela";
        break;
    case 5:
        echo "SEXTA: Strogonoff";
        break;
    case 6:
    case 7:
        echo "SÁBADO / DOMINGO: Restaurante fechado";
        break;
    default:
        echo "Dia inválido";
        break;
}

//o break foi usado porque o switch precisa dele para parar , se não colocar ele, ele ignora os outros cases e continua executando o proximo case, mesmo que não seja o correto


//============================================
//                atividade 5
//============================================

$participantes = [
    ["nome" => "walacy", "pontos" => 333],
    ["nome" => "rafael", "pontos" => 1506], //eu sempre no topo da classe humana 
    ["nome" => "gabriel", "pontos" => 777]
];

// usando usort para ordenar do maior para o menor pontuaçaõ
usort($participantes, function($a, $b) {
    return $b['pontos'] <=> $a['pontos'];
});

$posicao = 1; //

foreach ($participantes as $pessoa) {
    echo $posicao . "º lugar: " . $pessoa['nome'] . " com " . $pessoa['pontos'] . " pontos<br>";
    $posicao++; //oua esse deu trabalho
}


//============================================
//                atividade 6
//============================================


$itens = ["Teclado", "Mouse", "Monitor", "Cabo HDMI", "Headset"];

foreach ($itens as $item) {
    if ($item == "Cabo HDMI") {
        continue; // esse comando faz o laço pular para o proximo
    }
    echo $item . "<br>";
}

//============================================
//                atividade 7
//============================================

/*
$id = $_GET['id'] ?? 'Não informado';
$categoria = $_GET['categoria'] ?? 'Não informada';

echo "Produto {$id} da categoria {$categoria}" . "<br>";
*/

//============================================
//                atividade 8
//============================================

class Veiculo {
    public float $quilometragem = 0;

    public function rodar(float $km): void {
        if ($km > 0) {
            $this->quilometragem += $km;
        }
    }

    public function exibirQuilometragem(): string {
        return "Quilometragem atual: {$this->quilometragem} km";
    }
}

$meuCarro = new Veiculo();
$meuCarro->rodar(166);
$meuCarro->rodar(92.5);
echo $meuCarro->exibirQuilometragem();

//============================================
//                atividade 9
//============================================


/*
class Funcionario {
    public $nome;
    protected $salario;
    private $senhaAcesso = "123456";

    public function __construct($nome, $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }
}

class Gerente extends Funcionario {
    public function exibirResumo() {
        return "Nome: $this->nome, Salário: $this->salario";
    }

    public function tentarAcessarSenha() {
        return $this->senhaAcesso; 
    }
}

class Diretor {
    public function tentarAcessarSalario(Funcionario $f) {
        return $f->salario; 
    }
}


$gerente = new Gerente("Gabriel", 5000);

echo $gerente->exibirResumo() . "<br"; 

echo "Senha: " . $gerente->tentarAcessarSenha() . "<br"; 
*/

?>/