<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules

    public $usuario = [
        'nombre'=> 'required|min_length[3]|max_length[8]',
        'correo'=> 'required|valid_email|is_unique[usuarios.correo]'
     ];

    public $usuario_validacion = [
        'nombre'=> 'required|min_length[3]|max_length[13]',
        'correo'=> 'required|valid_email'
     ];

    public $valida_imagen = ['imagen'=>['mime_in[imagen,image/jpg,image/jpeg,image/gif,image/png]']
    ];

    /*
    public $perfiles = [
        'correo'=> 'required|valid_email|is_unique[ingreso.correo]',
        'contrasena'=> 'required',
        'pass_confirm'=>'required|matches[contrasena]',
        'privilegio'=> 'required|is_natural_no_zero'
    ];
    */

    public $perfiles = [
        'correo' =>[
            'label'=>'correo de usuario',
            'rules'=> 'required|valid_email|is_unique[ingreso.correo]',
            'errors'=>[
                'required'=>'Recuerda que {field} es abligatorio',
                'is_unique'=> 'Ya existe un correo similar registrado'
            ]
        ],
        'contrasena'=> [
            'label'=> 'contraseña',
            'rules'=> 'required'
        ],
        'pass_confirm'=>[
            'label'=> 'Confirmar contraseña',
            'rules'=> 'required|matches[contrasena]',
            'errors'=>[
                'required'=>'Recuerda que {field} es obligatorio',
                'matches'=>'Los compos contraseña y {field} deben coincidir'
            ]
        ],
        'privilegio'=>[
            'label'=>'privilegio',
            'rules'=>'required|is_natural_no_zero',
            'errors'=>[
                'is_natural_no_zero'=>'Elija una privilegio para el nuevo usuario'
            ]
        ]
    ];    


    public $perfiles_edita = [
        'correo' =>[
            'label'=>'correo de usuario',
            'rules'=>'required|valid_email',
            'errors'=>[
                'required'=>'Recuerda que {field} es abligatorio',
                'is_unique'=> 'Ya existe un correo similar registrado'
            ]
        ],
        
        'privilegio'=>[
            'label'=>'privilegio',
            'rules'=>'required|is_natural_no_zero',
            'errors'=>[
                'is_natural_no_zero'=>'Elija una privilegio para el nuevo usuario'
            ]
        ]
    ];

        public $actualiza_contrasena = [

        'contrasena'=> [
            'label'=> 'contraseña',
            'rules'=> 'required'
        ],
        'pass_confirm'=>[
            'label'=> 'Confirmar contraseña',
            'rules'=> 'required|matches[contrasena]',
            'errors'=>[
                'required'=>'Recuerda que {field} es obligatorio',
                'matches'=>'Los compos contraseña y {field} deben coincidir'
            ]
        ]
    ];  


}
