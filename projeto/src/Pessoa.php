<?php

class Pessoa  {
   protected string $nome;
   protected string $cpf;

   public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }
    protected function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
    public function recuperaNome(): string
    {
        return $this->nome;
    }
    public function recuperaCpf(): string
    {
        return $this->cpf;
    }
}