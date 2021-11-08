<?php 
	require_once ("../conexion/DB_mysql.php");


	
	class Modelo{

		var $Conexion_ID;
    	var $Errno=0;
    	var $Error="";
		
		function __construct(){
			# code...
			
		}

		public static function seleccionar_cualquiera($array,$and=""){
			$as = 0;
			$tabla= $campo = "";

			foreach(array_keys($array) as $key ) {
				$as++;
				if ($key === 'table') {//obtengo tabla
	 				$tabla = $array[$key];
	 			}else if ($as===2) {//obtengo id
	 				$campo = $array[$key];
	 			}else if ($as===3) {//obtengo value
	 				$whereid = $key;
	 				$valor_whereid = $array[$key];
	 			}
			}

			$sql = "SELECT $campo FROM $tabla WHERE $whereid = '$valor_whereid' $and";
			try {
				$comando = Conexion::getInstance()->getDb()->prepare($sql);
	       		$comando->execute();
	       		
	       		$resultado = $comando->fetchAll(PDO::FETCH_COLUMN, 0);

	       		if ($comando->rowCount()>0) {
	       			$cuantos = $comando->rowCount();
	       			return array(1,$resultado[0],$sql,"",$cuantos,$cuantos);
	       		}else{
	       			$cuantos = $comando->rowCount();
	       			return array(0,array(),$sql,"",$cuantos,$cuantos);
	       		}
	       		
				//echo json_encode(array("exito" => $exito));
			} catch (Exception $e) {
				return array("0","error",$e->getMessage(),$e->getLine(),$sql);
	            //echo json_encode(array("error" => $error));
			}
		}	
	}

	define('DATABASE','farmacia');
	define('HOSTNAME','localhost');
	define('USERNAME','root');
	define('PASSWORD','');

class Conexion
{

    /**
     * Única instancia de la clase
     */
    private static $db = null;
    
    /**
     * Instancia de PDO
     */
    private static $pdo;

    final private function __construct()
    {
        try {
            // Crear nueva conexión PDO
            self::getDb();
        } catch (PDOException $e) {
            // Manejo de excepciones
        }


    }

    /**
     * Retorna en la única instancia de la clase
     * @return Database|null
     */
    public static function getInstance()
    {
        if (self::$db === null) {
            self::$db = new self();
        }
        return self::$db;
    }

    /**
     * Crear una nueva conexión PDO basada
     * en los datos de conexión
     * @return PDO Objeto PDO
     */
    public function getDb()
    {
        //  $c = new PDO( "sqlsrv:Server=(local) ; Database = AdventureWorks ", "", "", array(PDO::SQLSRV_ATTR_DIRECT_QUERY => true));
        //  
        //  
        if (self::$pdo == null) {
            self::$pdo = new PDO(
                'mysql:dbname=' . DATABASE .
                ';host=' . HOSTNAME .
                ';port:3306;', // Eliminar este elemento si se usa una instalación por defecto
                USERNAME,
                PASSWORD,
                array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
            );
            // Habilitar excepciones
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return self::$pdo;
    }

    /**
     * Evita la clonación del objeto
     */
    final protected function __clone()
    {
    }

    function _destructor()
    {
        self::$pdo = null;
    }
}

?>