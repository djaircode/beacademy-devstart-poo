<?php

declare(strict_types=1);

$a = 123;

class Curso 
{
	public string $nome;
	public string $descricao;
	public int $cargaHoraria;
	
	public function __construct(string $novoNome, string $novaDescricao, int $novaCargaHoraria) 
    {
        $this->nome = $novoNome;
        $this->descricao = $novaDescricao;
        $this->cargaHoraria = $novaCargaHoraria;
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

	public function getDescricao(): string 
	{
		return $this->descricao;
	}

	public function setDescricao(string $novaDescricao): void
	{
		$this->descricao = $novaDescricao;
	}

	public function getCargaHoraria(): int
	{
		return $this->cargaHoraria;
	}

	public function setCargaHoraria(string $novaCargaHoraria): void
	{
		$this->cargaHoraria = $novaCargaHoraria;
	}
}