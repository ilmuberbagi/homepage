<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title><?php echo isset($title)?$title:'Donasi Ilmuberbagi Foundation'; ?></title>
</head>

<body>
	<h2>Donasi Ilmu Berbagi Foundation</h2>
	<h5>Donasi Anda telah kami terima</h5>
	<table>
		<tr>
			<td>Nama Donatur</td>
			<td>: <?php echo $nama_donatur;?></td>
		</tr>
		<tr>
			<td>Jenis Donasi</td>
			<td>: <?php echo $jenis_donasi;?></td>
		</tr>
		<tr>
			<td>Pembayaran Via</td>
			<td>: <?php echo $bank;?></td>
		</tr>
		<tr>
			<td>Jumlah</td>
			<td>: <?php echo $mata_uang.'. '.$jumlah;?></td>
		</tr>
		<tr>
			<td>Tanggal Donasi</td>
			<td>: <?php echo $tanggal;?></td>
		</tr>
	</table>
	Terimakasih telah melakukan konfirmasi
	<div class="note">
		"Kamu sekali-kali tidak sampai kepada kebajikan (yang sempurna), sebelum kamu menafkahkan (sedekah) sebagian harta yang kamu cintai. Dan apa saja yang kamu nafkahkan (sedekah) maka sesungguhnya Allah mengetahuinya." (QS Ali Imran : 92)
	</div>
	<p>Best Regards,<br/>
		Pengurus IB<br/>
		Ilmu itu ada, ya untuk berbagi
	</p>
	<p><a href="http://ilmuberbagi.id">www.ilmuberbagi.id</a></p>

</body>
</html>
