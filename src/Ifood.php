<?php

namespace Iagoronanvs;

class Ifood {
    private $menu;

    function __construct($account) {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://wsloja.ifood.com.br/ifood-ws-v3/v1/merchants/".$account."/catalog");

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "access_key: 69f181d5-0046-4221-b7b2-deef62bd60d5",
            "secret_key: 9ef4fb4f-7a1d-4e0d-a9b1-9b82873297d8"
        ]);

        $response = curl_exec($ch);

        curl_close($ch);

        $response = json_decode($response);

        $this->menu = $response;
    }

    public function menu() {
        return $this->menu->data->menu;
    }
}