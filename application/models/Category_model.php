<?php
Defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model{

    public function create ($formArray){
        $this->db->insert('categories', $formArray);
    }

    public function getCategories($params=[]){

        if (!empty($params['queryString'])) {
            $this->db->like('name',$params['queryString']);
        }
        $result = $this->db->get('categories')->result_array();
        //echo $this->db->last_query(); to check query
        return $result;
    }

    public function getCategoriesPage($param = array()){
        if (isset($param['offset']) && isset($param['limit'])) {
            $this->db->limit($param['offset'],$param['limit']);
        }

        if ( isset($param['m'])) {
            $this->db->or_like('name',trim($param['m']));
            
        }

        $query = $this->db->get('categories');

        //echo $this->db->last_query();

        $categories = $query->result_array();
        return $categories;
    }


    function getCategoriesCount($param = array()){

        if ( isset($param['m'])) {
            $this->db->or_like('name',trim($param['m']));
        }
        $count = $this->db->count_all_results('categories');
        return $count;
    }


    public function getCategory($id){
        $this->db->where ('id',$id);
        $category = $this->db->get('categories')->row_array();
        return $category;
    }

    public function update($id, $formArray) {
        $this->db->where('id', $id);
        $this->db->update('categories',$formArray);
    }

    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('categories');
    }
    /* Front Function */

    public function getCategoriesFront($params=[]){

        $this->db->where('categories.status',1);
        $result = $this->db->get('categories')->result_array();
        //echo $this->db->last_query(); to check query
        return $result;
    }

}

?>