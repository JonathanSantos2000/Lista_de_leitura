<?php
include '../PHP/include/header.php';
?>
<?php
include '../PHP/include/menu.php';
?>
<main>
    <div class="conteudoBox">
        <div class="box">
            <form action="validarLogin.php" method="post">
                <fieldset>
                    <legend><b>
                            <h1>Login</h1>
                        </b></legend>
                    <br>
                    <div class="inputBox">
                        <input type="text" name="username" id="username" class="inputUser" required>
                        <label for="username" class="labelInput">Username</label>
                    </div>
                    <br><br><br>
                    <div class="inputBox">
                        <input type="password" name="password" id="password" class="inputUser" required>
                        <label for="password" class="labelInput">Password</label>
                    </div>
                    <br>
                    <input type="submit" name="submit" id="submit" value="Login">
                </fieldset>
            </form>
        </div>
    </div>
</main>
<?php
include '../PHP/include/footer.php';
?>