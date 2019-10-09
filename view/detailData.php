<html>
	<head>
		<title>Flip Id Mini Project </title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="row">
			<div class="col-md-12 text-left">
				
				<div class="col-md-4">
				<h3>Detail Transaction</h3>
				<a class="btn btn-sm btn-primary"  href="/flip-id-mini-project/?">Back to form disburs </a> | <a class="btn btn-sm btn-default" href="/flip-id-mini-project/?menu=tampil-data">Show list disburs</a><br><br>
					<table class="table table-responsive table-bordered">
					<?php 
					foreach ($data as $d) {
					?>
						<tr>
							<td>Transaction Code</td>
							<td><?=$d['transaction_code']?></td>
						</tr>
						<tr>
							<td>Status</td>
							<td><?=$d['transaction_status']?></td>
						</tr>
						<tr>
							<td>Transaction Create</td>
							<td><?=$d['time_request']?></td>
						</tr>
						<tr>
							<td>API LINK</td>
							<td><?=$d['api_link']?></td>
						</tr>
						<tr>
							<td>Transaction Update</td>
							<td><?=$d['time_update_status']?></td>
						</tr>
						<tr>
							<td>Receipt</td>
							<td><?=$d['receipt']?></td>
						</tr>
						<tr>
							<td>Request</td>
							<td><?=$d['request_json']?></td>
						</tr>
						<tr>
							<td>Response</td>
							<td><?=$d['respon_json']?></td>
						</tr>
						<tr>
							<td><a class="btn btn-sm btn-success" href="/flip-id-mini-project/?menu=update-data&id=<?= $d['transaction_code']?>">Update Transaction</a></td>
							<td></td>
						</tr>
					</table>
					<?php } ?>
				</div>
				<div class="col-md-4">&nbsp;</div>
			</div>
		</div>
	</body>
</html>

<html>
<head></head>

<body>



</body>
</html>