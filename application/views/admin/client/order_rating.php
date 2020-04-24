<?php for($i=1; $i<=5; $i++){ ?>
<?php
	$order_rating = $order_detail->order_rating;
	if(!empty($order_rating) && $i<=$order_rating){
		$class = "glyphicon-star";
	}else{
		$class = "glyphicon-star-empty";
	}
?>
<a href="javascript:;" onclick="order_rating(<?php echo $i; ?>, <?php echo $order_detail->id; ?>)" ><span class="glyphicon <?php echo $class; ?> star_<?php echo $i; ?>"></span></a>
<?php } ?>
