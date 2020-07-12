<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Transaksi Add</h3>
            </div>
            <?php echo form_open('transaksi/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_category" class="control-label">Category</label>
						<div class="form-group">
							<select name="id_category" class="form-control">
								<option value="">select category</option>
								<?php 
								foreach($all_category as $category)
								{
									$selected = ($category['id'] == $this->input->post('id_category')) ? ' selected="selected"' : "";

									echo '<option value="'.$category['id'].'" '.$selected.'>'.$category['nama'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tanggal" class="control-label">Tanggal</label>
						<div class="form-group">
							<input type="date" name="tanggal" value="<?php echo $this->input->post('tanggal'); ?>" class="form-control" >
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_category" class="control-label">Rekening</label>
						<div class="form-group">
							<select name="id_rekening" class="form-control">
								<option value="">select category</option>
								<?php 
								foreach($all_rekening as $rekening)
								{
									$selected = ($rekening['id'] == $this->input->post('id_rekening')) ? ' selected="selected"' : "";

									echo '<option value="'.$rekening['id'].'" '.$selected.'>'.$rekening['nama'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nominal" class="control-label">Nominal</label>
						<div class="form-group">
							<input type="text" name="nominal" value="<?php echo $this->input->post('nominal'); ?>" class="form-control" id="nominal" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="keterangan" class="control-label">Keterangan</label>
						<div class="form-group">
							<textarea name="keterangan" class="form-control" id="keterangan"><?php echo $this->input->post('keterangan'); ?></textarea>
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