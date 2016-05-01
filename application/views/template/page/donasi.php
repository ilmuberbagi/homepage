<div id="content">
	<div class="container">
		<div class="col-sm-6 col-sm-offset-3">
			<div class="box">

				<p class="text-center">
					<h2>Donasi</h2>
					<h4 style="line-height:0; color:#999; font-size:14px">Konfirmasi Online Donasi</h4>
				</p>

				<form action="">
					<div class="form-group">
						<label>Nama Donatur <span>*</span></label>
						<input type="text" name="donator_name" value="<?php echo $this->session->userdata('name');?>" class="form-control" required <?php echo $this->session->userdata('name') ?'readonly':'';?>>
					</div>
					<div class="form-group">
						<label>Email <span>*</span></label>
						<input type="email" name="donator_email" value="<?php echo $this->session->userdata('email');?>" class="form-control" required <?php echo $this->session->userdata('email') ?'readonly':'';?>>
					</div>
					<div class="form-group">
						<label>Jenis Donasi</label>
						<input type="text" name="donate_type" value="<?php echo $jenis;?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Tanggal <span>*</span></label>
						<input type="text" name="donate_date" value="<?php echo date('d/m/Y');?>" class="form-control datepicker" required>
					</div>
					<div class="form-group">
						<label>Transfer via Bank</label>
						<select name="bank_transfer" class="form-control" required>
							<option value="mandiri">Bank Mandiri</option>
							<option value="paypal">Paypal</option>
							<option value="cash">Cash</option>
						</select>
					</div>
					<div class="form-group">
						<label>Jumlah</label>
						<select name="currency" class="form-control" required>
							<option value="RP">Rp</option>
							<option value="USD">USD</option>
							<option value="WON">WON</option>
						</select>
						<input type="text" name="amount" class="form-control" value="<?php echo $amount;?>" <?php echo $amount?'readonly':'';?>>
					</div>
					<div class="form-action">
						<input type="submit" name="submit" class="btn btn-template-main" value="Kirim">
					</div>
				</form>

				</p>
			</div>


		</div>
		<!-- /.col-sm-6 -->
	</div>
	<!-- /.container -->
</div>