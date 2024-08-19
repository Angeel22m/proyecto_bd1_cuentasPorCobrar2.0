<?php

class LoginController {
    public function login($username, $password) {
        // Verificar credenciales del usuario
        $user = 

        if ($user && password_verify($password, $user['password'])) {
            // Autenticación exitosa
            $json = array(
                "status" => 200,
                "detalle" => "Autenticación exitosa"
            );

            echo json_encode($json, true);
            return;
        } else {
            // Autenticación fallida
            $json = array(
                "status" => 401,
                "detalle" => "Credenciales incorrectas"
            );

            echo json_encode($json, true);
            return;
        }
    }
}