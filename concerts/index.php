<?php
require_once __DIR__ . '/controllers/UsersController.php';
require_once __DIR__ . '/controllers/AdminController.php';

$userController = new UsersController();
$adminController = new AdminController();

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'list';

switch ($action) {
    case 'list':
        echo $userController->showAll();
        break;
    case 'search_grup':
        $grup = isset($_GET['grup']) ? $_GET['grup'] : '';
        echo $userController->searchByGrup($grup);
        break;
    case 'search_dates':
        $data_inici = isset($_GET['data_inici']) ? $_GET['data_inici'] : '';
        $data_fi = isset($_GET['data_fi']) ? $_GET['data_fi'] : '';
        echo $userController->searchByDates($data_inici, $data_fi);
        break;
    case 'add':
        echo $adminController->addConcert($_POST);
        break;
    case 'update':
        $id_concert = isset($_POST['id_concert']) ? $_POST['id_concert'] : '';
        $sala = isset($_POST['sala']) ? $_POST['sala'] : '';
        echo $adminController->updateSala($id_concert, $sala);
        break;
    default:
        echo $userController->showAll();
        break;
}
