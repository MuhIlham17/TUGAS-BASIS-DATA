<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="style.css">
   <title>Tugas_Basis_Data_8</title>
</head>
<body>
   <div class="container">
      <center><h1>Toko Buku Pintar</h1></center>
      <div class="main">
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql = 'SELECT * FROM pelanggan';
         $result = mysqli_query($conn, $sql);
         ?>
         <h3>Tabel Pelanggan</h3>
         <table>
          <tr>
            <th>Id_pelanggan</th>
            <th>nama</th>
            <th>alamat</th>
            <th>tanggal</th>
            <th>no_telp</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['Id_pelanggan'];?></td>
               <td><?= $row['Nama'];?></td>
               <td><?= $row['Alamat'];?></td>
               <td><?= $row['tanggal_lahir'];?></td>
               <td><?= $row['No_telepon'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql2 = 'SELECT * FROM buku';
         $result = mysqli_query($conn, $sql2);
         ?>
      </table>
         <h3>Tabel Buku</h3>
         <table>
          <tr>
            <th>id buku</th>
            <th>judul</th>
            <th>pengarang</th>
            <th>penerbit</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['Id_buku'];?></td>
               <td><?= $row['Judul'];?></td>
               <td><?= $row['Pengarang'];?></td>
               <td><?= $row['Penerbit'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
         </table>
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql3 = 'SELECT * FROM pegawai';
         $result = mysqli_query($conn, $sql3);
         ?>
         <h3>Tabel Pegawai</h3>
         <table>
          <tr>
            <th>Id_pegawai</th>
            <th>Nama</th>
            <th>jabatan</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['Id_pegawai'];?></td>
               <td><?= $row['Nama'];?></td>
               <td><?= $row['Jabatan'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
         </table>
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql4 = 'SELECT * FROM transaksi';
         $result = mysqli_query($conn, $sql4);
         ?>
         <h3>Tabel Transaksi</h3>
         <table>
          <tr>
            <th>id transaksi</th>
            <th>id pelanggan</th>
            <th>id pegawai</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['Id_transaksi'];?></td>
               <td><?= $row['Id_pelanggan'];?></td>
               <td><?= $row['Id_pegawai'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
            <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql2 = 'SELECT * FROM detail_transaksi';
         $result = mysqli_query($conn, $sql2);
         ?>
      </table>
         <h3>Tabel detail_transaksi</h3>
         <table>
          <tr>
            <th>ID_Transaksi</th>
            <th>ID_Buku</th>
            <th>Jumlah</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['ID_Transaksi'];?></td>
               <td><?= $row['ID_Buku'];?></td>
               <td><?= $row['Jumlah'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
            <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql2 = 'SELECT * FROM pemasok';
         $result = mysqli_query($conn, $sql2);
         ?>
      </table>
         <h3>Tabel pemasok</h3>
         <table>
          <tr>
            <th>id_pemasok</th>
            <th>Nama_pemasok</th>
            <th>alamat</th>
            <th>No_telp</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['id_pemasok'];?></td>
               <td><?= $row['Nama_pemasok'];?></td>
               <td><?= $row['alamat'];?></td>
               <td><?= $row['No_telp'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
         </table>
         </table>
      </div>
   </div>
</body>
</html>