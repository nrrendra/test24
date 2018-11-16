<html>
 <head>
  <title>Tutorial CI: Mengirim Email</title>
 </head>
 <body>
  <h2>Kirim Email</h2>
  <table>
   <?php echo form_open_multipart('kirim_email'); ?>
   <tbody>
    <tr>
     <td>Nama</td>
     <td><input type="Username" name="Nama"></td>
    </tr>
    <tr>
     <td>Email</td>
     <td><input type="email" name="To"></td>
    </tr>
    <tr>
     <td></td> 
     <td><input type="submit" value="Aktivasi"></td> 
    </tr>
   </tbody>
   <?php echo form_close();?>
  </table>
 </body>
</html>   
