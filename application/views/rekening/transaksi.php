<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">List Transaksi</h3>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Tanggal</th>
						<th>Nominal</th>
						<th>Keterangan</th>
						<th hidden="">Actions</th>
                    </tr>
                    <?php foreach($transaksi as $r){ ?>
                    <tr>
						<td><?php echo $r['tanggal']; ?></td>
						<td><?php echo number_format($r['nominal']); ?></td>
                        <td><?php echo $r['keterangan']; ?></td>
						
                        <td hidden="">
                            <a href="<?php echo site_url('transaksi/edit/'.$r['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                            <a href="<?php echo site_url('transaksi/remove/'.$r['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
