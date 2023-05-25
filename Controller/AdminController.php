<?php
class AdminController
{
    private $model;

    public function __construct()
    {
        $this->model = new AdminModel();
    }

    public function index()
    {
        require_once("View/admin/dashboard.php");
    }

   

}