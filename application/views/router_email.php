<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:700|Oswald" rel="stylesheet">
		<title>New Router Registration</title>
		<style>
body {
	margin: 0 auto;
	width: 600px;
	font-family: 'Open Sans', sans-serif;
	color: #666
}
.main {
	background-color: #fafafa;
	margin: 0 auto;
	padding: 5%;
	width: 600px;
	box-shadow: 0px 0px 20px #888888;
}
.headingone {
	margin: auto;
	width: 50%;
	padding: 10px;
	text-align: center;
}
.content p {
	font-size: 14px;
}
.footer {
	text-align: center;
}
h2 {
	color: #333;
	font-family: 'Open Sans', sans-serif;
}
p {
	color: #333;
	font-family: 'Open Sans', sans-serif;
}
</style>
		</head>

		<body>
<div class="main">
          <div class="headingone">
    <h2 style="font-weight:800"><strong>NEW ROUTER REGISTRATION</strong></h2>
    <hr />
  </div>
          <div class="content">
    <p><strong>First Name:</strong>&nbsp;<?php echo $router_data->first; ?></p>
    <p><strong>Last Name:</strong>&nbsp;<?php echo $router_data->last; ?></p>
    <p><strong>Email:</strong>&nbsp;<?php echo $router_data->email; ?></p>
    <p><strong>Phone:</strong>&nbsp;<?php echo $router_data->phone; ?></p>
    <p><strong>City:</strong>&nbsp;<?php echo $router_data->city; ?></p>
    <br />
    <br />
    <p>Please find the attachment of his/her resume.</p>
  </div>
          <p style="margin-top:10%">Regards</p>
        </div>
<div class="footer">
          <p style="font-size:12px;">Router | Any Pickup, Any Delivery</p>
        </div>
</body>
</html>
