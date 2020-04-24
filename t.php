<?php
    include("koneksi.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>ODP List</title>
        <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Self Check-up Covid-19</title>
<script>
        $(document).ready(function(){
            $("#myModal").on("show.bs.modal", function(event){
                var button=$(event.relatedTarget);
                var titleData= button.data("title");
                $(this).find(".modal-title").text(titleData);
            });
        });</script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<header>
        <div class="container-fluid p-2">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#">
                <svg class="bi bi-shield-shaded" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M5.443 1.991a60.17 60.17 0 00-2.725.802.454.454 0 00-.315.366C1.87 7.056 3.1 9.9 4.567 11.773c.736.94 1.533 1.636 2.197 2.093.333.228.626.394.857.5.116.053.21.089.282.11A.73.73 0 008 14.5c.007-.001.038-.005.097-.023.072-.022.166-.058.282-.111.23-.106.525-.272.857-.5a10.197 10.197 0 002.197-2.093C12.9 9.9 14.13 7.056 13.597 3.159a.454.454 0 00-.315-.366c-.626-.2-1.682-.526-2.725-.802C9.491 1.71 8.51 1.5 8 1.5c-.51 0-1.49.21-2.557.491zm-.256-.966C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 012.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 01-2.418 2.3 6.942 6.942 0 01-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 01-1.007-.586 11.192 11.192 0 01-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 012.415 1.84a61.11 61.11 0 012.772-.815z" clip-rule="evenodd"/>
  <path d="M8 2.25c.909 0 3.188.685 4.254 1.022a.94.94 0 01.656.773c.814 6.424-4.13 9.452-4.91 9.452V2.25z"/>
</svg> Self Quick Test #dirumahaja </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-right text-light"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mr-auto"></div>
                    <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="eh.php">EMERGENCY HOSPITAL
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="adminfo.php">ADMIN INFO
                        </a>
                    </li>
                        </li>
                        <li class="nav-item">
                            <button class="btn btn-light px-5 py-2 primary-btn" onclick="location.href='logout.php';">LOGOUT</button>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
	<body style="background-color: #f7be16">
	<div class="container" style="margin-top:20px">
		<h2>ODP</h2>
		<hr style="border: black solid 5px;">
		<table class="table table-striped table-hover table-sm table-bordered">
			<thead class="thead-dark">
				<tr>
					<th>NO.</th>
                    <th>NAMA LENGKAP</th>
					<th>UMUR</th>
					<th>JENIS KELAMIN</th>
					<th>NO. KARTU IDENTITAS</th>
					<th>ALAMAT</th>
                    <th>SUHU</th>
                    <th>GEJALA</th>
                    <th>HASIL</th>
                    <th>KETERANGAN</th>
				</tr>
			</thead>
			<tbody>
			<?php
				$sql = mysqli_query($koneksi, "SELECT * FROM t_pasien ORDER BY id DESC") or die(mysqli_error($koneksi));
				if(mysqli_num_rows($sql) > 0){
					$no = 1;
					while($data = mysqli_fetch_assoc($sql)){
            ?>
						<tr>
                            <td><?php echo $no;?></td>
                            <td><?php echo $data['nama'];?></td>
							<td><?php echo $data['umur'];?></td>
							<td><?php echo $data['jk'];?></td>
							<td><?php echo $data['ki'];?></td>
							<td><?php echo $data['alamat'];?></td>
                            <td><?php echo $data['suhu'];?></td>
							<td><?php echo $data['gejala'];?></td>
							<td><?php echo $data['hasil'];?></td>
                            <td><?php echo $data['ket'];?></td>
							<td>
                                    <a href="#edit<?php echo $data['id']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                    <a href="#del<?php echo $data['id']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                                    <?php include('modal.php'); ?>
						        </td>
                        </tr>
            <?php
						$no++;
					}
				}else{
					echo '
					<tr>
						<td colspan="10">Tidak ada data.</td>
					</tr>
					';
				}
				?>
			<tbody>
		</table>
        <div> 
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" data-title="t">Tambah Data</button> 
        </div>
        <div id="myModal" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content"style="background-color: #f7be16; border-radius: 15px;">
                    <form action="tambah.php" method="post">
                        <div class="modal-header" style="background-color: black; color:white;">
                            <h5 class="modal-title">Tambah Pasien</h5>
                            <button type="button" class="close" data-dismiss="modal" style="color: white;">&times;</button>
                        </div>
                        <div class="modal-body" style="color: black;">       
                            <div class="form-group">
                                <label class="control-label"><b>Nama Lengkap : </b></label>
                                <input type="text" name="nama"class="form-control">
                            </div>                 
                            <div class="form-group">
                                <label class="control-label"><b>Umur : </b></label>
                                <input type="number" name="umur" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label"><b>Jenis Kelamin : </b></label><br>
                                <input type="radio"  name="jk" value="perempuan">
                                <label for="perempuan">P</label><br>
                                <input type="radio"  name="jk" value="laki-laki">
                                <label for="laki-laki">L</label><br>
                            </div>
                            <div class="form-group">
                                <label class="control-label"><b>No. Kartu Identitas : </b></label>
                                <input type="number" name="ki" class="form-control">
                            </div>
                            <div class="form-group"><b>Alamat : </b></label>
                            <input type="text" name="alamat" class="form-control">
                            </div>
                            <div class="form-group"><b>Suhu : </b></label><br>
                            <input type="radio"  name="suhu" value="<38 C">
                            <label for="<38 C">kurang (38 C)</label><br>
                            <input type="radio" name="suhu" value=">=38 C">
                            <label for=">=38 C">lebih atau sama (38 C)</label><br>
                            </div> 
                            <div class="form-group"><b>Gejala : </b></label><br>
                            <input type="radio"  name="gejala" value="muncul">
                            <label for="muncul">muncul</label><br>
                            <input type="radio" name="gejala" value="tidakmuncul">
                            <label for="tidakmuncul">tidak muncul</label><br>
                            </div> 
                            <div class="form-group"><b>Hasil : </b></label><br>
                            <input type="radio" name="hasil" value="negatif">
                            <label for="negatif">negatif</label><br>
                            <input type="radio"  name="hasil" value="beresiko">
                            <label for="beresiko">beresiko</label><br>
                            <input type="radio" name="hasil" value="positif">
                            <label for="positif">positif</label><br>
                            </div>
                            <div class="form-group"><b>Keterangan : </b></label>
                            <input type="text" name="ket" class="form-control">
                            </div>                               
                        </div>
                        <div class="modal-footer" style="background-color: black;">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
</body>
</html>
