<!DOCTYPE html>
<html lang="en">

<head>
    <title>Biodata</title>
    <meta charset="utf-8">
	<style>
	
	body {
		
		background-image: url(https://buonline.beasiswaunggulan.kemdikbud.go.id/assets/img/pattern_1.png);
		background-repeat: repeat;
		background-attachment: scroll;
		background-clip: border-box;
		background-origin: padding-box;
		background-position-x: 100%;
		background-position-y: 100%;
		background-size: auto auto;
		
	}
	
	#cont {
		background-color: white;
		background-repeat: repeat;
		background-attachment: scroll;
		background-clip: border-box;
		background-origin: padding-box;
		background-position-x: 100%;
		background-position-y: 100%;
		background-size: auto auto;
		margin-left: 130px;
		margin-right: 130px;
		padding-left: 70px;
	
		
	}
	#row {
		background-color:#DDD6FF;
		background-position: 100%;
		background-position-y: 100%;
		background-size: auto auto;
			margin-left: 5px;
		margin-right: 40px;
		padding-left: 70px;
		
	}
	</style>
  
</head>

<body>

<br>
      <div class="container"  id = "cont">
        <div class="container" id = "cont2">
	
		<p>  
<br>		
  <div class=row id = "row">		
		<center>
                <h2>Biodata</h2></center><br></div>
				<br>
			<center>	<div class="row">
                    <div class="form-group">
					<tbody>
					<tr>
                        <td>  <td>
                      <td>
						<img width= "20%" src="<?php echo $data['photo']?>">
					  </td>
                        
						</tr>
</tbody>
                    </div>
                </div></center>

            <h3>A. Data Pribadi</h3>
            <table class="table table-hover" style="background-color:#E9EBF0;width:720px">
                <tbody>
                    <tr>

                        <row>
                            <td width="200">Nama </td>
                            <td>: <?php echo $data['nama']?></td>
                        </row>
                    </tr>
                    <tr>
                        <td>NIM</td>

                        <td>: <?php echo $data['nim']?></td>

                    </tr>
					 <tr>
                        <td>Fakultas</td>

                        <td>: <?php echo $data['fal']?></td>

                    </tr>
                    <tr>
                        <td>Tangal lahir</td>

                        <td>: <?php echo $data['ttg']?></td>

                    </tr>

                    <tr>
                        <td>Jenis Kelamin</td>

                        <td>:<?php echo $data['jenis_kelamin']?></td>

                    </tr>

                    <tr>
                        <td>Agama</td>

                        <td>: <?php 
						echo $data['agama']?></td>

                    </tr>

                    <tr>
                        <td>Email</td>

                        <td>: <?php echo $data['email']?></td>

                    </tr>

                    <tr>
                        <td>No HP</td>

                        <td>: <?php echo $data['nomor']?></td>

                    </tr>

                    <tr>
                        <td>Motto Hidup</td>

                        <td>: <?php echo $data['motto']?></td>

                    </tr>
                    <tr>
                        <td>Alamat</td>

                        <td>:<?php echo $data['alamat']?></td>

                    </tr>
                </tbody>
            </table>

            <h3>B. Riwayat Pendidikan</h3>
            <div class="container">

                <table class="table table-hover" style="background-color:#E9EBF0;width:720px">

                    <tbody>
                        <tr>
                            <td width="200">Sekolah Dasar</td>
                            <td>: <?php echo $data['sd']?></td>

                        </tr>
                        <td>Sekolah Menengah Pertama </td>
                        <td>: <?php echo $data['smp']?></td>
                        </tr>
                        <tr>
                            <td>Sekolah Menengah Atas</td>
                            <td>: <?php echo $data['sma']?></td>

                        </tr>
                        <tr>
                            <td>Perguruan Tinggi</td>
                            <td>: <?php echo $data['pt']?></td>

                        </tr>
                    </tbody>
                </table>
            </div>
            <h3>C. Data Orang Tua</h3>
            <div class="container">

                <table class="table table-hover" style="background-color:#E9EBF0;width:720px">

                    <tbody>
                        <tr>
                            <td width="200">Nama Ayah </td>
                            <td>: <?php echo $data['ayah']?></td>

                        </tr>
                        <td>Pekerjaan </td>
                        <td>: <?php echo $data['pekerjaanAyah']?></td>
                        </tr>
                        <tr>
                            <td>Penghasilan per Bulan</td>
                            <td>: <?php echo $data['penghasilanAyah']?></td>

                        </tr>
                        <tr>
                            <td>Nama Ibu</td>
                            <td>: <?php echo $data['ibu']?></td>

                        </tr>
                        <td>Pekerjaan </td>
                        <td>: <?php echo $data['pekerjaanIbu']?></td>
                        </tr>
                        <tr>
                            <td>Penghasilan per Bulan</td>
                            <td>:<?php echo $data['penghasilanIbu']?></td>

                        </tr>

                    </tbody>
                </table>
            </div>
			
			
        </div>
    </div>
	</div>
</body>

</html>