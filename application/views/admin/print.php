<html xmlns="http://www.w3.org/1999/xhtml"> <!-- Bagian halaman HTML yang akan konvert -->
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
</head>
<body>
<div style="width:600px;">
<table  width="100%" align="left">
	<tr>
		<td align="center" colspan=\'6\' width="494"><strong>PEMERINTAH KOTA BOGOR</strong></td>
	</tr>
	<tr>
		<td align="center" colspan=\'6\' width="494">KECAMATAN BOGOR UTARA</td>
	</tr>
	<tr>
		<td align="center" colspan=\'6\' width="494" style="text-transform:uppercase;" ></td>
	</tr>
	<tr>
		<td align="center">Kota Bogor        Kode Pos:        </td>
	</tr>
	<tr>
		<td align="center">Telp:              E-mail:        </td>
	</tr>
	<tr>
		<td align="left" colspan="5"><strong><hr size="3" noshade="noshade" color="#000000" /></strong></td>
	</tr>
	<tr>
		<th height="21" colspan="7" align="center"><u>SURAT KETERANGAN</u><br>Nomor : </th>
	</tr>
	<tr>
		<td colspan="7"></td>
	</tr>
	<tr>
		<td colspan="7" align="left">Yang bertanda tangan di bawah ini, Kepala Desa Babakan Kecamatan Bogor Utara Kota Bogor, menerangkan bahwa:</td>
	</tr>
</table>

<?php
foreach($data as $row)
?>
    
<table>
	<tr>
		<td width="194">Nama Lengkap</td><td width="13">:</td><td width="420"><?php echo  $row['nama']; ?></td>
	</tr>
	
		<tr>
		<td>Jenis Kelamin</td><td>:</td><td><?php echo $row['jenis_kelamin'];?></td>
	</tr>
		<tr>
		<td>Agama</td><td>:</td><td><?php echo $row['agama'];?></td>
	</tr>
		<tr>
		<td>Kewarganegaraan</td><td>:</td><td> <?php echo $row['kewarganegaraan'];?></td>
	</tr>
		<tr>
		<td>NIK</td><td>:</td><td> <?php echo $row['nik'];?></td>
	</tr>
	<tr>
		<td>Pekerjaan</td><td>:</td><td> <?php echo $row['pekerjaan'];?></td>
	</tr>
	<tr>
		<td>Alamat</td><td>:</td><td> <?php echo $row['alamat'];?></td>
	</tr>
	<tr>
		<td colspan="3"><div style="margin:5px,5px,0">Benar pada saat ini membuka/mempunyai usaha sebagaimana tersebut di bawah ini:</div></td>
	</tr>
	<tr>
		<td width="194">Nama Perusahaan</td><td width="13">:</td><td width="420"> <?php echo $row['nama_perusahaan'];?></td>
	</tr>
	<tr>
		<td width="194">Penanggung Jawab/ Pimpinan</td><td>:</td><td> <?php echo $row->penanggung_jawab;?></td>
	</tr>
	<tr>
		<td width="194">Alamat Perusahaan</td><td>:</td><td><?php echo $row['alamat_usaha'];?></td>
	</tr>
	<tr>
		<td width="194">Jenis Usaha / Klasifikasi Usaha</td><td>:</td><td> <?php echo $row['jenis_usaha'];?></td>
	</tr>	
	<tr>
		<td width="194">Akte Pendirian Perusahaan</td><td>:</td><td><?php echo $row['akta_perusahaan'];?></td>
	</tr>
	<tr>	
		<td width="194">Status Bangunan</td><td>:</td><td> <?php echo $row['status_tempat'];?></td>
	</tr>	
	<tr>
		<td width="194">Luas Tempat Usaha</td><td>:</td><td> <?php echo $row['luas_tempat'];?></td>
	</tr>				
	<tr>
		<td width="194">Jumlah Tenaga Kerja</td><td>:</td><td><?php echo $row['jumlah_tenaga'];?></td>
	</tr>	
	<tr>
	  <td colspan="3"><p align="justify">Demikian Surat Keterangan Domisili Perusahaan ini dibuat untuk dapat dipergunakan sebagaimana mestinya dan <br/> berlaku sampai dengan tanggal <?php echo $row['tgl_camat'];?>.</p></td>
    </tr>
</table>
<table width="510" align="left">
	<tr>
		<td width="35%">&nbsp;</td>
		<td width="30%">&nbsp;</td>
		<td width="35%" align="center">Bogor, <?php echo $row['tgl_camat'];?></td>
	</tr>
	<br/>
	<tr>
		<td width="35%" align="center"></td>
		<td width="30%">&nbsp;</td>
		<td width="35%" align="center">Lurah <?php echo $row['kelurahan'];?></td>
	</tr>
<br/><br/><br/><br/><br/>
	<tr>
		<td  height="90" valign="bottom" align="center"></td>
		<td>&nbsp;</td>
		<td valign="bottom" align="center"><?php echo "_____________";?></td>
	</tr>
	<tr>
		<td colspan="3" align="center"><br />Mengetahui Camat Bogor Utara</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>Nomor :</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>Tanggal : <?php $originalDate =  $row['tgl_camat']; $newDate = date("d-m-Y", strtotime($originalDate)); echo $newDate; ?></td>
		<td>&nbsp;</td>
	</tr>
	<br/><br/><br/><br/>
    <tr>
		<td>&nbsp;</td>
		<td valign="bottom" height="90" align="center"><?php echo "_____________";?></td>
		<td>&nbsp;</td>
	</tr>

</table>
<?php ?>
</div>
</body>
</html>
<?php
// $content = ob_get_contents();
// // ob_flush();
// 		ob_end_clean();
// 		$obj_pdf->writeHTML($content, true, 0, true, 0);
// 		$obj_pdf->Output('output.pdf', 'FI');
?>