<?php 
session_start();
 ?>

 <table align="center" border="1"">
 	<tr>
 		<td colspan="2"  align="center"><h1>Data Diri</h1></td>
 	</tr>
 	<tr>
 		<td align="center"><h3>Hobi</h3></td>
 		<td align="center"><h3>Gambar</h3></td>
 	</tr>
 	<tr>
 		<td>
 			<?php 
 				foreach ($_SESSION['hobi'] as $pilihan) {
 					echo $pilihan."<br>";
 				}
 			 ?>
 		</td>
 		<td><img src="<?php echo $_SESSION['gambar'];?>" width="250px"></td>
 	</tr>

 </table>
 <center><a href="form.html">Hapus</a></center>