
<!DOCTYPE html>
<html>

<div style="border:2px solid purple; padding:15px;width:40%;color:red;text-align:center;" name="error">
          <?php echo $_GET['error']; ?> 
        </div>
<body>

<div>
<p style="color:cornflowerblue;">If you are User, Please login here</p>


<form class="email" action="sign_in.php" method="post">  <!--If ERROR, Please check "ACTION"-->
    <label style="color:black;" for="log_user_name">User Name : </label>
    <input type="text" id="log_user_name" name="log_user_name">
<br>

<label style="color:black;" for="password">Password : </label>
<input type="text" id="passwd" name="log_password"><br><br>
<button type="submit" action="" name="login">Log In</button>

</form>  
</div>
</body>

</html>
