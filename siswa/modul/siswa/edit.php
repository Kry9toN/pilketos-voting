<?php include "atas.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Administrator Pilkasis
        <small>Pemilihan Ketua OSIS</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="."><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li><a href="?m=siswa"><i class="fa fa-laptop"></i> Siswa</a></li>
        <li class="active">Edit</li>
      </ol>
    </section>
    <!-- Main content -->
	<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Form Edit Siswa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
<?php
$id=$_GET['nis'];
include "../sambungan.php";
$sql="SELECT * FROM siswa WHERE nis='$id'";
$query=mysqli_query($koneksi,$sql);
$r=mysqli_fetch_assoc($query);
?>
			 <!--Mulai buat form-->
			 <form action="?m=siswa&s=update" method="post" enctype="multipart/form-data">
              <table id="pilkasis1" class="table table-bordered table-hover table-striped">
                <tbody>
					<tr>
						<td width=150>NIS</td>
						<td><input type="number" name="nis" value="<?php echo$r['nis'];?>" readonly /></td>
					</tr>
					<tr>
						<td>Nama Lengkap*</td>
						<td><input type="text" name="nama" placeholder="Nama" size="50px" maxlength="50px" value="<?php echo$r['nama'];?>" required /></td>
					</tr>
					<tr>
						<td>Kelas</td>
						<td>
							<select name="kelas">
<?php
$sql2="SELECT * FROM kelas ORDER BY kelas";
$query2=mysqli_query($koneksi,$sql2);
while($r2=mysqli_fetch_assoc($query2)){
		echo "<option value='".$r2['idkelas']."'";
		echo $r2['idkelas']==$r['idkelas']?"selected":"";
		echo ">".$r2['kelas']."</option>";
}
?>
							</select>
						</td>
					</tr>
					<tr>
						<td colspan=3>
						<input type="submit" name="simpan" value="Save" class="btn btn-large btn-primary" />&nbsp;&nbsp;&nbsp;
						<input type="reset" name="reset" value="Reset" class="btn btn-large btn-warning" />&nbsp;&nbsp;&nbsp;
					</tr>
                </tbody>
              </table>
			 </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
<?php include "bawah.php"; ?>
