<?php

namespace App\Controllers;

    use App\Models\ProveedorModel;

class ProveedorController extends BaseController
{

    private $proveedorModel;

    public function __construct() 
    {
        $this->proveedorModel = new ProveedorModel();
    }


    public function index()
    {
        $db = \Config\Database::connect();
        $proveedores = $db->query('select * from proveedores')
            ->getResultArray(); 

        $data = [
            'proveedores' => $proveedores
        ];

        return view('proveedores/index', $data);
    }


    public function create()
    {
        return view('proveedores/create');
    }


    public function store()
    {
        $data = [
            'nombre'        => $this->request->getPost('nombre'),
            'razon_social'   => $this->request->getPost('razon_social'),
            'tipo_productos'        => $this->request->getPost('tipo_productos')
        ];

        $this->proveedorModel->insert($data);

        return redirect()->to('proveedores');
    }

    public function edit($id){

        return view('proveedores/edit');
    }

}