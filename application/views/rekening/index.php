<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Rekening Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('rekening/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Nama</th>
						<th>Catatan</th>
						<th>Saldo sekarang</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($rekening as $r){ ?>
                    <tr>
						<td><?php echo $r['nama']; ?></td>
						<td><?php echo $r['catatan']; ?></td>
						<td><?php echo number_format($r['saldosekarang']); ?></td>
						<td>
                            <a href="<?php echo site_url('rekening/edit/'.$r['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('rekening/remove/'.$r['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            <a href="<?php echo site_url('rekening/history/'.$r['id']); ?>" class="btn btn-primary btn-xs"><span class="fa "></span> Riwayat pemakaian</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
