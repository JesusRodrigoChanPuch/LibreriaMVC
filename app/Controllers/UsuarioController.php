<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsuariosModel;
use CodeIgniter\HTTP\Request;
use PHPUnit\Framework\MockObject\Verifiable;

class UsuarioController extends Controller
{ // vistas 
    public function index()
    // funcion para la vista de iniciar sesion
    {

        $datos['cabecera'] = view('cuerpo/cabecera');
        $datos['PiePagina'] = view('cuerpo/PiePagina');
        return view('iniciarSesionViews', $datos);
    }
    public function registrarse()
    // funcion para la vista de registrarse
    {

        $datos['cabecera'] = view('cuerpo/cabecera');
        $datos['PiePagina'] = view('cuerpo/PiePagina');
        return view('registrarseViews', $datos);
    }
    // fin de vistas
    // inicio de funcionalidad(peticion ala base de datos)
    public function iniciar()
    {
        echo "en proceso de acceso";
    }
    public function registro()
    // esta funcion es para registar los datos del usuario
    {
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'nombres' => 'required',
            'correo' => 'required|valid_email|is_unique[usuarios.correo]',
            'contrasena' => 'required|min_length[5]|max_length[20]',
            'confContrasena' => 'required|min_length[5]|max_length[20]|matches[contrasena]'
        ]);
        $validation->withRequest($this->request)->run();
        if ($validation->withRequest($this->request)->run()) {
            echo $validation->getError();
        }
        exit();
    }
    // fin de Funccionalidad
}
