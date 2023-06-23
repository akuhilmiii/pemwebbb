<?php include('../konfigurasi/config.php');?>

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card"></div>
            <!-- /.card -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
             <!-- /.card-header -->
              <div class="card-body">
                <a href="./inputdata.php"> <button type="button" id="button" class="btn btn-default" >
                  Tambah Data
                </button></a>
               
                <br></br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Barang</th>
                    <th>Nama Barang</th>
                    <th>Alamat</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $no = 0;
                    $query = mysqli_query($koneksi, "SELECT * FROM tb_jualan");
                    while($penjualan = mysqli_fetch_array($query)){
                      $no++
                    ?>
                  <tr>
                    <td width='5%'><?php echo $no;?></td>
                    <td><?php echo $penjualan['nama'];?></td>
                    <td><?php echo $penjualan['jenis_barang'];?></td>
                    <td><?php echo $penjualan['nama_barang'];?></td>
                    <td><?php echo $penjualan['alamat'];?></td>
                    <td>
                    <a onclick="hapusdata(<?php echo $penjualan['id']?>)" class="btn btn-sm btn-danger">Hapus</a>
                    <a href="index.php?page=edit-data&& id=<?php echo $penjualan['id']?>" class="btn btn-sm btn-success">Edit</a>
                    </td>
                  </tr>
                  <?php }?>
                  </tbody>
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

    <div class="modal fade" id="modal-xl">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Extra Large Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

      <script>
        function hapusdata(data_id){
          // alert('oke');
          Swal.fire({
            title: 'Apakah anda yakin ingin menghapus data ini?',
            // showDenyButton: false,
            showCancelButton: true,
            confirmButtonText: 'Oke',
            // denyButtonText: `Don't save`,
              }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                   window.location=("delete.php?id="+data_id);
                }
              })
          }
      </script>