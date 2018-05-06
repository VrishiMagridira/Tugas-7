<?php
class ModelData{
	private $nama, $nim, $ttg, $email, $nomor, $motto, $jenis_kelamin, $sd, $smp, $sma,$fakultas;
	private $ayah, $pekerjaanAyah, $penghasilanAyah, $ibu, $pekerjaanIbu, $penghasilanIbu, $alamat, $pt, $agama, $photo;
	
	public function __construct(){
	}

	public function set_data(){
		$this->nama = $_POST['nama'];
		$this->nim = $_POST['nim'];
		$this->ttg = $_POST['ttg'];
		$this->email = $_POST['email'];
		$this->nomor = $_POST['nomor'];
		$this->motto = $_POST['motto'];
		$this->jenis_kelamin = $_POST['Jenis_kelamin'];
		$this->sd = $_POST['sd'];
		$this->smp = $_POST['smp'];
		$this->sma = $_POST['sma'];
		$this->ayah = $_POST['ayah'];
		$this->pekerjaanAyah=$_POST['pekerjaanAyah'];
		$this->penghasilanAyah = $_POST['penghasilanAyah'];
		$this->ibu = $_POST['ibu'];
		$this->pekerjaanIbu=$_POST['pekerjaanIbu'];
		$this->penghasilanIbu = $_POST['penghasilanIbu'];
		$this->alamat = $_POST['alamat'];
		$this->pt=$_POST['pt'];
		$this->agama=$_POST['agama'];
		$extension = strtolower(pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION));
		$photo = "uploaded." . $extension;
		if (file_exists($photo)) {
		unlink($photo);
		}
		move_uploaded_file($_FILES['file']['tmp_name'], $photo);
		$this->photo=$photo;
		$fakultas = array ("Fakultas Ilmu Komputer","Fakultas Kedokteran", "Fakultas Hukum", 
							"Fakultas Ilmu Admnistrasi", "Fakultas Peternakan", "Fakultas Teknik",
							"Fakultas Ekonomi","Fakultas Ilmu Budaya","Fakultas Teknik Pertanian");
		$nilai = rand(0,sizeof($fakultas));
		$this->fakultas = $fakultas[$nilai];
	}

	public function get_data(){
		return array(
			'nama' => $this->nama,
			'nim' => $this->nim,
			'fal' => $this->fakultas,
			'ttg' => $this->ttg,
			'email' => $this->email,
			'nomor'=> $this->nomor,
			'motto'=> $this->motto,
			'jenis_kelamin' => $this->jenis_kelamin,
			'sd' => $this->sd,
			'smp'=>$this->smp,
			'sma'=>$this->sma,
			'ayah'=>$this->ayah,
			'pekerjaanAyah'=>$this->pekerjaanAyah,
			'penghasilanAyah'=>$this->penghasilanAyah,
			'ibu'=>$this->ibu,
			'pekerjaanIbu'=>$this->pekerjaanIbu,
			'penghasilanIbu'=>$this->penghasilanIbu,
			'alamat'=>$this->alamat,
			'pt'=>$this->pt,
			'agama'=>$this->agama,
			'photo'=>$this->photo
		);
	}
}
//Script file
?>