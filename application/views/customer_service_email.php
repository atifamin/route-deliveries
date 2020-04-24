<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:700|Oswald" rel="stylesheet">
		<title>Customer Service Inquiry</title>
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
    <h2 style="font-weight:800"><strong>ROUTE CUSTOMER SERVICE INQUIRY</strong></h2>
  </div>
          <div class="content">
    <h2 style="font-weight:500"><strong>Personal Information</strong></h2>
    <hr />
    <p><strong>Date:</strong>&nbsp;<?php echo $data->date; ?></p>
    <p><strong>First Name:</strong>&nbsp;<?php echo $data->first_name; ?></p>
    <p><strong>Last Name:</strong>&nbsp;<?php echo $data->last_name; ?></p>
    <p><strong>Email:</strong>&nbsp;<?php echo $data->email; ?></p>
    <p><strong>Phone:</strong>&nbsp;<?php echo $data->phone; ?></p>
    <hr />
    <h2 style="margin-top:15%;font-weight:500"><strong>Message / Concern</strong></h2>
    <hr />
    <p><strong>Order Number:</strong>&nbsp;<?php echo $data->order_number; ?></p>
    <p><strong>Message:</strong>&nbsp;<?php echo $data->message; ?></p>
    <hr />
  </div>
          <p style="margin-top:10%">Regards</p>
        </div>
<div class="footer">
          <p style="font-size:12px;">Router | Any Pickup, Any Delivery</p>
        </div>
</body>
</html>