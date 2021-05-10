<?php


class ItemCRUDModel extends CI_Model{


    public function get_itemCRUD(){
        if(!empty($this->input->get("search"))){
          $this->db->like('Title', $this->input->get("search"));
          $this->db->or_like('Body', $this->input->get("search")); 
        }
        $query = $this->db->get("notes");
        return $query->result();
    }


    public function insert_item()
    {    
        $data = array(
            'Title' => $this->input->post('title'),
            'Body' => $this->input->post('description')
        );
        return $this->db->insert('notes', $data);
    }


    public function update_item($id) 
    {
        $data=array(
            'Title' => $this->input->post('title'),
            'Body'=> $this->input->post('description')
        );
        if($id==0){
            return $this->db->insert('notes',$data);
        }else{
            $this->db->where('noteId',$id);
            return $this->db->update('notes',$data);
        }        
    }


    public function find_item($id)
    {
        return $this->db->get_where('notes', array('noteId' => $id))->row();
    }


    public function delete_item($id)
    {
        return $this->db->delete('notes', array('noteId' => $id));
    }
}
?>