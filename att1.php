<?php

class Cidade {
    //Atributos
    private $nome;
    private $populacao;
    private $area;
    private $pib;

    //Métodos
    public function aumentarPopulacao($quantidade) {
        $this->populacao += $quantidade;
    }

    public function reduzirPopulacao($quantidade) {
        $this->populacao -= $quantidade;
    }

    public function getPibPerCapta() {
        $pibPerCapta = $this->pib / $this->populacao;
        return $pibPerCapta;
    }

    public function __toString() {
        $dados = sprintf("Nome: %s\nPopulação: %d\nÁrea:%dkm²\nPIB: R$ %d\n", 
            $this->nome, $this->populacao, $this->area, $this->pib);
        return $dados;
    }

    //GETs e SETs

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getPopulacao()
    {
        return $this->populacao;
    }

    public function setPopulacao($populacao): self
    {
        $this->populacao = $populacao;

        return $this;
    }

    public function getArea()
    {
        return $this->area;
    }

    public function setArea($area): self
    {
        $this->area = $area;

        return $this;
    }

    public function getPib()
    {
        return $this->pib;
    }

    public function setPib($pib): self
    {
        $this->pib = $pib;

        return $this;
    }
}

$sti = new Cidade();
$sti->setNome("Santa Terezinha de Itaipu")->setArea(268258)->setPopulacao(24262)->setPib(687400000);
$sti->aumentarPopulacao(20);
$sti->reduzirPopulacao(13);
echo $sti;
echo "PIB per capta: R$ " . $sti->getPibPerCapta() . "\n";
