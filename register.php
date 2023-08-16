<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login Form Design | CodeLab</title>
      <link rel="stylesheet" href="login.css">
   </head>
   <body>
      <div class="wrapper">
         <div class="title">
            Register Form
         </div>
         <form action="proses_register.php" method ="POST">
            <div class="field">
               <input type="text" name ="nik">
               <label>Nik</label>
            </div>
            <div class="field">
               <input type="text" name ="nama">
               <label>Nama</label>
            </div>
            <div class="field">
               <input type="text" name ="username">
               <label>Username</label>
            </div>
            <div class="field">
               <input type="password" name ="password">
               <label>Password</label>
            </div>
            <div class="field">
               <input type="text" name ="tlp">
               <label>Telp</label>
            </div>
            <div class="field">
               <input type="submit" value="Daftar">
            </div>
         </form>
      </div>
   </body>
</html>