<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>PROGRAM MENETUKAN NILAI DERET</title>
  </head>
  <body class="bg-dark">
	


	<div class="container">
		<div class="row atas">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h5 class="text-center">PROGRAM MENETUKAN NILAI DERET</h5>
					</div>
					<div class="card-body">
						
						<form aksi="index.php"method="POST">
							<div class="row">
								<div class="col-12 col-sm-4">
									<input type="text" name="bil-deret" class="form-control" placeholder="Masukkan Bilangan Deret" required="true">
								</div>
								<div class="col-12 col-sm-2">
									<button type="submit" name="tombol-submit" class="btn btn-info btn-flat">GET VALUE</button>
								</div>
						</form>
								<div class="col-12 col-sm-6">
									<?php
										if (isset($_POST["tombol-submit"])) 
										{
											$bil = $_POST["bil-deret"];
											$bil_a = str_split($bil,1);
											echo '<div class="alert alert-danger" role="alert">
												  Bilangan Minimum dari deret '.$bil.' adalah '.get_min($bil_a).'
												</div><hr>';
											echo '<div class="alert alert-warning" role="alert">
												  Bilangan Maksimum dari deret '.$bil.' adalah '.get_maks($bil_a).'
												</div><hr>';
											echo '<div class="alert alert-info" role="alert">
												  Rata-rata dari deret '.$bil.' dengan Total '.get_total($bil_a).' adalah '.get_avg($bil_a).'
												</div>';
										}

										function get_min($nilai)
										{
											$min = $nilai[0];
											for ($i=1; $i < count($nilai) ; $i++) 
											{ 
												if ($nilai[$i] < $min) 
												{
													$min = $nilai[$i];
												}
											}

											return $min;
										}

										function get_maks($nilai)
										{
											$max = $nilai[0];
											for ($i=1; $i < count($nilai) ; $i++) 
											{ 
												if ($nilai[$i] > $max) 
												{
													$max = $nilai[$i];
												}
											}

											return $max;
										}

										function get_avg($nilai)
										{
											$total = 0;
											for ($i=1; $i < count($nilai) ; $i++) 
											{ 
												$total = $total + $nilai[$i];
											}

											$rata_rata = round($total / count($nilai),2);

											return $rata_rata;
										}

										function get_total($nilai)
										{
											$total = 0;
											for ($i=1; $i < count($nilai) ; $i++) 
											{ 
												$total = $total + $nilai[$i];
											}

											return $total;
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