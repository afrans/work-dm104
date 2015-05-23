<?php include("header.php"); ?>

    <h1>
        Sign in
    </h1>
    
    <form action="user-verify.php" method="post">
        <table class="table">
            <tr>
                <td>User</td>
                <td><input class="form-control" type="text" name="user"></td>
            </tr>

            <tr>
                <td>Password</td>
                <td><input class="form-control" type="text" name="password"></td>
            </tr>

            <tr>
                <td>
                <button class="btn btn-primary" type="submit">Sign in</button>
                </td>
            </tr>            

        </table>
    </form>
            
<?php include("footer.php"); ?>