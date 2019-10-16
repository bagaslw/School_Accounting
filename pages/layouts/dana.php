<section class="content-header">
					<h1>
						Dana
					</h1>
					<ol class="breadcrumb">
						<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
						<li class="active">Dana</li>
					</ol>
				</section>

				<section class="content">
					<div class="box box-solid box-info">
						<div class="box-header">
						</div>

						<div class="box-body">

							<button type="button" class="btn btn-success mb-a w-a" data-toggle="modal" data-target="#addUser">
								<span>
									<i class="fa fa-check"></i>
								</span>
								Add Dana
							</button>

							<table id="datatables" class="table table-bordered table-striped">  
								<thead>
									<tr>
										<th>*</th>
										<th>Id_Dana</th>
										<th>Donatur</th>
										<th>Asal_Dana</th>
										<th>Jumlah_Dana</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									include '../../controller/koneksi.php';
									$i = 1;
									$query = "SELECT * FROM dana";
									$key = mysqli_query($koneksi, $query);
									while ($row = mysqli_fetch_assoc($key)) { ?>  
										<tr>
											<td><?php echo $i++; ?></td>
											<td><?php echo $row['id_dana']; ?></td>
											<td><?php echo $row['donatur']; ?></td>
											<td><?php echo $row['asal_dana'];?></td>
											<td><?php echo  $row['jumlah_dana']; ?></td>
											<td class="w-b">
												<button type="button" onclick="" title="Edit Dana" class="btn btn-success" data-toggle="modal" data-target="#editDana">
													<span>
														<i class="fa fa-edit"></i>
													</span>
												</button>
												<button type="button" title="Delete Dana" class="btn btn-danger" data-toggle="modal" data-target="#deleteDana">
													<span>
														<i class="fa fa-trash"></i>
													</span>
												</button>
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</section>

<script>
  $(function () {
      $('#datatables').DataTable();
    });
</script>
<script>
	$('#dana').addClass('active');
	$('#dashboardd').removeClass('active');
	$('#berita').removeClass('active');
	$('#m_guru').removeClass('active');
	$('#m_siswa').removeClass('active');
	$('#m_admin').removeClass('active');
</script>