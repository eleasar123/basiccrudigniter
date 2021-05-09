<?php
class CrudModel extends CI_Model 
{
	function saverecords($name,$username,$email,$pass,$gender){
	$query="insert into user values('','$name','$username','$email','$pass','$gender')";
	$this->db->query($query);
    }
    
    function updaterecords($name,$username,$email, $pass, $gender){
		$query="update user set FullName='$name' ";
	}
	
	function showrecords(){
		$query="select * from user";
		$this->db->query($query);
	}

	function deleterecords($userId){
		$query="delete from user where userid ='$userId'";
	}
}