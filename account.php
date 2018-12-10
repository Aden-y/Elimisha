<!DOCTYPE html>
<html>
<head>
	<title>My account</title>
<?php include_once("templates/links.php");?>
</head>
<body>

<?php include_once("templates/header.php");?>
<?php include_once("templates/main_menu.php");?>

<div class=" maincontainer">
	<center><h1>Manage Account</h1></center>
	<center>
		<div style="width: 100%; height: 40px;">
			<button class="btn_make_payment" data-toggle="modal" data-target="#paymentmodal"><img src="img/mpesaIcon.png" width="50%" height="100%" style="border-radius: 10px;"> <b>Make payment</b></button><br>
		</div>
		</center>
			
<div class="account-content">
				<label style="float: left,width:100%;margin-left: 5px;"><b>Account type</b></label>
				<span style="float: right;">Free</span><br>

			
				

					<label style="float: left,width:100%;margin-left: 5px;"><b>Valid until</b></label>
				<span style="float: right;">Unlimited</span><br>

			
			<center><button  class="fas fa-history pay-log-btn" id="pay-log-btn">&nbsp;Payment logs</button></center>
			<div class="pay-log hideme" id="pay-log">
				<table>
					<thead>
						<tr>
							<th>
								Ref. No.
							</th>
							<th>Amount</th>
							<th>Date</th>
							<th>Expiry</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>E888GGG</td>
							<td>877878</td>
							<td><?php echo date("Y-m-d");?></td>
							<td><?php echo date("Y-m-d");?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	
</div>
<script type="text/javascript">
	$(document).ready(function () {
	$("#pay-log-btn").click(function(event){
		event.preventDefault();
		$("#pay-log").stop();
		$("#pay-log").slideToggle(300);

	});
	})
</script>
<?php include_once("modals/payment.php");?>
</body>
<?php include_once("templates/footer.php");?>
</html>