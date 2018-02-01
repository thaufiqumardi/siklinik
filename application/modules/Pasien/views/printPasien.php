<!DOCTYPE html><html><head>	<title><?php echo config_item('owner_name'); ?></title>	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">  	<link rel="stylesheet" media="print" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>">  	<link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css');?>"></head><body onload="window.print();">	<div class="row with-border">		<div class="col-xs-2">			<img src="<?php echo config_item('owner_image'); ?>" style="position:'center';" class="img-responsive">		</div>		<div class="col-xs-9 text-center">			<br>			<span>IZIN NO:</span><br>			<p>Jl. Raya Paling No. 147 Cirebon telp. (022) xxxxx</p>		</div>		<hr>	</div><br><br>	<table style="border: 2" class="table table-bordered table-striped DataTable">		<thead>			<tr>				<th>No.</th>				<th>No. RM</th>				<th>No. Kartu</th>				<th class="col-xs-2">Nama</th>				<th>Tempat, Tgl Lahir</th>				<th>Jenis Kelamin</th>				<th class="col-xs-3">Alamat</th>			</tr>		</thead>		<tbody>			<?php $i=1; foreach($pasien as $row):?>			<tr>				<td><?php echo $i++;?></td>				<td><?php echo $row->no_rm;?></td>				<td><?php echo $row->no_kartu;?></td>				<td><?php echo $row->nama_pasien;?></td>				<td><?php echo $row->tempat_lahir.', '.date('d-M-Y',strtotime($row->tgl_lahir));?></td>				<td><?php echo $row->jenis_kelamin;?></td>				<td><?php echo $row->jalan.", RT/RW: ".$row->rtrw.", ".$row->kelurahan.", ".$row->kecamatan.", ".$row->kota;?></td>			</tr>			<?php endforeach;?>		</tbody>	</table></body></html>
