<?php
namespace App\Models;
use CodeIgniter\Model;

class MainModel extends Model{
    
    public function constancia_relayn(){
        
        $qry=$this->db->table("calificaciones");
        $qry->select("*");
        $qry->where('red = "Relayn" AND anio = "2022"');
        $qry->groupBy('gafete');
        return $qry->get()->getResultArray();
    }
    
    public function getAll($tabla,$condiciones){
        $qry=$this->db->table($tabla);
        $qry->select("*");
        $qry->where($condiciones);
        return $qry->get()->getResultArray();
    }
    
    public function getAllOneRow($tabla,$condiciones){
        
        $qry=$this->db->table($tabla);
        $qry->select("*");
        $qry->where($condiciones);
        return $qry->get()->getRowArray();
    }
    
    public function getAllOneRowLike($tabla,$condiciones){
        $qry=$this->db->table($tabla);
        $qry->select("*");
        $qry->like($condiciones);
        return $qry->get()->getRowArray();
    }
    
    public function getAllOneRowOrderLimit($tabla,$condiciones,$ordenar,$limite){
        
        $qry=$this->db->table($tabla);
        $qry->select("*");
        $qry->where($condiciones);
        $qry->orderBy('posicion','ASC');
        // $qry->limit($limite);
        return $qry->get()->getResultArray();
    }
    
    public function selecPonenciasCalificadas($tabla,$condiciones,$ordenar){
        
        $qry=$this->db->table($tabla);
        $qry->select("ponencia");
        $qry->where($condiciones);
        $qry->orderBy($ordenar);
        return $qry->get()->getRowArray();
    }
    
    
    public function insertarRegistro($tabla,$data){
        
        $qry=$this->db->table($tabla);
        $qry->insert($data);
        return $qry->get()->getRowArray();
        // $user_id = $user->getInsertID();
    }
    
    public function generalInsertLastID($tabla,$data){
        $qry=$this->db->table($tabla);
        $qry->insert($data);
        return $this->db->insertID();
    }
    
    public function lastRow($tabla){
        $qry = $this->db->table($tabla);
        // $qry->select('id', 'name');
        $qry->select('*');
        $qry->orderBy('id', 'DESC');
        $qry->limit(1);
        return $qry->get()->getRowArray();
    }
    
    public function updateRow($tabla,$condiciones,$data){
        $qry=$this->db->table($tabla);
        $qry->set($data);
        $qry->where($condiciones);
        $qry->update();
    }
    
    public function getAllTable($tabla,$condiciones){
        if($condiciones == "ninguna" || $condiciones === null){
            $qry=$this->db->table($tabla); 
            $qry->select("*");
            return $qry->get()->getResultArray();
        }else{
            $qry=$this->db->table($tabla); 
            $qry->select("*");
            $qry->where($condiciones);
            return $qry->get()->getResultArray();
        }
        
    }
    
    public function getAllLike($tabla,$columa,$like,$condiciones){
        $qry=$this->db->table($tabla); 
        $qry->select("*");
        $qry->like($columa, $like);
        $qry->where($condiciones);
        return $qry->get()->getResultArray();
    }
    
    public function getLastUpdate($tabla,$columna){ // obtenemos la ultima fecha de los participantes del congreso
        $builder=$this->db->table($tabla);
        $builder->select("*");
        $builder->selectMax($columna);
        return $builder->get()->getResultArray();
        
    }
    
    public function lastUpdateGeneral($tabla,$columna,$condiciones){ // funcion general para obtener la ultima fecha registro
        $builder=$this->db->table($tabla);
        $builder->select("*");
        $builder->selectMax($columna);
        $builder->where($condiciones);
        return $builder->get()->getResultArray();
        
    }
    
    public function obtenerFechaMayorQue($fecha){
        $builder=$this->db->table('participantes_congresos');
        $builder->select("*");
        $builder->where('fecha >', $fecha);
        return $builder->get()->getResultArray();
        
    }
    
    public function fechaMayorQueGeneral($tabla,$fecha,$condiciones){ //funcion general para obtener los datos mayores que la fecha
        $builder=$this->db->table($tabla);
        $builder->select("*");
        $builder->where('fecha >', $fecha);
        $builder->where($condiciones);
        return $builder->get()->getResultArray();
        
    }

    public function selectCount($tabla,$condiciones){
        $qry=$this->db->table($tabla);
        $qry->select("COUNT(id) as cantidad");
        $qry->where($condiciones);
        return $qry->get()->getRowArray();
    }
    
    public function countRow($tabla,$condiciones){
        $builder = $this->db->table($tabla);
        $builder->where($condiciones);
        $qry = $builder->countAllResults();
        return $qry;
    }
    
    public function lastRecord($tabla,$columna){
        $qry = $this->db->table($tabla);
        $qry->orderBy($columna, 'DESC');
        return $qry->get()->getRowArray();
    }
    
    
    public function promedio($tabla,$columna,$condicion){
        $qry = $this->db->table($tabla);
        $qry->selectAvg($columna);
        $qry->where($condicion);
        return $qry->get()->getRowArray();
    }
    
    public function promedio_calificaciones($tabla,$condiciones){
        $qry = $this->db->table($tabla);
        $qry->select("ponencia");
        $qry->selectAvg('posicion', 'promedio');
        $qry->where($condiciones);
        $qry->groupBy('ponencia');
        $qry->orderBy('promedio');
        return $qry->get()->getResultArray();
    }
    
    public function simpleDelete($tabla,$condiciones){
        $qry = $this->db->table($tabla);
        $qry->where($condiciones);
        if($qry->delete()){
            return true;
        }else{
            return false;
        }
        
    }
    
    public function exist($tabla, $condiciones){

        $builder = $this->db->table($tabla)
                        ->select('id')
                        ->where($condiciones);
        $builder->countAllResults();

        if ($builder->countAllResults() > 0) {
            return true;
        } else {
            return false;
        }
    }

    
}


?>