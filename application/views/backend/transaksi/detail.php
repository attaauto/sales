<html>
  <head>
	<title>Detail Transaksi</title>
	<style>
		td{
			font-size: 12px;
			font-family: sans-serif;
		}

		h3{
			font-size: 16px;
		}

		hr{
			border: 0;
			border-top: 2px solid #113b9c;
		}

		.table{
			border: 1px solid black;
			border-collapse: collapse;
		}

		th{
			font-family: sans-serif;
			font-size: 12px;
		}
	</style>
  </head>

  <body>
     
     <table>
     	<tr>
     		<td width="500"><h3>Loundry Online</h3></td>
     		<td><h3>Invoice</h3></td>
     	</tr>

     	<tr>
     		<td>Alamat : xxxxx</td>
     	</tr>

     	<tr>
     		<td>Telp : xxxxx</td>
     	</tr>

     	<tr>
     		<td>Email : xxxxx</td>
     	</tr>
     </table>

     <hr><br>

     <table>
     	<tr>
     		<td width="80">Konsumen</td>
     		<td width="350"><?= $transaksi['nama_konsumen'];?></td>

     		<td width="80">Kode Transaksi</td>
     		<td><?= $transaksi['kode_konsumen'];?></td>
     	</tr>

     	<tr>
     		<td width="80">Alamat</td>
     		<td width="350"><?= $transaksi['alamat_konsumen'];?></td>

     		<td width="80">Tanggal Masuk</td>
     		<td><?= $transaksi['tgl_masuk'];?></td>
     	</tr>

     	<tr>
     		<td width="80">No. Telepon</td>
     		<td width="350"><?= $transaksi['no_telp'];?></td>
            
            <?php
                if ($transaksi['tgl_ambil']  !=0) {?>
                	<td width="80">Tanggal Ambil</td>
     		        <td><?= $transaksi['tgl_ambil'];?></td>
                <?php }else{?>
                	<td width="80">Tanggal Ambil</td>
     		        <td style="color: red;">-</td>
                <?php }
            ?>
     		
     	</tr>
     </table> <br><br>

     <table width="600" class="table">
     	<tr>
     		<th class="table">Paket Laundry</th>
     		<th class="table">Berat / KG</th>
     		<th class="table">Harga</th>
     		<th class="table">Sub Total</th>
     	</tr>

     	<tr>
     		<td class="table"><?= $transaksi['nama_paket'];?></td>
     		<td class="table"><?= $transaksi['berat'];?></td>
     		<td class="table"><?= "Rp ".number_format($transaksi['harga_paket'],0,'.','.');?></td>
     		<td class="table"><?= "Rp ".number_format($transaksi['grand_total'],0,'.','.');?></td>
     	</tr>

     	<tr>
     		<td class="table" colspan="3" style="text-align: right; font-weight: bold; font-size: 14px">Grand Total</td>
     		<td class="table" style="font-weight: bold; font-size: 14px"><?= "Rp ".number_format($transaksi['grand_total'],0,'.','.');?></td>
     		
     	</tr>
     </table>
  </body>
</html>