<?php
class Carro {
    // 🚩 RISCO: Atributo público permite valores ilegais
    private $modelo;
    private $velocidade;

    public function __construct($modelo, $velocidade) {
        $this->modelo = $modelo;
        $this->velocidade = $velocidade;
    }

    get velocidade
     public function getVelocidade()
    {
        return $this->velocidade;
    }

    get modelo
     public function getModelo()
    {
        return $this->modelo;
    }

    public function $novaVelocidade()
    {
        if(novaVelocidade > 0 && novaVelocidade < 201)
    }
}

// --- TESTE DO VEÍCULO ---
$meuCarro = new Carro("Senai-Mobile", 0);

// O desastre: alteração direta sem validação
$meuCarro->velocidade = 200;
$meuCarro->velocidade = 0;

echo "Modelo: " . $meuCarro->modelo . "<br>";
echo "Velocidade atual: " . $meuCarro->velocidade . " km/h";
?>
