<?php

namespace App\Models;

use JetBrains\PhpStorm\Internal\TentativeType;
use Carbon\Carbon;
use Exception;
use JsonSerializable;
class Persona extends AbstractDBConnection implements \App\Interfaces\Model
{
    private ?int $id;
    private string $tipodocumento;
    private int $documento;
    private string $correo;
    private string $nombre;
    private string $apellido;
    private string $telefono;
    private string $contrasena;
    private string $rol;
    private string $estado;

    /* Seguridad de Contraseña */
    //const HASH = PASSWORD_DEFAULT;
    //const COST = 10;

    //Relaciones
    private ?array $FacturaCompraPersona;
    private ?array $FacturaVentaPersona;

    /**
     * @param int|null $id
     * @param string $tipodocumento
     * @param int $documento
     * @param string $correo
     * @param string $nombre
     * @param string $apellido
     * @param string $telefono
     * @param string $contrasena
     * @param string $rol
     * @param string $estado
     */
    public function __construct(array $persona = [])
    {
        parent::__construct();
        $this->setId($persona ['id'] ?? null);
        $this->setTipodocumento($persona ['tipodocumento'] ?? '');
        $this->setDocumento($persona ['documento'] ?? 0);
        $this->setCorreo($persona ['correo'] ?? '');
        $this->setNombre($persona ['nombre'] ?? '');
        $this->setApellido($persona ['apellido'] ?? '');
        $this->setTelefono($persona ['telefono'] ?? '');
        $this->setContrasena($persona ['contraseña'] ?? '');
        $this->setRol($persona ['rol'] ?? '');
        $this->setEstado($persona ['estado'] ?? '');
    }


    public function __destruct()
    {
        parent::__destruct();
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTipodocumento(): string
    {
        return $this->tipodocumento;
    }

    /**
     * @param string $tipodocumento
     */
    public function setTipodocumento(string $tipodocumento): void
    {
        $this->tipodocumento = $tipodocumento;
    }

    /**
     * @return int
     */
    public function getDocumento(): int
    {
        return $this->documento;
    }

    /**
     * @param int $documento
     */
    public function setDocumento(int $documento): void
    {
        $this->documento = $documento;
    }

    /**
     * @return string
     */
    public function getCorreo(): string
    {
        return $this->correo;
    }

    /**
     * @param string $correo
     */
    public function setCorreo(string $correo): void
    {
        $this->correo = $correo;
    }

    /**
     * @return string
     */
    public function getNombre(): string
    {
        return $this->nombre;
    }

    /**
     * @param string $nombre
     */
    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    /**
     * @return string
     */
    public function getApellido(): string
    {
        return $this->apellido;
    }

    /**
     * @param string $apellido
     */
    public function setApellido(string $apellido): void
    {
        $this->apellido = $apellido;
    }

    /**
     * @return string
     */
    public function getTelefono(): string
    {
        return $this->telefono;
    }

    /**
     * @param string $telefono
     */
    public function setTelefono(string $telefono): void
    {
        $this->telefono = $telefono;
    }

    /**
     * @return string
     */
    public function getContrasena(): string
    {
        return $this->contrasena;
    }

    /**
     * @param string $contrasena
     */
    public function setContrasena(string $contrasena): void
    {
        $this->contrasena = $contrasena;
    }

    /**
     * @return string
     */
    public function getRol(): string
    {
        return $this->rol;
    }

    /**
     * @param string $rol
     */
    public function setRol(string $rol): void
    {
        $this->rol = $rol;
    }

    /**
     * @return string
     */
    public function getEstado(): string
    {
        return $this->estado;
    }

    /**
     * @param string $estado
     */
    public function setEstado(string $estado): void
    {
        $this->estado = $estado;
    }

    /**
     * @return array|null
     */
    public function getFacturaCompraPersona(): ?array
    {
        return $this->FacturaCompraPersona;
    }

    /**
     * @param array|null $FacturaCompraPersona
     */
    public function setFacturaCompraPersona(?array $FacturaCompraPersona): void
    {
        $this->FacturaCompraPersona = $FacturaCompraPersona;
    }

    /**
     * @return array|null
     */
    public function getFacturaVentaPersona(): ?array
    {
        return $this->FacturaVentaPersona;
    }

    /**
     * @param array|null $FacturaVentaPersona
     */
    public function setFacturaVentaPersona(?array $FacturaVentaPersona): void
    {
        $this->FacturaVentaPersona = $FacturaVentaPersona;
    }




    protected function save(string $query): ?bool
    {
        // $hashPassword = password_hash($this->password, self::HASH, ['cost' => self::COST]);

        $arrData = [
            ':id' =>    $this->getId(),
            ':tipodocumento' =>   $this->getTipodocumento(),
            ':documento' =>   $this->getDocumento(),
            ':nombre' =>  $this->getNombre(),
            ':apellido' =>   $this->getApellido(),
            ':telefono' =>   $this->getTelefono(),
            ':correo' =>   $this->getCorreo(),
            ':contrasena' =>   $this->getContrasena(), //$hashPassword,
            ':rol' =>  $this->getRol(),
            ':estado' =>   $this->getEstado()
        ];
        $this->Connect();
        $result = $this->insertRow($query, $arrData);
        $this->Disconnect();
        return $result;
    }

    function insert(): ?bool
    {
        $query = "INSERT INTO ferreteria.persona VALUES (
            :id,:tipodocumento,:documento,:nombre,:apellido,
            :telefono,:correo,:contrasena,:rol,:estado
        )";
        return $this->save($query);
    }

    function update(): ?bool
    {
        $query = "UPDATE ferreteria.persona SET 
            tipodocumento = :tipodocumento, documento = :documento, nombre = :nombre, 
            apellido = :apellido, telefono = :telefono, correo = :correo, 
            rol = :rol, estado = :estado WHERE id = :id";
        return $this->save($query);
    }

    function deleted(): ?bool
    {
        $this->setEstado("Inactivo"); //Cambia el estado del Usuario
        return $this->update();
    }

    static function search($query): ?array
    {
        try {
            $arrPersona = array();
            $tmp = new Persona();
            $tmp->Connect();
            $getrows = $tmp->getRows($query);
            $tmp->Disconnect();

            if (!empty($getrows)) {
                foreach ($getrows as $valor) {
                    $Persona = new Persona ($valor);
                    array_push($arrPersona, $Persona);
                    unset($Persona);
                }
                return $arrPersona;
            }
            return null;
        } catch (Exception $e) {
            GeneralFunctions::logFile('Exception', $e);
        }
        return null;
    }

    static function searchForId(int $id): ?object
    {
        try {
            if ($id > 0) {
                $tmpPersona = new Persona();
                $tmpPersona->Connect();
                $getrow = $tmpPersona->getRow("SELECT * FROM ferreteria.persona WHERE id =?", array($id));
                $tmpPersona->Disconnect();
                return ($getrow) ? new Persona($getrow) : null;
            } else {
                throw new Exception('Id de usuario Invalido');
            }
        } catch (Exception $e) {
            GeneralFunctions::logFile('Exception', $e);
        }
        return null;
    }

    static function getAll(): ?array
    {
        return Persona::search("SELECT * FROM ferreteria.persona");
    }

    /**
     * @param $documento
     * @return bool
     * @throws Exception
     */
    public static function PersonaRegistrada($documento): bool
    {
        $result = Persona::search("SELECT * FROM ferreteria.persona where documento = " . $documento);
        if (!empty($result) && count($result)>0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return "Nombres: $this->nombre, 
                Apellidos: $this->apellido, 
                Tipo Documento: $this->tipodocumento, 
                Documento: $this->documento, 
                Telefono: $this->telefono";
    }

    public function login($user, $password): persona|String|null
    {

        try {
            $resultPersona = persona::search("SELECT * FROM persona WHERE user = '$user'");
            /* @var $resultPersona persona[] */
            if (!empty($resultPersona) && count($resultPersona) >= 1) {
                if (password_verify($password, $resultPersona[0]->getPassword())) {
                    if ($resultPersona[0]->getEstado() == 'Activo') {
                        return $resultPersona[0];
                    } else {
                        return "Usuario Inactivo";
                    }
                } else {
                    return "Contraseña Incorrecta";
                }
            } else {
                return "Usuario Incorrecto";
            }
        } catch (Exception $e) {
            GeneralFunctions::logFile('Exception', $e);
            return "Error en Servidor";
        }
    }


    /**
     * @inheritDoc
     */
    public function jsonSerialize()
    {
       return [
           'id' => $this -> getId(),
           'tipodocumento' => $this -> getTipodocumento(),
           'documento' => $this -> getDocumento(),
           'correo' => $this -> getCorreo(),
           'nombre' => $this -> getNombre(),
           'apellido' => $this -> getApellido(),
           'telefono' => $this -> getTelefono(),
           'contrasena' => $this -> getContrasena(),
           'rol' => $this -> getRol(),
           'estado' => $this -> getEstado(),
       ];
    }
}