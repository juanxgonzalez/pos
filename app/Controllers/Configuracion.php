<?php
namespace App\Controllers;


use App\Controllers\BaseController;
use App\Models\ConfiguracionModel;

class Configuracion extends BaseController
{
    protected $configuracion;
    protected $reglas;
    public function __construct()
    {
        $this->configuracion = new ConfiguracionModel();
        helper(['form']);
        $this->reglas = [
            'tienda_nombre' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'El campo {field} es obligatorio.',
                ]
            ],
            'tienda_rfc' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'El campo {field} es obligatorio.',
                ]
            ],
           
        ];
    }
    public function index($activo=1)
    {
        $nombre = $this->configuracion->where('nombre','tienda_nombre')->first();
        $rfc = $this->configuracion->where('nombre','tienda_rfc')->first();
        $telefono = $this->configuracion->where('nombre','tienda_telefono')->first();
        $email = $this->configuracion->where('nombre','tienda_email')->first();
        $direccion = $this->configuracion->where('nombre','tienda_direccion')->first();
        $leyenda = $this->configuracion->where('nombre','ticket_leyenda')->first();
        $data = ['titulo' => 'Configuración', 'nombre' => $nombre, 'rfc' => $rfc, 'telefono' => $telefono, 'email' => $email, 'direccion' => $direccion, 'leyenda' => $leyenda];
        echo view('header');
        echo view('configuracion/configuracion',$data);
        echo view('footer'); 
    }
    
    public function actualizar()
    {
        if($this->request->getPost() && $this->validate($this->reglas)){
            $this->configuracion->update($this->request->getPost('id'), ['nombre' => $this->request->getPost('nombre'), 'nombre_corto' => $this->request->getPost('nombre_corto')]);
            return redirect()->to(base_url().'configuracion');
        if($this->request->getPost() && $this->validate($this->reglas))
        $this->configuracion->update($this->request->getPost('id'), ['nombre' => $this->request->getPost('nombre'), 'nombre_corto' => $this->request->getPost('nombre_corto')]);
        return redirect()->to(base_url().'configuracion');
        } else {
            //return $this->editar($this->request->getPost('id'), $this->validator);
        }
    }

}
?>