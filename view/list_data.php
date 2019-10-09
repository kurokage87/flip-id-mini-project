<html>
	<head>
		<title>Flip Id Mini Project</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="row">
			<div class="col-md-12">
			<h3 class="text-center">Transaction List</h3>
			<a class="btn btn-primary"  href="/flip-id-mini-project/?">Back to form disburs </a>
			<br/>

				<table class="table table-responsive table-hover">
					<tr>
						<td>Detail</td>
						<td>Transaction Status</td>
						<td>Time served</td>
						<td>Receipt</td>
						<td>Created at</td>
						<td>Request</td>
						<td>Response</td>
					</tr>
					<?php 

						foreach ($data as $disburs => $list)
						{
							echo '<tr>
								<td>
								<a  href="?menu=data-detail&id='.$list['transaction_code'].'">'.$list['transaction_code'].'</a>
								</td>
								<td>
								'.$list['transaction_status'].'
								</td>
								<td>
								'.$list['time_update_status'] .'
								</td>
								<td>
								'.$list['receipt'].'
								</td>
								<td>
								'.$list['time_request'].'
								</td>
								<td>
								'.$list['request_json'].'
								</td>
								<td>
								'.$list['respon_json'].'
								</td>
							</tr>';
						}

					?>
				</table>
			</div>
		</div>
	</body>
</html>
