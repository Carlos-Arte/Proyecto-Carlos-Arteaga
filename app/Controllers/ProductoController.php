<?php

namespace App\Controllers;

    use App\Models\ProductoModel;

class ProductoController extends BaseController
{

    private $productoModel;

    public function __construct() 
    {
        $this->productoModel = new ProductoModel();
    }


    public function index()
    {
        $db = \Config\Database::connect();
         $productos = $db->query('select * from productos')
            ->getResultArray(); 

        $data = [
            'productos' => $productos
        ];

        return view('productos/index', $data);
    }


    public function create()
    {
        return view('productos/create');
    }


    public function store()
    {
        $data = [
            'sku'        => $this->request->getPost('sku'),
            'nombre_producto'   => $this->request->getPost('nombre_producto'),
            'nombre_corto'        => $this->request->getPost('nombre_corto'),
            'descripcion' => $this->request->getPost('descripcion'),
            'imagen' => $this->request->getPost('imagen'),
            'precio_venta' => $this->request->getPost('precio_venta'),
            'precio_compra' =>$this->request->getPost('precio_compra')
            
        ];

        $this->productoModel->insert($data);

        return redirect()->to('productos');
    }

    public function edit($id){

        return view('productos/edit');
    }

}