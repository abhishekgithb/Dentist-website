<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login Form Design</title>
      <link rel="stylesheet" href="css/sinup.css">
   </head>
   <body>
      <script>
       var srtinginput="Some string";
       var numinput=5;
       var numinput2=10;
       console.log(typeof);

      </script>
     
      <div class="wrapper">
         <div class="title">
            Signup now
         </div>
         <form action="action_singup.php" method="post">
            <div class="field">
               <input name="name" type="text" required>
               <label> First name</label>
            </div>
            <div class="field">
                <input  name="email"type="email" required>
                <label> Email</label>
             </div>
            <div class="field">
               <input name="password" type="password" required>
               <label>Password</label>
            </div>
           
            <div class="content">
               <div class="checkbox">
                  <input type="checkbox" id="remember-me">
                  <label for="remember-me">Remember me</label>
               </div>
               
            </div>
            <div class="field">
               <input type="submit" value="submit">
            </div>
            <div class="signup-link">
               Not a member? <a href="login.php">login now</a>
            </div>
         </form>
      </div>
   </body>
</html>
