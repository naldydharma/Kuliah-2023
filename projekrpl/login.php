<?php
	$pesan=$_GET['pesan'];
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="logo.JPEG">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page King Invitation</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body style="background-color: lightgray;">

	<div class="col">
		<div class="row">
			<!-- kotak tengah -->
			<div class="col mt-5 mx-5 border border-black" style="background-color: white;">
				<div class="col">
					<div class="row">
						<!-- gambar kiri/bagian kiri -->
						<div class="col text-center">
							<img src="logo.JPEG" style="width: 300px;" class="mt-5 mx-3 mb-5">
						</div>
						<!-- bagian kanan -->
						<div class="col text-center mx-3 mb-5 mt-5">
							<form action="loginproses.php" method="POST">
								<table>
								<tr>
									<td>
										<p>Nama</p>
									</td>
									<td>
										<input type="text" name="nama">
									</td>
								</tr>
								<tr>
									<td>
										<p>password</p>
									</td>
									<td>
										<input type="password" name="password">
									</td>
								</tr>
								<tr>
									<td>
										<input type="submit" name="masuk">
									</td>
								</tr>
							</table>
							</form>
							<?php
								if($pesan ==="gagal")
								{
									echo "gagal login";
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>