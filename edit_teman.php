<?php
include("config.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Edit Data Teman</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php include("include/css.php"); ?>
	</head>
	<body>
		<header>
			<?php include("include/header.php"); ?>
		</header>
		<div class='container' style='margin-top:70px'>
			<div class='row' style='min-height:520px'>
				<div class='col-md-12'>


					<?php
						$id = $_GET['id'];
						$sqlquery = "SELECT * FROM daftar_teman WHERE id='$id'";
						$result = mysqli_query($koneksi, $sqlquery) or die (mysqli_connect_error());
						$row = mysqli_fetch_assoc($result);
						?>
					<div class='panel panel-success'>
						<div class='panel-heading'>Edit Data Teman</div>
						<div class='panel-body'>
							<form method='post' action='aksi_teman.php?act=update'>
								<div class='form-group'>
									<input type="hidden" name="id" id="id" value="<?php echo $row["id"]; ?>">
									<label>Nama Teman</label>
									<input type='text' class='form-control' name='nama' value="<?php echo $row["nama"]; ?>" required/>
								</div>
								<div class='form-group'>
									<label>Tanggal Lahir</label>
									<input type='date' class='form-control' name='tanggal_lahir' value="<?php echo $row["tanggal_lahir"]; ?>" required/>
								</div>
								<div class='form-group'>
									<label>Alamat</label>
									<input type='text' class='form-control' name='alamat' value="<?php echo $row["alamat"]; ?>" required/>
								</div>
								<div class='form-group'>
									<label>No.HP</label>
									<input type='text' class='form-control' name='no_hp' value="<?php echo $row["no_hp"]; ?>" required/>
								</div>
								<div class='form-group'>
									<label>Email</label>
									<input type='text' class='form-control' name='email' value="<?php echo $row["email"]; ?>" required/>
								</div>
								<button type='input' name='update' class='btn btn-success'>Edit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include("include/footer.php"); ?>
	</body>
	<?php include("include/js.php"); ?>
</html>
