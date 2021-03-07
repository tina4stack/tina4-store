<?php


class StoreHelper extends \Tina4\Data
{

    public function dashboard(\Tina4\Response $response) {
        return $response (\Tina4\renderTemplate("@tina4store/admin/dashboard.twig"));
    }

    public function dashboardLanding(\Tina4\Response $response) {

        return $response("Implement");
    }

    public function customers(\Tina4\Response $response) {

        return $response (\Tina4\renderTemplate("/admin/store/customers/grid.twig"), HTTP_OK, TEXT_HTML);

    }

    public function products(\Tina4\Response $response) {

        return $response("Implement");
    }

}