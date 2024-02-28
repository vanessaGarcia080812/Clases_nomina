<?php
include('daoEmpleado.php');
include ('../conexion/conexion.php');
include ('../modelo/Empleado.php'); #esto

class DaoEmpleadoImpl extends Conexion implements DaoEmpleado{
       
    public function registrar(Empleado $a){ 
        try{
        if ($this->getCnx()!=null) { 
        $numeroIdentificacionE=$a->getnumeroidentificacione();
        $nombre1=$a->getnombre1();
        $apellido1=$a->getapellido1();
        $estado_civilE=$a->estado_civilE();  
        $tipodocE=$a->tipodocE();
        $correoE=$a->correoE();
        $generoE=$a->generoE();
        $celularE=$a->celularE();
        $fecha_nacimiento=$a->fecha_nacimiento();
        $nit='121321231';

        $sql="Insert into empleado values(?,?,?,?,?,?,?,?,?,?,?)";
        $stmt=$this->getCnx()->prepare($sql);
        $stmt->execute([$numeroIdentificacionE,$nombre1,$apellido1,$estado_civilE, $tipodocE, $correoE,$celularE, $generoE,$fecha_nacimiento, $fechaExpdocu,$nit ]);        
        } else { 
            echo $this->getCnx().' Es nulo <br>';
        }
    }catch(PDOException $p){
        echo $p->getMessage().'***********************';
    }
                       
    }/*    
    public function modificar(Empleado $a){        
        $nombre=$a->getNombre();
        $documento=$a->getDocumento();
        $formacion=$a->getFormacion();
        $sexo=$a->getSexo();
        $stmt=$this->getCnx()->prepare("UPDATE aprendiz " +
        "SET nombre =$nombre," +
        "formacion =$formacion," +
       "sexo = $sexo" +
        "where documento =$documento");
        $stmt->execute();        
    }

    public function eliminar(Aprendiz $a){        
        $documento=$a->getDocumento();
        $stmt=$this->getCnx()->prepare("delete from aprendiz where documento=$documento");
        $stmt->execute();        
    }
//public function listar();
public function listar(){
    $lista = null;
    try{    
        $stmt = $this->getCnx()->prepare("select * from aprendiz");
        $lista = array();
        $stmt->execute();
        foreach ($stmt as $key ) {           
            $a = new Aprendiz(null,null,null,null);
            $a->setNombre($key['nombre']);
            $a->setDocumento($key['documento']);
            $a->setFormacion($key['formacion']);
            $a->setSexo($key['sexo']);           
            array_push($lista,$a);            
        }        
        //$this->getCnx()->close();
    }catch(PDOException $e){
        $e->getMessage().'error en listar de DaoAprendizImpl';
    } 
        return $lista;       
    }       
    //public function buscar($campo,$dato);
    
*/
}
?>