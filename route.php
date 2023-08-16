<?php

require 'controller/Controller.php';
require 'controller/LopController.php';
require 'controller/SinhVienController.php';


$controller = $_GET['controller'] ?? 'base';
$action = $_GET['action'] ?? 'index';

switch ($controller) {
    case 'base':
        (new Controller())->menu();
        break;
    case 'sinhvien':
        switch ($action) {
            case 'index':
                (new SinhVienController())->index();
                break;
            case 'create':
                (new SinhVienController())->create();
                break;
            case 'store':
                (new SinhVienController())->store();
                break;
            case 'edit':
                (new SinhVienController())->edit();
                break;
            case 'update':
                (new SinhVienController())->update();
                break;
            case 'delete':
                (new SinhVienController())->delete();
                break;
            default:
                echo 'action sv not implemented';
                break;
        }
        break;
    case 'lop':
        switch ($action) {
            case 'index':
                (new LopController())->index();
                break;
            case 'create':
                (new LopController())->create();
                break;
            case 'store':
                (new LopController())->store();
                break;
            case 'edit':
                (new LopController())->edit();
                break;
            case 'update':
                (new LopController())->update();
                break;
            case 'delete':
                (new LopController())->delete();
                break;
            default:
                echo 'action lop not implemented';
                break;
        }
        break;
    default:
        echo 'controller not implemented';
        break;
}


