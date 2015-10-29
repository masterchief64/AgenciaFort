<?php
require_once("mysql.php");

class Autos extends Mysql {
    public function add($datos){
        $sql = "INSERT INTO `AgenciaFort`.`autos` (`imagen`,`auto`, `modelo`, `tipo`, `precio`) "
                . "VALUES ("
                . "'{$datos['imagen']}', "
                . "'{$datos['auto']}', "
                . "'{$datos['modelo']}', "
                . "'{$datos['tipo']}', "
                . "{$datos['precio']});";
        $this->query($sql);
    }
    
     public function get_all(){
        $sql = "SELECT * FROM autos";
        return $this->query($sql);
    }
    
     public function get_materias($datos) {
       $sql = "SELECT alumnos_materiass.id,materias.materia "
                . " FROM alumnos_materiass, materias "
                . "WHERE materias.id=alumnos_materiass.materia_id and alumno_id={$datos}";
        return $this->query($sql);
    }

    public function get_by_id($id){
        $sql = "SELECT * FROM autos "
                . "WHERE id = {$id};";
        return $this->query($sql);
    }
    
        public function update($datos){
        $sql = "UPDATE `AgenciaFort`.`autos` "
                . "SET "
                . "`imagen`='{$datos['imagen']}', "
                . "`auto`='{$datos['auto']}', "
                . "`modelo`='{$datos['modelo']}', "
                . "`tipo`='{$datos['tipo']}', "
                . "`precio`={$datos['precio']} WHERE  "
                . "`id`={$datos['id']};";
        $this->query($sql);
    }
     public function delete($datos){
        $sql="DELETE FROM `AgenciaFort`.`autos`" 
                ."WHERE  `id`={$datos['id']};";
        $this->query($sql);
        
    
    }
     public function add_materia($datos){
        $sql = "INSERT INTO `programacion_web`.`alumnos_materiass` (`alumno_id`, `materia_id`) "
                . "VALUES ("
                . "'{$datos['alumno_id']}', "
                . "{$datos['materia_id']});";
        $this->query($sql);
    }
       public function get_by_id_alu_mat($id) {
        $sql = "SELECT alumnos_materiass.id,alumnos_materiass.alumno_id,alumnos_materiass.materia_id,materias.materia
 FROM alumnos_materiass, materias "
                . "WHERE alumnos_materiass.materia_id=materias.id and  alumnos_materiass.id= {$id};";
        return $this->query($sql);
    }
      public function delete_materia($datos) {
         $sql = "DELETE FROM `programacion_web`.`alumnos_materiass` "
                . " WHERE  `id`={$datos['id']};";
        return $this->query($sql);
    }
}