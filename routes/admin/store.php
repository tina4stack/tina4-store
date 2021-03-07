<?php

\Tina4\Get::add("/store/dashboard", ["StoreHelper", "dashboard"]);

\Tina4\Get::add("/store/dashboard/landing", ["StoreHelper", "dashboardLanding"]);

\Tina4\Get::add("/store/customers", ["StoreHelper", "customers"]);

\Tina4\Get::add("/store/products", ["StoreHelper", "products"]);