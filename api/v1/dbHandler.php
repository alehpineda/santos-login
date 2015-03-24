<?php

class DbHandler {

    private $conn;

    function __construct() {
        require_once 'dbConnect.php';
        // opening db connection
        $db = new dbConnect();
        $this->conn = $db->connect();
    }
    /**
     * Fetching single record
     */
    public function getOneRecord($query) {
        $r = $this->conn->query($query.' LIMIT 1') or die($this->conn->error.__LINE__);
        return $result = $r->fetch_assoc();   
    }

    public function selectAll($query) {
        $r = $this->conn->query($query) or die($this->conn->error.__LINE__);
        return $result = $r->fetch_all();
    }
    //actualizar un record
    public function updateValidar($query){
        $r = $this->conn->query($query) or die($this->conn->error.__LINE__);
        return $result = $r;
    }
    /**
     * Creating new record
     */
    public function insertIntoTable($obj, $column_names, $table_name) {
        
        $c = (array) $obj;
        $keys = array_keys($c);
        $columns = '';
        $values = '';
        foreach($column_names as $desired_key){ // Check the obj received. If blank insert blank into the array.
           if(!in_array($desired_key, $keys)) {
                $$desired_key = '';
            }else{
                $$desired_key = $c[$desired_key];
            }
            $columns = $columns.$desired_key.',';
            $values = $values."'".$$desired_key."',";
        }
        $query = "INSERT INTO ".$table_name."(".trim($columns,',').") VALUES(".trim($values,',').")";
        $r = $this->conn->query($query) or die($this->conn->error.__LINE__);

        if ($r) {
            $new_row_id = $this->conn->insert_id;
            return $new_row_id;
            } else {
            return NULL;
        }
    }
public function getSession(){
    if (!isset($_SESSION)) {
        session_start();
    }
    $sess = array();
    if(isset($_SESSION['uid']))
    {
        //Aqui maneja la session del usuario
        $sess["uid"] = $_SESSION['uid'];
        
        $sess["email"] = $_SESSION['email'];
        //Datos de abonos
        $sess['abonos'] = $_SESSION['abonos'];
        //try{
        //Datos basicos
        $sess["nombre"] = $_SESSION['nombre'];
        $sess["apellido_paterno"] = $_SESSION['apellido_paterno'];
        $sess["apellido_materno"] = $_SESSION['apellido_materno'];
        $sess["fecha_nacimiento"] = $_SESSION['fecha_nacimiento'];
        $sess["celular"] = $_SESSION['celular'];
        $sess["fijo"] = $_SESSION['fijo'];
        $sess["sexo"] = $_SESSION['sexo']; 
        //Datos adicionales
        $sess["calle"] = $_SESSION['calle'];
        $sess["colonia"] = $_SESSION['colonia'];
        $sess["ciudad"] = $_SESSION['ciudad'];
        $sess["facebook"] = $_SESSION['facebook'];
        $sess["twitter"] = $_SESSION['twitter'];
        $sess["instagram"] = $_SESSION['instagram'];
            
        //} catch(Exception $e){}
            //Silenciado explicitamente
    }
    else
    {
        $sess["uid"] = '';
        $sess["nombre"] = 'Guest';
        $sess["email"] = '';
        $sess["abonos"] = '';
        //Datos basicos
        $sess["nombre"] = '';
        $sess["apellido_paterno"] = '';
        $sess["apellido_materno"] = '';
        $sess["fecha_nacimiento"] = '';
        $sess["celular"] = '';
        $sess["fijo"] = '';
        $sess["sexo"] = '';
        //Datos adicionales
        $sess["calle"] = '';
        $sess["colonia"] = '';
        $sess["ciudad"] = '';
        $sess["facebook"] = '';
        $sess["twitter"] = '';
        $sess["instagram"] = '';        
        
    }
    return $sess;
}
public function destroySession(){
    if (!isset($_SESSION)) {
    session_start();
    }
    if(isSet($_SESSION['uid']))
    {
        unset($_SESSION['uid']);
        unset($_SESSION['nombre']);
        unset($_SESSION['email']);
        unset($_SESSION['apellido_paterno']);
        unset($_SESSION['abonos']);
        unset($_SESSION['apellido_materno']);        
        unset($_SESSION['fecha_nacimiento']);        
        unset($_SESSION['celular']);        
        unset($_SESSION['fijo']);        
        unset($_SESSION['sexo']);        
        unset($_SESSION['calle']);        
        unset($_SESSION['colonia']);        
        unset($_SESSION['ciudad']);        
        unset($_SESSION['facebook']);        
        unset($_SESSION['twitter']);        
        unset($_SESSION['instagram']);                
        $info='info';
        if(isSet($_COOKIE[$info]))
        {
            setcookie ($info, '', time() - $cookie_time);
        }
        $msg="Logged Out Successfully...";
    }
    else
    {
        $msg = "Not logged in...";
    }
    return $msg;
}
 
}

?>
