<?php

namespace app\controllers;

class Cliente
{
    public function insert($request, $response, $args)
    {
    }

    public function update($request, $response, $args)
    {
        var_dump(filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        $id = (string) ($args['id']);
        $response->getBody()->write(
            json_encode(
                array(
                    'id' => $id,
                    "status" => false
                )
            )
        );
        return $response;
    }

    public function delete($request, $response, $args)
    {
    }
}
