<?php

namespace App\Models;

use JetBrains\PhpStorm\Internal\TentativeType;
use PhpParser\Node\Scalar\String_;
use Carbon\Carbon;
use Exception;
use JsonSerializable;

class producto extends AbstractDBConnection implements \App\Interfaces\Model
{
    private ?int $id;
    private String $nombre;
    private int $stock;
    private int $precio;
    private int $clasificacion_id;

    /*Relaciones*/
    private ?clasificacion $Clasificacion;

    /**
     * producto constructor. Recibe un array asociativo
     * @param array $Producto
     */
    public function __construct(array $Producto = [])
    {
        parent::__construct();
        $this->setid($Producto['id'] ?? null);
        $this->setNombre($Producto['nombre'] ?? '');
        $this->setStock($Producto['stock'] ?? '');
        $this->setPrecio($Producto['precio'] ?? '');
        $this->setClasificacionId($Producto['clasificacion_id'] ?? null);

    }

    function __destruct()
    {
        if($this->isConnected()){
            $this->Disconnect();
        }
    }

    /**
     * @return int
     */
    public function getClasificacionId(): int
    {
        return $this->clasificacion_id;
    }



    /**
     * @param int $clasificacion_id
     * @return producto
     */
    public function setClasificacionId(int $clasificacion_id): producto
    {
        $this->clasificacion_id = $clasificacion_id;
        return $this;
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
     * @return producto
     */
    public function setId(?int $id): producto
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return String
     */
    public function getNombre(): string
    {
        return ucwords($this->nombre);
    }

    /**
     * @param mixed|string $nombre
     */
    public function setNombre(string $nombre): void
    {
        $this->nombre = trim(mb_strtolower($nombre, 'UTF-8'));
    }

    /**
     * @return int
     */
    public function getStock(): int
    {
        return $this->stock;
    }

    /**
     * @param int $stock
     * @return producto
     */
    public function setStock(int $stock): void
    {
        $this->stock = $stock;

    }

    /**
     * @return int
     */
    public function getPrecio(): int
    {
        return $this->precio;
    }

    /**
     * @param int $precio
     * @return producto
     */
    public function setPrecio(int $precio): producto
    {
        $this->precio = $precio;
        return $this;
    }

    /**
     * @return clasificacion
     */
    public function getClasificacion(): ?clasificacion
    {
        if (!empty($this->clasificacion_id)) {
            $this->Clasificacion = clasificacion::searchForId($this->clasificacion_id) ?? new clasificacion();
        }
        return $this->Clasificacion;
    }






    protected function save(string $query): ?bool
    {
        $arrData = [
            ':id' =>    $this->getId(),
            ':nombre' =>   $this->getNombre(),
            ':stock' =>   $this->getStock(),
            ':precio' =>   $this->getPrecio(),
            ':clasificacion_id' => $this->getClasificacionId()

        ];
        $this->Connect();
        $result = $this->insertRow($query, $arrData);
        $this->Disconnect();
        return $result;
    }

    function insert(): ?bool
    {
        $query = "INSERT INTO clasificacion VALUES (:id,:nombre,:stock,:precio)";
        return $this->save($query);
    }

    function update(): ?bool
    {
        $query = "UPDATE clasificacion SET 
            nombre = :nombre, stock = :stock,
            precio = :precio,  WHERE id = :id";
        return $this->save($query);
    }

    function deleted(): ?bool
    {
        return null;
    }

    static function search($query): ?array
    {
        try {
            $arrProducto = array();
            $tmp = new producto();
            $tmp->Connect();
            $getrows = $tmp->getRows($query);
            $tmp->Disconnect();

            foreach ($getrows as $valor) {
                $Producto = new producto($valor);
                array_push($arrProducto, $Producto);
                unset($Producto);
            }
            return $arrProducto;
        } catch (Exception $e) {
            GeneralFunctions::logFile('Exception', $e);
        }
        return null;
    }

    static function searchForId(int $id): ?object
    {
        try {
            if ($id > 0) {
                $tmpProducto = new producto;
                $tmpProducto->Connect();
                $getrow = $tmpProducto->getRow("SELECT * FROM producto WHERE id =?", array($id));
                $tmpProducto->Disconnect();
                return ($getrow) ? new producto($getrow) : null;
            } else {
                throw new Exception('Id de Producto Invalido');
            }
        } catch (Exception $e) {
            GeneralFunctions::logFile('Exception', $e);
        }
        return null;
    }

    static function getAll(): ?array
    {
        return producto::search("SELECT * FROM producto");

    }
    public static function ProductoRegistrado($nombre): bool
    {
        $nombre = trim(strtolower($nombre));
        $result = producto::search("SELECT id FROM productos where nombre = '" . $nombre. "'");
        if ( !empty($result) && count ($result) > 0 ) {
            return true;
        } else {
            return false;
        }
    }
    public function __toString() : string
    {
        return "Nombre: $this->nombre, Stock: $this->stock, Precio: $this->precio";

    }
    public function substractStock(int $quantity)
    {
        $this->setStock( $this->getStock() - $quantity);
        $result = $this->update();
        if($result == false){
            GeneralFunctions::console('Stock no actualizado!');
        }
        return $result;
    }

    public function addStock(int $quantity)
    {
        $this->setStock( $this->getStock() + $quantity);
        $result = $this->update();
        if($result == false){
            GeneralFunctions::console('Stock no actualizado!');
        }
        return $result;
    }


    /**
     * @inheritDoc
     */
    public function jsonSerialize(): mixed
    {
        return [
            'nombre' => $this->getNombre(),
            'stock' => $this->getStock(),
            'precio' => $this->getPrecio(),

        ];
    }
}