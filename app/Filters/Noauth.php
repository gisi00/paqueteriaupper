<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Cookie\Cookie;

use App\Models\IngresoModel;

class Noauth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        
        helper('cookie');
        $cookie = get_cookie('galleta_token',true);
        $id_cookie = get_cookie('galleta_id',true);

        //die(var_dump($id_cookie));

        $this->ingreso = new IngresoModel();
        $datos_usuario = $this->ingreso
        ->where('token',$cookie)
        ->where('id',$id_cookie)->countAllResults();
        
        if($datos_usuario == 1){
            $variable_cookie = true;
            $datos = $this->ingreso->where('id',$id_cookie)->first();

            $session = session();
            $session->set("ingreso",true);
            $session->set("id_privilegio", $datos['id_privilegio']);
            $session->set("id",$id_cookie);
        
        }else{
            $variable_cookie = false;
        }

        $session = session();
        if(($session->ingreso)||($variable_cookie))
            return redirect()->to('principal');

    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}