<?php

declare(strict_types=1);

class Aluno 
{
	//atributos
	private string $nome; 
	private string $cargaHoraria; 

	public function __construct(string $novoNome, float $novaCargaHoraria)
    {
        $this->nome = $novoNome;
        $this->valor = $novaCargaHoraria;
    }

	//metodos
	public function getNome(): string
	{
		return $this->nome;
	}

	public function setNome(string $novoNome): void
	{
		$this-> nome = $novoNome;
	}

	public function getCargaHoraria(): string 
	{
		return $this->cargaHoraria;
	}

	public function setCargaHoraria(int $novaCargaHoraria): void
	{
		$this->cpf = $novaCargaHoraria;
	}
}	