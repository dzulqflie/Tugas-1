<html>
  <head>
    <title>Atribut dari tag tabel</title>
  </head>
  
  <body>
    <p><b>Membuat Tabel</b></p>
    <table border="1" bordercolor="black" bgcolor="white" cellpadding="8" cellspacing="0" width="100%">
      <tr> <!-- <tr> artinya membuat sebuah baris -->
        <td>Ini kolom 1 pada baris 1</td> <!-- <td> = membuat sebuah kolom. -->
        <td>Ini kolom 2 pada baris 1</td> <!-- </td> mengakhiri sebuah kolom -->
      </tr> <!-- mengakhiri sebuah baris -->
      
      <tr>
       <td>Ini kolom 1 pada baris 2</td>
       <td>Ini kolom 2 pada baris 2</td>
      </tr>
    </table> 
    
    <p><b>Contoh 2: Membuat Tabel</b></p>
    <table border="1" bordercolor="black" bgcolor="white" cellpadding="8" cellspacing="0" width="100%">
      <tr bgcolor="yellow">
         <td align="center">Ini kolom 1 pada baris 1</td>
         <td align="right">Ini kolom 2 pada baris 1</td>
      </tr>
      
      <tr>
          <td align="center" bgcolor="red"><font color="white">Ini kolom 1 pada baris 2</font></td>
          <td align="right">Ini kolom 2 pada baris 2</td>
      </tr>
    </table>

    <p><b><font color="blue">Tabel sebagai bingkai dari paragraf</font></b></p>
    <table border="1" style="border-collapse: collapse" cellpadding="8" bgcolor="white" width="100%" bordercolor="black">
    
      <tr>
         <td><p>Tabel memiliki peranan sangat penting dalam tampilan sebuah situs web.
           Tanpa tabel desainer akan mengalamai kesulitan dalam mendesain sebuah halaman web.</p>
            <p>Kalau anda perhatikan website yan memiliki tampilan yang tersusun rapi.Sebenarnya itu adalah tabel hanya saja atribut
            <font color="red"><b>border="0"</b></font> sehingga tabel seakan tidak ada(transparan).</p>
            <p>Situs rahasia-webmaster.com banyak menggunakan tabel sebagai bingkai paragraf.
              Perlu diingat tag-tag pada html dapat mengandung unsur yang sama.
              Contohnya di dalam sebuah tabel terdapat tabel lagi. Di bawah ini adalah tabel yang berada di dalam tabel utama</p>
              <p align="center">
  
<!-- tag <table> untuk tabel anak -->
 <table border="1" style="border-collapse: collapse" bgcolor="white" bordercolor="black" cellpadding="8" width="80%">
 <tr bgcolor="yellow">
    <td><b>Nama Barang</b></td>
    <td><b>Harga Barang</b></td>
 </tr>
 
 <tr>
    <td>Monitor</td><td>Rp. 500.000,-</td>
 </tr>
 
  <tr>
    <td>CDRW</td><td>Rp. 245.000,0</td>
   </tr>
 <!-- </table ini untuk menutup tabel anak -->
   </table>
