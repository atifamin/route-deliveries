<?php for($i=1; $i<=5; $i++){ ?>
<?php
	$router_rating = $order_detail->router_rating;
	  if(!empty($router_rating) && $i<=$router_rating){
		  $class = "glyphicon glyphicon-heart";
	  }else{
		  $class = "icon-heart";
	  }
?>

<a href="javascript:;" onclick="router_rating(<?php echo $i; ?>, <?php echo $order_detail->id; ?>)"><span class="<?php echo $class; ?>"></span></a>
<?php } ?>
