<?php
require_once __DIR__ . '/../models/Concerts.php';
require_once __DIR__ . '/../views/view.php';

class AdminController
{
    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new Concerts();
        $this->view = new View();
    }

    public function addConcert($data)
    {
        if (empty($data['grup']) || empty($data['ciutat']) || empty($data['sala']) || empty($data['data']) || empty($data['hora'])) {
            $concerts = $this->model->selectAll();
            return $this->view->render($concerts, "Tots els Concerts");
        }

        $this->model->insert($data);
        $concerts = $this->model->selectAll();
        return $this->view->render($concerts, "Tots els Concerts");
    }

    public function updateSala($id_concert, $sala)
    {
        if (empty($id_concert) || empty($sala)) {
            $concerts = $this->model->selectAll();
            return $this->view->render($concerts, "Tots els Concerts");
        }

        $this->model->update(['id_concert' => $id_concert, 'sala' => $sala]);
        $concerts = $this->model->selectAll();
        return $this->view->render($concerts, "Tots els Concerts");
    }
}
