<html>
    <head>
        <title>Form Login</title>
        <link rel="stylesheet" href="style.css">
    </head>
   
    <body>
    <nav>
        <a href="index.html">Home</a> |
        <a href="form.php">Login</a>
    </nav>
        <div class="container">
                <h1>Login</h1>
                <form action="input.php" method="POST" >
                <div>
                    <label>Username :</label>
                    <input type="text" name="nama" id="nama"/>
                </div>
                <div>
                    <label>Password :</label>
                    <input type="password" name="password" id="password"/>
                </div>
                    <button type="submit">Log in</button>

              </form>
          </div>     
    
    </body>
</html>