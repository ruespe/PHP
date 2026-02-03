<?php
require_once __DIR__ . '/../models/Concerts.php';
require_once __DIR__ . '/../views/view.php';

class UsersController
{
    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new Concerts();
        $this->view = new View();
    }

    public function showAll()
    {
        $concerts = $this->model->selectAll();
        return $this->view->render($concerts, "Tots els Concerts");
    }

    public function searchByGrup($grup)
    {
        if (empty($grup)) {
            return $this->showAll();
        }
        $concerts = $this->model->selectByGrup($grup);
        return $this->view->render($concerts, "Concerts del grup: " . $grup);
    }

    public function searchByDates($data_inici, $data_fi)
    {
        if (empty($data_inici) || empty($data_fi)) {
            return $this->showAll();
        }
        $concerts = $this->model->selectByDates($data_inici, $data_fi);
        return $this->view->render($concerts, "Concerts entre " . $data_inici . " i " . $data_fi);
    }
}
