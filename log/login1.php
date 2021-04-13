<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login </title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">

</head>
<body>

<div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Regjistrohu</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Regjistrohu</h1>
          
          <form action="/" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Emri<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Mbiemri<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Username<span class="req">*</span>
            </label>
            <input type="username" required autocomplete="off" />
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off"/>
          </div>
          <div class="field-wrap">
            <select name="lloji">
             <option value="klient">Klient</option>
             <option value="admin">Admin</option>
             <option value="admin_restorant">Admin i restorantit</option>
           </select>
         </div>
          <button type="submit" class="button button-block"/>Filloni</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Miresevini!</h1>
          
          <form action="login.php" method="post">
          <?php include('server.php') ?>
            <div class="field-wrap">
            <label>
              Username<span class="req">*</span>
            </label>
            <input type="username" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Harruat Password-in?</a></p>
          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div><!--content -->
      
</div> 
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>