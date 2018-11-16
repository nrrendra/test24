<html>
 <head>
  <title>Mengirim Email</title>
 </head>
 <body>
  <h2>Kirim Email</h2>
  <form action="<?php echo base_url(), 'gmail/sendemail'; ?>" method="post">
  <table style="margin:20px auto;">
   
    <tr>
     <td>Nama</td>
     <td><input type="text" name="nama"></td>
    </tr>
    <tr>
     <td>Email</td>
     <td><input type="text" name="email"></td>
    </tr>
    <tr>
     <td></td> 
     <td><input type="submit" value="Aktivasi"></td> 
    </tr>
  </table>
 </form>
 </body>
</html>   
