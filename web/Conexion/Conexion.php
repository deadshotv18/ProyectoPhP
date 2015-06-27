<?php
class Conexion
{  private $usuario="root";
   private $clave="";
   private $host="localhost";
   private $bdatos="bdgimnasio";
   private $conex;
   //Cosntructor sin Parametros
   public function __construct() {   }
  
   //Abrir conexion
   public function abrirConexion()
   {  $this->conex =mysql_connect($this->host,$this->usuario,$this->clave) or die ("Problema en Conexion con la URL...");
      mysql_select_db($this->bdatos,$this->conex) or die ("Problemas de Ubicacion con la BD...");
    }
	
	//Generar Trigger//INSERT//UPDATE/DELETE
	public function ejecutarTransaccion($sql)
	{  $this->abrirConexion();
	   $result=mysql_query($sql) or die ("Error de Sentencia :<br>".$sql.mysql_error());
	   return $result; //Estado vacio o de posicion	
	}

    //Generar Query//SELECT
	public function ejecutarConsulta($sql)
	{  $this->abrirConexion();
	    $result=mysql_query($sql) or die ("Error en sentencia de consulta :<br>".$sql.mysql_error());
		return $result;
	}
}

?>
