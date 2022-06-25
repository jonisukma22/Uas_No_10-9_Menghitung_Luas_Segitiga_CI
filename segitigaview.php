<html>
	<head>
		<title>Perhitungan luas segitiga</title>
			</head>
			<body>
			<h2>Hasil Segitiga</h2>
			<!–- memanggil metode get_alas() dari objek $model -->
				Nilai alas : <?php echo $model->get_alas(); ?><br/>
			<!–- memanggil metode get_tinggi() dari objek $model -->
				Nilai tinggi : <?php echo $model->get_tinggi(); ?><br/>
			<!–- memanggil metode hitung_luas() dari objek $model -->
				Luas segitiga : <?php echo $model->hitung_luas() ?><br/>
			</body>
</html>
