<?php 
$heading=$this->db->select('*')->from('setting')->where('id',1)->get()->result_array();
if($heading['0']['h1_size']){
	echo '<style>h1{ font-size: '.$heading['0']['h1_size'].'  !important; }</style>';
}
if($heading['0']['h2_size']){
	echo '<style>h2{ font-size: '.$heading['0']['h2_size'].'  !important; }</style>';
}
if($heading['0']['h3_size']){
	echo '<style>h3{ font-size: '.$heading['0']['h3_size'].'  !important; }</style>';
}
if($heading['0']['h4_size']){
	echo '<style>h4{ font-size: '.$heading['0']['h4_size'].'  !important; }</style>';
}
if($heading['0']['h5_size']){
	echo '<style>h5{ font-size: '.$heading['0']['h5_size'].'  !important; }</style>';
}
if($heading['0']['h6_size']){
	echo '<style>h6{ font-size: '.$heading['0']['h6_size'].'  !important; }</style>';
}
if($heading['0']['heading_color']){
	echo '<style>h1,h2,h3,h4,h5,h6{ color: '.$heading['0']['heading_color'].'  !important; }</style>';
}
?>