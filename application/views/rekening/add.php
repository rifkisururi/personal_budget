<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Rekening Add</h3>
            </div>
            <?php echo form_open('rekening/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="nama" class="control-label">Nama</label>
						<div class="form-group">
							<input type="text" name="nama" value="<?php echo $this->input->post('nama'); ?>" class="form-control" id="nama" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="catatan" class="control-label">Catatan Tambahan</label>
						<div class="form-group">
							<input type="text" name="catatan" value="<?php echo $this->input->post('catatan'); ?>" class="form-control" id="catatan" />
						</div>
					</div>
					<div class="col-md-6" hidden="">
						<label for="totalsaldomasuk" class="control-label">Totalsaldomasuk</label>
						<div class="form-group">
							<input type="text" name="totalsaldomasuk" value="<?php echo $this->input->post('totalsaldomasuk'); ?>" class="form-control" id="totalsaldomasuk" />
						</div>
					</div>
					<div class="col-md-6" hidden="">
						<label for="totalsaldokeluar" class="control-label">Totalsaldokeluar</label>
						<div class="form-group">
							<input type="text" name="totalsaldokeluar" value="<?php echo $this->input->post('totalsaldokeluar'); ?>" class="form-control" id="totalsaldokeluar" />
						</div>
					</div>
					<div class="col-md-6" hidden="">
						<label for="saldosekarang" class="control-label">Saldosekarang</label>
						<div class="form-group">
							<input type="text" name="saldosekarang" value="<?php echo $this->input->post('saldosekarang'); ?>" class="form-control" id="saldosekarang" />
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