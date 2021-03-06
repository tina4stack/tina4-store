<?php

\Tina4\Module::addModule("Store Module", "1.0.0", "tina4store", function(\Tina4\Config $config) {
    global $DBA;

    if (empty($DBA))
    {
        die("Please create a database for using the Store in your index.php file");
    }

    if (!$DBA->tableExists("stock")) {
        (new \Tina4\Migration(__DIR__."/migrations"))->doMigration();
    }
});
