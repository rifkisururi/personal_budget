<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Pengguna Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('pengguna/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Password</th>
						<th>Nama</th>
						<th>Email</th>
						<th>No Hp</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($pengguna as $p){ ?>
                    <tr>
						<td><?php echo $p['id']; ?></td>
						<td><?php echo $p['password']; ?></td>
						<td><?php echo $p['nama']; ?></td>
						<td><?php echo $p['email']; ?></td>
						<td><?php echo $p['no_hp']; ?></td>
						<td>
                            <a href="<?php echo site_url('pengguna/edit/'.$p['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('pengguna/remove/'.$p['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
