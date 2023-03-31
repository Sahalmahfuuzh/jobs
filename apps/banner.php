
   <?php
   include("../conf/config.php"); 
   $query =mysqli_query($koneksi,"SELECT id,
   (SELECT count(id) FROM tb_rapat WHERE stat='Aktif') AS Aktif,
   (SELECT count(id) FROM tb_rapat WHERE stat='Nonaktif') AS Nonaktif
   FROM tb_rapat");
   
   $view = mysqli_fetch_array($query); ?>
   <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3><?php echo $view['Aktif'];?></h3>

          <p>Jumlah Rapat Yang Aktif</p>
        </div>
        <div class="icon">
          <i class=""></i>
        </div>
        <a href="datarapat.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3><?php echo $view['Nonaktif'];?><sup style="font-size: 20px"></sup></h3>

          <p>Jumlah Rapat Yang Tidak Aktif</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
   
    <!-- ./col -->
 