<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Larona</title>
  <link rel="stylesheet" href="styles.css" />
  <link rel="shortcut icon" type="image/png" href="./src/assets/images/logo_icon.png" />
</head>

<body>
  <!-- <div class="header">
    <h1>Chania</h1>
  </div> -->

  <div class="row">
    <!-- <div class="col-form-left menu">
      <ul>
        <li>The Flight</li>
        <li>The City</li>
        <li>The Island</li>
        <li>The Food</li>
      </ul>
    </div> -->

    <div class="col-form-left">
      <h1>The City</h1>
      <p>Chania is the capital of the Chania region on the island of Crete. The city can be divided in two parts, the old town and the modern city.</p>
    </div>

    <div class="col-form right">
      <form action="cgi-bin/lnweb" method="post">
        <div class="imgContainer">
          <img src="./src/assets/images/logo.png" alt="Logo" class="logo" />
        </div>
        <div class="formContainer">
          <label for="LW_usrEmail"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="LW_usrEmail" />
          <label for="LW_user"><b>User ID</b></label>
          <input type="text" placeholder="Enter User ID" name="LW_user" required />
          <label for="LW_pass"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="LW_pass" required />
          <label for="LW_comp"><b>Company</b></label>
          <input type="text" placeholder="Enter Company" name="LW_comp" required />
          <button type="submit">Login</button>
          <label><input type="checkbox" checked="checked" name="remember" />Remember me</label>
        </div>
      </form>
    </div>
  </div>

  <!-- <div class="footer">
    <p>Resize the browser window to see how the content respond to the resizing.</p>
  </div> -->
</body>

</html>