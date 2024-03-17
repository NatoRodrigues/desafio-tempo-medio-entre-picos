<?php

class TempoMedioEntrePicos
{
    private $dados;

    public function __construct($dados)
    {
        $this->dados = $dados;
    }

    public function calcularTempoMedio()
    {
        $picos = [];
        $n = count($this->dados);

        // Identifica os picos verdadeiros
        for ($i = 1; $i < $n - 1; $i++) {
            if ($this->dados[$i] > $this->dados[$i - 1] && $this->dados[$i] > $this->dados[$i + 1] && $this->dados[$i] >= 50) {
                $picos[] = $i;
            }
        }

        $numPic = count($picos);
        $somaTempos = 0;

        // Calcula a soma dos tempos entre os picos
        for ($i = 1; $i < $numPic; $i++) {
            $tempoEntrePicos = $picos[$i] - $picos[$i - 1];
            $somaTempos += $tempoEntrePicos;
        }

        // Calcula o tempo médio entre os picos
        if ($numPic > 1) {
            $tempoMedio = round($somaTempos / ($numPic - 1));
        } else {
            $tempoMedio = 0;
        }

        // Converte o tempo médio para minutos e segundos
        $minutos = floor($tempoMedio / 60);
        $segundos = $tempoMedio % 60;

        return sprintf("%02d:%02d", $minutos, $segundos); // Formato de minutos e segundos
    }
}

// Dados de exemplo
$dados = [20, 30, 55, 70, 90, 60, 55, 40, 30, 60, 80, 55, 20, 40, 9, 15,
          70, 60, 90, 45, 55, 35, 70, 10, 50, 70, 45, 80, 25, 35, 65, 75];

// Mesclar os três conjuntos de dados em um único array

// Calcular o tempo médio entre os picos para os três conjuntos de dados juntos
$tempoMedioPicos = new TempoMedioEntrePicos($dados);
$tempoMedio = $tempoMedioPicos->calcularTempoMedio();

// Gerar o array de dados formatado para JSON
$labels = array_map(function ($i) { return $i + 1; }, array_keys($dados));

$data = [
    'labels' => $labels,
    'data' => $dados,
    'tempoMedio' => $tempoMedio
];

// Retornar os dados formatados em JSON
header('Content-Type: application/json');
echo json_encode(['dados' => $data]);
?>
