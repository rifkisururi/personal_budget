<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Transaksi Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('transaksi/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>Tanggal</th>
                        <th>Jenis</th>
                        <th>Kategori</th>
                        <th>Sumber Rekening</th>
						<th>Nominal</th>
						<th>Keterangan</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($transaksi as $t){ ?>
                    <tr>
                        <td><?php echo $t['tanggal']; ?></td>
						<td>
                            <?php 
                            if ($t['jenis'] == 1) {
                                echo "Pemasukan";
                            }else{
                                echo "Pengeluaran";
                            }
                            ?>
                        </td>
                        <td><?php echo $t['nama']; ?></td>
                        <td><?php echo $t['namaRekening']; ?></td>
						<td><?php echo number_format($t['nominal']); ?></td>
						<td><?php echo $t['keterangan']; ?></td>
						<td>
                            <a href="<?php echo site_url('transaksi/edit/'.$t['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('transaksi/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
