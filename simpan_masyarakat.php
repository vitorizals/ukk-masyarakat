<?php
require 'koneksi.php';
$nik=$_POST['nik'];
$nama=$_POST['nama'];
$user=$_POST['username'];
$pass=$_POST['password'];
$telp=$_POST['telp'];

$sql=mysql_query("insert into masyarakat values('$nik','$nama','$user','$pass','$telp'");
if ($sql)
{
	?>
	<script type="text/javascript">
		alert ('Data Berhasil disimpan, Silahkan gunakan untuk login');
		window.location="index.php";
	</script>
<?php
}
?>