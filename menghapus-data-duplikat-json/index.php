<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Program Menghapus Data Duplikat JSON</title>
  </head>
  <body class="bg-dark">
	


	<div class="container">
		<div class="row atas">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h5 class="text-center">MENGHAPUS DATA DUPLIKAT DI JSON</h5>
					</div>
					<div class="card-body">
						
						<form aksi="index.php"method="POST">
							<div class="row">
								<div class="col-12 col-sm-4">
									Menghapus data duplikasi pada data JSON dibawah ini :
									<div class="alert alert-danger">
										<code class="language-php">
											$data = ["Jakarta", "Aceh", "Malang", "Medan", "Bontang", "Jogja", "Jakarta", "Bandung", "Malang", "Solo", "Palembang", "Bandung"];
										</code>
									</div>
								</div>
								<div class="col-12 col-sm-2">
									<button type="submit" name="tombol-submit" class="btn btn-info btn-flat">GET VALUE</button>
								</div>
						</form>
								<div class="col-12 col-sm-6">
									<?php
										if (isset($_POST["tombol-submit"])) 
										{
											//var_dump(explode(' ', $_POST["kalimat"]));
											$get = get_json();
											echo '<div class="alert alert-primary" role="alert">
												  ';
											print_r($get);
											echo '</div>';
										}

										function get_json()
										{
											$data = ["Jakarta", "Aceh", "Malang", "Medan", "Bontang", "Jogja", "Jakarta", "Bandung", "Malang", "Solo", "Palembang", "Bandung"];
											$array = array_unique($data);

											return $array;
										}


									?>
								</div>
							</div>
					</div>
					<div class="card-footer">
						<h6 class="card-tools"><i><small>Muhammad Suryono</small></i></h6>
					</div>
				</div>
			</div>
		</div>
	</div>    

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>