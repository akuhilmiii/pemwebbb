<?php
$id    = $_GET['id'];
$query = mysqli_query($koneksi,"SELECT * FROM tb_jualan WHERE id='$id'");
$view  = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Data</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method="get" action='update1.php'>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" placeholder="Nama" name='nama' value="<?php echo $view['nama'];?>">
                        <input type="text" class="form-control" placeholder="Nama" name='id' value="<?php echo $view['id'];?>" hidden>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Jenis Barang</label>
                        <input type="text" class="form-control" placeholder="Jenis barang" name='jenis_barang' value="<?php echo $view['jenis_barang'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-6">
                      <!-- textarea -->
                        <div class="form-group">
                            <label>Nama barang</label>
                            <textarea class="form-control" rows="3" placeholder="Nama Barang" name="nama_barang" value="<?php echo $view['nama_barang'];?>"><?php echo $view['nama_barang'];?></textarea>
                        </div>
                     </div>
                        <div class="col-sm-6">
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" rows="3" placeholder="Alamat" name="alamat" value="<?php echo $view['alamat'];?>"><?php echo $view['alamat'];?></textarea>
                        </div>
                        </div>
                  </div>
                  <button type="submit" class="btn btn-sn btn-info">Simpan</button>
                </form>
              </div>
        </div>
    </div>
</section>