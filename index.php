<?php
include_once "controllers/ApiControllers.php";

$controller = new ApiController();

if (!isset($_GET['menu'])) {
    $controller->index();
} else {
    switch ($_GET['menu']) {
        case 'home':
            $controller->index();
            break;

        case 'simpan':
            $controller->create_data();
            break;

        case 'tampil-data':
            $controller->tampil_data();
            break;
        case 'data-detail':
            $controller->data_detail();
            break;
        case 'update-data':
            $controller->update_data();
            break;
        default:
            $controller->index();
            break;
    }
}
