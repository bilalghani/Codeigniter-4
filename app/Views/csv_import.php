<html>
<head>
    <title>How to Import CSV Data into Mysql using Codeigniter</title>
    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
</head>
<body>
	<div class="container box">
		<h3 align="center">How to Import CSV Data into Mysql using Codeigniter</h3>
		<br />

		<form method="post" id="import_csv" enctype="multipart/form-data">
			<div class="form-group">
				<label>Select CSV File</label>
				<input type="file" name="csv_file" id="csv_file" required accept=".csv" />
			</div>
			<br />
			<button type="submit" name="import_csv" class="btn btn-info" id="import_csv_btn">Import CSV</button>
		</form>
		<br />
		<div id="imported_csv_data"></div>
	</div>
</body>
</html>

<script>
 $(document).ready(function(){

function load_data(){
 	$.ajax({
 		url:"<?php echo base_url(); ?>csv_import/load_data"	,
 		method:"POST",
 		success:function(data){
 			$('#imported_csv_data').html(data)
 		}
 	})
 }
 $('#import_csv').on('submit',function(event){
 	event.preventDefault();
 	
 })
});
</script>