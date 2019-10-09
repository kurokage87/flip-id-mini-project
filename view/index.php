<html>
	<head>
		<title>Flip Id Mini Project</title>
		<!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-4">&nbsp;</div>
				<div class="col-md-4"><h3>Form Transaction </h3>
					<form method="post" action="/flip-id-mini-project/?menu=simpan">
						<div class="form-group">
							<label for="bank_code">Bank Code </label>
							<input type="text" required class="form-control" value="" id="bank_code" name="bank_code" placeholder="Bank code">
						</div>
						<div class="form-group">
							<label for="account_number">Account Number</label>
							<input type="text" required class="form-control" value="" id="account_number" name="account_number" placeholder="Account Number">
						</div>

						<div class="form-group">
							<label for="amount">Amount</label>
							<input type="text" required class="form-control" value="" id="amount" name="amount" placeholder="Amount">
						</div>
						<div class="form-group">
							<label for="remark">Remark</label>
							<input type="text" required class="form-control" value="" id="remark" name="remark" placeholder="Remark">
						</div>

						<button type="submit" class="btn btn-default">Submit</button>
						<a class="btn btn-primary" href="/flip-id-mini-project/?menu=tampil-data">Show list disburs</a>
					</form>
					
				</div>
				<div class="col-md-4">&nbsp;</div>
			</div>
		</div>
	</body>
</html>