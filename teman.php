<?php
include("config.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Teman</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="temanstyle.css">
	<?php include("include/css.php"); ?>
</head>
<body>
	<header>
		<?php include("include/header.php"); ?>
	</header>
			<div class="jumbotron"></div>
				<div class='panel panel-primary'>
					<div class='panel-heading'>Semua Data Teman</div>
					<div class='panel-body'>
						<a class='btn btn-primary' href='add_teman.php'><i class='fa fa-plus'></i> Tambah Data Teman</a>
						<p>
							<table class="table table-hover table-bordered">
								<thead>
									<tr>
										<th>Nama Teman</th>
										<th>Tanggal Lahir</th>
										<th>Alamat</th>
										<th>No. HP</th>
										<th>Email</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$sqlquery = "SELECT * FROM daftar_teman";
									if ($result = mysqli_query($koneksi, $sqlquery)) {
										while ($row = mysqli_fetch_assoc($result)) {
											?>
											<tr>
												<td><?php echo $row["nama"];?></td>
												<td><?php echo $row["tanggal_lahir"];?></td>
												<td><?php echo $row["alamat"];?></td>
												<td><?php echo $row["no_hp"];?></td>
												<td><?php echo $row["email"];?></td>
												<td>
													<div class="btn-group">
														<a href="edit_teman.php?id=<?php echo $row["id"];?>" class="btn btn-xs btn-success" title='Edit'> <i class="fa fa-edit"></i> </a>
														<a onclick="return confirm('Anda yakin ingin menghapus data tersebut?');" href="aksi_teman.php?act=delete&id=<?php echo $row["id"];?>" class="btn btn-xs btn-danger"> <i class="fa fa-remove" title='Hapus'></i> </a>
													</div>
												</td>
											</tr>
											<?php
										}
										mysqli_free_result($result);
									}
									mysqli_close($koneksi);
									?>
								</tbody>
							</table>
						</div>
					</div>

				</div>
			</div>
		</div>
		<?php include("include/footer.php"); ?>
	</body>
	<?php include("include/js.php"); ?>
	</html>
