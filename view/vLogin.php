<div class="contenido">
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post" id="login">
        <fieldset>
            <legend>Login</legend>
            
            <label>Usuario </label>
            <input type="text" name="usuario" id="usuario" size="30"><br><br>
            <label class="errores"><?php echo $aErrores["usuario"];?></label><br><br>
            <label>Password </label>
            <input type="password" name="password" id="password" size="30"><br><br>
            <label class="errores"><?php echo $aErrores["password"];?></label><br><br>

            <input type="submit" name="acceder" id="acceder" value="Acceder">
            <input type="submit" name="registrarse" id="registrarse" value="Registrarse">
        </fieldset>
        
    </form>
</div>