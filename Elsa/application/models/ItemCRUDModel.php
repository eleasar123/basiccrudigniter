<?php
class ItemCRUDModel extends CI_Model{


public function get_itemCRUD(){
    if(!empty($this->input->get("search"))){
      $this->db->like('Title', $this->input->get("search"));
      $this->db->or_like('Body', $this->input->get("search")); 
      $this->db->or_like('Status', $this->input->get("search"));
      $this->db->or_like('created_at', $this->input->get("search"));
      $this->db->or_like('updated_at', $this->input->get("search"));
    }
    $query = $this->db->get("notes");
    return $query->result();
}

public function get_itemCRUDTrash(){
    if(!empty($this->input->get("search"))){
      $this->db->like('title', $this->input->get("search"));
      $this->db->or_like('body', $this->input->get("search")); 
      $this->db->or_like('status', $this->input->get("search"));
      $this->db->or_like('deleted_at', $this->input->get("search"));
      
    }
    $query = $this->db->get("trash");
    return $query->result();
}


public function insert_item()
{    
    date_default_timezone_set('Asia/Manila');
    $data = array(
        'Title' => $this->input->post('title'),
        'Body' => $this->input->post('description'),
        'Status' => $this->input->post('status'),
        'created_at'=>date('Y-m-d h-i-s')
    );
    return $this->db->insert('notes', $data);
}


public function update_item($id) 
{
    date_default_timezone_set('Asia/Manila');
    $data=array(
        'Title' => $this->input->post('title'),
        'Body'=> $this->input->post('description'),
        'Status'=> $this->input->post('status'),
        'updated_at'=>date('Y-m-d h-i-s')

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