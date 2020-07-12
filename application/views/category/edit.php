<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Category Edit</h3>
            </div>
			<?php echo form_open('category/edit/'.$category['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6" hidden="">
						<label for="id_pengguna" class="control-label">Id Pengguna</label>
						<div class="form-group">
							<input type="text" name="id_pengguna" value="<?php echo ($this->input->post('id_pengguna') ? $this->input->post('id_pengguna') : $category['id_pengguna']); ?>" class="form-control" id="id_pengguna" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="jenis" class="control-label">Jenis</label>
						<div class="form-group">
							<?php
								if ($category['jenis'] == 1) {
									?>
									<select class="form-control" name="jenis">
								        <option value="1">Pemasukan</option>
								        <option value="0">Pengeluaran</option>
								    </select>
									<?php
								}else{
									?>
									<select class="form-control" name="jenis">
								        <option value="0">Pengeluaran</option>
								        <option value="1">Pemasukan</option>
								    </select>
									<?php
								}
							?>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama" class="control-label">Nama</label>
						<div class="form-group">
							<input type="text" name="nama" value="<?php echo ($this->input->post('nama') ? $this->input->post('nama') : $category['nama']); ?>" class="form-control" id="nama" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>