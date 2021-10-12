<?php
include 'header.php';
?>
<div class="container">
    <?php
    include 'menu.php';
    ?>
    <main>
        <div class="conteudoBox">
            <div class="boxRegistro">
                <form action="validarRegistro.php" method="post">
                    <fieldset>
                        <legend><b>
                                <h1>Cadastre-se</h1>
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
                        </div> <br><br><br>
                        <div class="inputBox">
                            <input type="password" name="confirmPassword" id="confirmPassword" class="inputUser" required>
                            <label for="confirmPassword" class="labelInput">Confirm Password</label>
                        </div>
                        <br>
                        <input type="submit" name="submit" id="submit" value="Registrar">
                    </fieldset>
                </form>
            </div>
        </div>
    </main>
    <?php
    include 'footer.php';
    ?>