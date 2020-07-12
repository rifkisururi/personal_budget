<div class="row">
    <div class="col-md-12" wfd-id="321">
        
            <div class="box-body" wfd-id="341">
                <div class="col-lg-3" wfd-id="198">
                    <?php 
                        if ($saldo < 0) {
                            echo '<div class="small-box bg-red" wfd-id="199">';
                        }else{
                            echo '<div class="small-box bg-green" wfd-id="199">';
                        }
                    ?>
                
                    <div class="inner" wfd-id="201">
                      <h3><?php echo number_format($saldo); ?><sup style="font-size: 20px"></sup></h3>
                      <p>Saldo</p>
                    </div>
                    <div class="icon" wfd-id="200">
                      <i class="ion ion-social-usd"></i>
                    </div>
                    <a href="#" class="small-box-footer">info lebih lanjut <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        
    </div>

    <div class="col-md-12" wfd-id="321">
          <div class="box" wfd-id="322">
            <div class="box-header with-border" wfd-id="366">
              <h3 class="box-title">Rekap Pemasukan Bulan ini</h3>

              <div class="box-tools pull-right" wfd-id="367">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" wfd-id="508"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body" wfd-id="341">
              <div class="row" wfd-id="342">
                <div class="col-md-12" wfd-id="343">
                  <p class="text-center">
                    
                  </p>

                  <?php 
                    $totalRecord = 0;
                    foreach ($PemasukanPerCategory as $p ) {
                        echo '
                               <div class="progress-group" wfd-id="359">
                                <span class="progress-text" wfd-id="363">'.$p['nama'].'  '.round((($p['totalPemakaian']/$totalPemasukanBulanIni)*100),2).'%</span>
                                <span class="progress-number" wfd-id="362"><b>'.number_format($p['totalPemakaian']).'</b>/ '. number_format($totalPemasukanBulanIni).'</span>

                                <div class="progress sm" wfd-id="360">
                                  <div class="progress-bar progress-bar-aqua" style="width: '.(($p['totalPemakaian']/$totalPemasukanBulanIni)*100).'%" wfd-id="361"></div>
                                </div>
                              </div>

                        ';
                        $totalRecord++;
                    }

                    if ($totalRecord == 0) {
                        echo "Belum ada data untuk ditampilkan.";
                    }

                  ?>

                  <!-- /.progress-group -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- ./box-body -->
          </div>
          <!-- /.box -->
        </div>


    <div class="col-md-12" wfd-id="321">
          <div class="box" wfd-id="322">
            <div class="box-header with-border" wfd-id="366">
              <h3 class="box-title">Rekap Pengeluaran Bulan ini</h3>

              <div class="box-tools pull-right" wfd-id="367">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" wfd-id="508"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body" wfd-id="341">
              <div class="row" wfd-id="342">
                <div class="col-md-12" wfd-id="343">
                  <p class="text-center">
                    
                  </p>

                  <?php 
                    $totalRecord = 0;
                    foreach ($pengeluaranPerCategory as $p ) {
                        echo '

                               <div class="progress-group" wfd-id="359">
                                <span class="progress-text" wfd-id="363">'.$p['nama'].'  '.round((($p['totalPemakaian']/$totalPengeluaranBulanIni)*100),2).'%</span>
                                <span class="progress-number" wfd-id="362"><b>'.number_format($p['totalPemakaian']).'</b>/ '. number_format($totalPengeluaranBulanIni).'</span>

                                <div class="progress sm" wfd-id="360">
                                  <div class="progress-bar progress-bar-aqua" style="width: '.(($p['totalPemakaian']/$totalPengeluaranBulanIni)*100).'%" wfd-id="361"></div>
                                </div>
                              </div>

                        ';
                        $totalRecord++;
                    }

                    if ($totalRecord == 0) {
                        echo "Belum ada data untuk ditampilkan.";
                    }

                  ?>

                  <!-- /.progress-group -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- ./box-body -->
          </div>
          <!-- /.box -->
        </div>
</div>