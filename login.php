<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="login.css">
    </head>

    <body>
        <div id="login-popup">
            <form class="login-form" action="" id="login-form" method="post">
                <h1>Login</h1>
                <div class="rowData">
                    <div>
                        <label>Login ID: </label>
                    </div>
                    <div>
                        <input type="text" id="loginPage_loginId" class="inputBox">
                    </div>
                </div>
                <div class="rowData">
                    <div>
                        <label>Password: </label>
                    </div>
                    <div>
                        <input type="password" id="loginPage_password" class="inputBox">
                    </div>
                    <div>
                        <a id="forgot-info">Forgot password?</a>
                    </div>
                </div>
                <div class="rowData">
                    <span id="login-info" class="info"></span>
                </div>
                <div>
                    <table>
                        <tr>
                            <td width=50%><input type="submit" id="loginPage_login" value="Login" /></td>
                            <td width=50%><button id="loginPage_register">Register Now!</button></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><button id="loginPage_back">Back</button></td>
                        </tr>
                    </table>               
                </div>
            </form>
        </div>
    </body>
</html>