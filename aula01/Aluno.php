<?php

declare(strict_types=1);

class Aluno 
{
	//atributos
	private string $nome; 
	private string $cpf; 
	
	public function __construct(string $novoNome, string $novoCPF) 
    {
        $this->nome = $novoNome;
        $this->valor = $novoCPF;
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
	
	public function setCPF(float $novoCPF): void
	{
		$this->cpf = $novoCPF;
	}
}