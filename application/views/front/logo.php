<?php 
$heading=$this->db->select('*')->from('setting')->where('id',1)->get()->result_array();
if($heading['0']['logo']){
	echo '<img src="'.base_url().'logo/'.$heading['0']['logo'].'" alt="">';
}else{

echo '<img src="'.base_url().'front/images/logo-1.png" alt="">';
}

?>