<?php
if($addresses->num_rows()>0){
	foreach($addresses->result() as $address){
		echo $address->Place_Name;
	}
}else{
	echo "No Record Found";
}
?>