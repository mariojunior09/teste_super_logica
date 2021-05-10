<?php

class TesetSuperLogica
{

    public function cadastrar()
    {

        if (!$this->validaCep()) {
            return  json_encode(array(
                'Erro' => 'falha ao cadastrar',
                'message' => "CEP invalido"
            ));
        }

        if ($this->validaFone()) {
            return  json_encode(array(
                'Erro' => 'falha ao cadastrar',
                'message' => 'O numero de telefone e  invalido'
            ));
        }
        if (!$this->validaEmail()) {
            return  json_encode(array(
                "Erro" => 'falha ao cadastrar',
                'message' => 'Email  invalido'
            ));
        }
        if (!$this->validaSenha()) {
            return  json_encode(array(
                "Erro" => 'falha ao cadastrar',
                'message' => 'Senha (8 caracteres mínimo, contendo pelo menos 1 letra e 1 número):'
            ));
        } else {
            return    json_encode(array('sucesso' => 'Cadastro realizado co sucesso'));
        }
    }

    public function validaCep()
    {
        $cep = trim($informacao->zipCode);
        $avaliaCep = mb_ereg("^[0-9]{5}-[0-9]{3}$", $cep);
        if ($avaliaCep) {
            return true;
        } else {
            return false;
        }
    }
    public function validaFone()
    {
        $regex = '/^(?:(?:\+|00)?(55)\s?)?(?:\(?([1-9][0-9])\)?\s?)?(?:((?:9\d|[2-9])\d{3})\-?(\d{4}))$/';

        if (preg_match($informacao->phoneNumber) == false) {

            return true;
        } else {

            return false;
        }
    }

    public function validaEmail()
    {

        $email = filter_var($informacao->email, FILTER_SANITIZE_EMAIL);

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }
    public function  validaSenha()
    {
        $regex = '/^(?=.*\d)(?=.*[a-z\A-Z])[0-9a-zA-Z$*&@#]{8,}$/';
        if (preg_match($informacao->password) == false) {

            return false;
        } else {

            return true;
        }
    }
}

$informacao = new TesetSuperLogica();
print_r($informacao->cadastrar());
