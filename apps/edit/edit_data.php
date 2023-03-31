<?php
$id= $_GET['id'];
$query = mysqli_query($koneksi,"SELECT * FROM tb_rapat WHERE id='$id'");
$view = mysqli_fetch_array($query);

?>
<section class="content">
    <div class="container-fluid">
<div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Data Rapat</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method='get' action='update/update_data.php'> 
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama Rapat</label>
                        <input type="text" class="form-control" placeholder="Nama Rapat" name="nama_rapat" value="<?php echo $view['nama_rapat'];?>">
                        <input type="text" class="form-control" placeholder="Nama Rapat" name="id" value="<?php echo $view['id'];?>" hidden>
                    </div> 
                    </div>
                    <div class="col-sm-6">
                    <div class="row">
                      <!-- select -->
                      <div class="form-group">
                        <label>Ruangan</label>
                        <select class="form-control" name="ruangan" value="<?php echo $view['ruangan'];?>">
                          <option>Lt 1 Thamrin</option>
                          <option>Lt 1 Ismet</option>
                          <option>Lt 2 Ruang Kaca</option>
                          <option>Lt 2 Syahril</option>
                          <option>Lt 3 Ruag Rapat</option>
                         
                        </select>
                      </div>
                    </div>
                      </div>
                      <div class="col-sm-6">
                      <div class="form-group">
                        <label>Jam</label>
                        <input type="time" class="form-control" placeholder="jam" name="jam" value="<?php echo $view['jam'];?>">
                      </div>
                      </div>
                      <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" class="form-control" placeholder="Tanggal" name="tanggal" value="<?php echo $view['tanggal'];?>">
                      </div>
                      </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="stat">
                          <option value="<?php echo $view['stat'];?>" selected><?php echo $view['stat'];?></option>
                          <option value="Aktif">Aktif</option>
                          <option value="Nonaktif">Nonaktif</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <!-- input states -->
                <button type="submit" class="btn btn-sm btn-info">Simpan</button>
                 
                </form>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
</section>