  <!-- Content Wrapper. Contains page content -->
  
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          
              <!-- /.card-header -->
             
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Rapat</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                  Tambah Data Rapat
                </button>
                <br></br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Rapat</th>
                    <th>Ruangan</th>
                    <th>Jam</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no =0;
                    $query = mysqli_query($koneksi,"SELECT * FROM tb_rapat");
                    while($rpt = mysqli_fetch_array($query)){
                      $no++
                    ?>
                  <tr>
                    <td width='5%'><?php echo $no;?></td>
                    <td><?php echo $rpt['nama_rapat'];?>
                    </td>
                    <td><?php echo $rpt['ruangan'];?></td>
                    <td> <?php echo $rpt['jam'];?></td>
                    <td><?php echo $rpt['tanggal'];?></td>
                    <td><?php echo $rpt['stat'];?></td>
                    <td>
                    <a onclick="hapus_data(<?php echo $rpt['id'];?>)" class="btn btn-sm btn-danger">Hapus</a>
                    <a href="index.php?page=edit-data&& id=<?php echo $rpt['id'];?>"  class="btn btn-sm btn-success">Edit</a>
                  </td>
                    
                  </tr>
                  <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                  
                  </tr>
                  </tfoot>
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
    <!-- /.content -->
    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Large Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div> 
            <form method="get" action="add/tambah_data.php">
            <div class="modal-body">
            <div class="form-row">
              <div class="col">
                <input type="text" class="form-control" placeholder="Nama Rapat" name="nama_rapat">
              </div>
              <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        
                        <select class="form-control" name="ruangan">
                          <option>Lt 1 Thamrin</option>
                          <option>Lt 1 Ismet</option>
                          <option>Lt 2 Ruang Kaca</option>
                          <option>Lt 2 Syahril</option>
                          <option>Lt 3 Ruag Rapat</option>
                         
                        </select>
                      </div>
                    </div>
              <div class="col">
                <input type="time" class="form-control" placeholder="Jam" name="jam">
              </div>
              <div class="col">
                <input type="date" class="form-control" placeholder="Tanggal" name="tanggal">
              </div>
              
            </div>
            <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Select</label>
                        <select class="form-control" name="stat">
                          <option>Aktif</option>
                          <option>nonaktif</option>
                        </select>
                      </div>
                    </div>
         
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </form> 
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
  <!-- /.content-wrapper -->
   <script>
    function hapus_data(data_id){
     // alert('ok');
     // window.location=("delete/hapus_data.php?id="+data_id);
        Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {
       window.location=("delete/hapus_data.php?id="+data_id)
          'Deleted!',
          'Your file has been deleted.',
          'success'
      }
    })
        }
   </script>