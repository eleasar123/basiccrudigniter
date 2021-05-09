<?php
class User extends CI_Controller 
{
	public function __construct()
	{
	parent::__construct();
	$this->load->database();
	$this->load->helper('url');
	}

	public function index()
	{	
	
		if($this->input->post('register'))
		{
		//first check user's email id already exists or not
$query=$this->db->get_where("user",array('EmailAddress'=>$this->input->post('email')));

//count number of matching rows
$row=$query->num_rows();
	
		if($row)
		{
		$data['error']="<h3 style='color:red'>This user already exists</h3>";
		}
		else
		{
			
		$data=array('UserId'=>'',
					'FullName'=>$this->input->post('name'),
					'UserName'=>$this->input->post('username'),
					'EmailAddress'=>$this->input->post('email'),
					'PassWord'=>$this->input->post('pass'),
					'Gender'=>$this->input->post('gender'));
		
			$this->db->insert('user',$data);
			$data['error']="<h3 style='color:blue'>Your account created successfully</h3>";
		
		
		
		
	}
		// $this->load->view('display.html');
	  }
		$this->load->view('registration',@$data);
	}

		public function update(){
			$this->load->view('registration',@$data);
		}

		public function show(){
			$query   = $db->query('SELECT * from user');
		$results = $query->getResultArray();

		foreach ($results as $row)
		{
			echo $row['UserId'];
			echo $row['FullName'];
			echo $row['UserName'];
			echo $row['EmailAddress'];
			echo $row['PassWord'];
			echo $row['Gender'];
		}
		}
	
}
?>
