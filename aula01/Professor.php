<?php

declare(strict_types=1);

class Professor 
{
	public string $nome;
	public string $cpf;
	public float $salario;
	
	public function __construct(string $novoNome, string $novoCPF, float $novoSalario) 
    {
        $this->nome = $novoNome;
        $this->cpf = $novoCPF;
        $this->salario = $novoSalario;
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

	public function getCPF(): string 
	{
		return $this->cpf;
	}

	public function setCPF(string $novoCPF): void
	{
		$this->cpf = $novoCPF;
	}

	public function getSalario(): float 
	{
		return $this->salario;
	}

	public function setSalario(float $novoSalario): void
	{
		$this->salario = $novoSalario;
	}
}