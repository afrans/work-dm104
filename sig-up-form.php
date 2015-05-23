<?php include("header.php"); ?>
    <h1>
        Sign up
    </h1>

    <form action="user-add.php" method="post">
        <table class="table">
            <tr>
                <td>User</td>
                <td><input class="form-control" type="text" name="user"></td>
            </tr>

            <tr>
                <td>Email</td>
                <td><input class="form-control" type="text" name="email"></td>
            </tr>

            <tr>
                <td>Password</td>
                <td><input class="form-control" type="text" name="password"></td>
            </tr>
            
            <tr>
                <td>
                <button class="btn btn-primary" type="submit">Sign up</button>
                </td>
            </tr>            

        </table>
    </form>

<?php include("footer.php"); ?>