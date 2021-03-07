<?php

/**
 * CRUD Prototype Customer Modify as needed
 * Creates  GET @ /path, /path/{id}, - fetch,form for whole or for single
POST @ /path, /path/{id} - create & update
DELETE @ /path/{id} - delete for single
 */
\Tina4\Crud::route ("/admin/store/customers", new Customer(), function ($action, Customer $customer, $filter, \Tina4\Request $request) {
    switch ($action) {
        case "form":
        case "fetch":
            //Return back a form to be submitted to the create

            if ($action == "form") {
                $title = "Add Customer";
                $savePath =  TINA4_BASE_URL . "/admin/store/customers";
                $content = \Tina4\renderTemplate("/admin/store/customers/form.twig", []);
            } else {
                $title = "Edit Customer";
                $savePath =  TINA4_BASE_URL . "/admin/store/customers/".$customer->id;
                $content = \Tina4\renderTemplate("/admin/store/customers/form.twig", ["data" => $customer]);
            }

            return \Tina4\renderTemplate("components/modalForm.twig", ["title" => $title, "onclick" => "if ( $('#customerForm').valid() ) { saveForm('customerForm', '" .$savePath."', 'message'); $('#formModal').modal('hide');}", "content" => $content]);
            break;
        case "read":
            //Return a dataset to be consumed by the grid with a filter
            $where = "";
            if (!empty($filter["where"])) {
                $where = "{$filter["where"]}";
            }

            return   $customer->select ("*", $filter["length"], $filter["start"])
                ->where("{$where}")
                ->orderBy($filter["orderBy"])
                ->asResult();
            break;
        case "create":
            //Manipulate the $object here
            break;
        case "afterCreate":
            //return needed
            return (object)["httpCode" => 200, "message" => "<script>customerGrid.ajax.reload(null, false); showMessage ('Customer Created');</script>"];
            break;
        case "update":
            //Manipulate the $object here
            break;
        case "afterUpdate":
            //return needed
            return (object)["httpCode" => 200, "message" => "<script>customerGrid.ajax.reload(null, false); showMessage ('Customer Updated');</script>"];
            break;
        case "delete":
            //Manipulate the $object here
            break;
        case "afterDelete":
            //return needed
            return (object)["httpCode" => 200, "message" => "<script>customerGrid.ajax.reload(null, false); showMessage ('Customer Deleted');</script>"];
            break;
    }
});