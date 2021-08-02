<?php

namespace Source\Models;

use Source\Database\Model;

class Devs  extends Model
{
   
    public function __construct()
    {
        parent::__construct("devs", ["id"], ["nome", "stacks_usadas", "linkedin", "github","ano_mercado","email"]);
    }

    
    public function bootstrap(string $nome, string $stacksUsadas ,string $linkedin, string $github,int $anoMercado, string $email): ?Devs 
    {
        $this->nome=$nome;
        $this->stacks_usadas=$stacksUsadas;
        $this->linkedin=$linkedin;
        $this->github=$github;
        $this->ano_mercado=$anoMercado;
        $this->email=$email;
        return $this;
    }

    public function findByEmail(string $email, string $columns = "*"): ?Devs
    {
        $find = $this->find("email = :email", "email={$email}", $columns);
        return $find->fetch();
    }
 
}