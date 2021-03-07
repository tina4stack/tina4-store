<?php


class Store extends \Tina4\Data
{

    public function dashboard(\Tina4\Response $response) {
        return $response (\Tina4\renderTemplate("@tina4store/admin/dashboard.twig"));
    }

}