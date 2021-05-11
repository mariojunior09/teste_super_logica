<?php

class TesteSuperLogica
{

    public function cadastrar()
    {
        $informacao = $this->select($informacao);
        if ($this->validaCamposNull($informacao)) {
            return $this->validaCamposNull();
        }

        if (!$this->validaCep($informacao)) {
            return  json_encode(array(
                'Erro' => 'falha ao cadastrar',
                'message' => "CEP invalido"
            ));
        }

        if ($this->validaFone($informacao)) {
            return  json_encode(array(
                'Erro' => 'falha ao cadastrar',
                'message' => 'O numero de telefone e  invalido'
            ));
        }
        if (!$this->validaEmail($informacao->email)) {
            return  json_encode(array(
                "Erro" => 'falha ao cadastrar',
                'message' => 'Email  invalido'
            ));
        }
        if (!$this->validaSenha($informacao->password)) {
            return  json_encode(array(
                "Erro" => 'falha ao cadastrar',
                'message' => 'Senha (8 caracteres mínimo, contendo pelo menos 1 letra e 1 número):'
            ));
        } else {
            return    json_encode(array('sucesso' => 'Cadastro realizado co sucesso'));
        }
    }

    public function validaCamposNull($dados)
    {


        if (empty($dados->userName)) {

            return  json_encode(array(
                "Erro" => 'falha ao cadastrar',
                'message' => 'O campo Nome usuario deve ser preenchido.'
            ));
        }

        if (empty($dados->zipCode)) {
            return  json_encode(array(
                "Erro" => 'falha ao cadastrar',
                'message' => 'O campo CEP deve ser preenchido.'
            ));
        }

        if (empty($dados->phoneNumber)) {
            return  json_encode(array(
                "Erro" => 'falha ao cadastrar',
                'message' => 'O campo Número do telefone: deve ser preenchido.'
            ));
        }

        if (empty($dados->email)) {
            return  json_encode(array(
                "Erro" => 'falha ao cadastrar',
                'message' => 'O campo  Email deve ser preenchido.'
            ));
        }

        if (empty($dados->password)) {
            return  json_encode(array(
                "Erro" => 'falha ao cadastrar',
                'message' => 'O campo  Senha  deve ser preenchido.'
            ));
        }
    }


    public function validaCep($zipCode)
    {
        $cep = trim($zipCode);
        $avaliaCep = mb_ereg("^[0-9]{5}-[0-9]{3}$", $cep);
        return $avaliaCep ? true : false;
    }
    public function validaFone($phoneNumber)
    {
        $regex = '/^(?:(?:\+|00)?(55)\s?)?(?:\(?([1-9][0-9])\)?\s?)?(?:((?:9\d|[2-9])\d{3})\-?(\d{4}))$/';
        return  preg_match($regex, $phoneNumber) == false ? true : false;
    }

    public function validaEmail($email)
    {
        $filterEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
        return filter_var($filterEmail, FILTER_VALIDATE_EMAIL) ? true : false;
    }
    public function  validaSenha($password)
    {
        $regex = '/^(?=.*\d)(?=.*[a-z\A-Z])[0-9a-zA-Z$*&@#]{8,}$/';
        return preg_match($regex, $password) ? true : false;
    }
}

$send = new TesteSuperLogica();
print_r($send->cadastrar());
