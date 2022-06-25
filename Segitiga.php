<?php
	class Segitiga extends CI_Controller {
		public function index() {
		if (isset ($_POST['btnSubmit'])) { //tambahan
	// memuat model Segitiga_model
		$this->load->model('Segitiga_model');
	// menangkap model yang telah dimuat oleh controller
		$model = $this->Segitiga_model;
	// mengambil nilai yang dikirim memlalui form / (tambahan)
 		$alas = $_POST['alas1'];
 		$tinggi = $_POST['tinggi1'];
	// menentukan nilai $radius
		$model->set_alas($alas);
		$model->set_tinggi($tinggi);
	// memuat view dan mengirimkan $model ke view
	
	$this->load->view('segitigaview', array('model'=>$model));
	}
		else //tambahan
		{
			//menampilkan form
			$this->load->view('segitiga_form_view');
		}
	}
}
?>
