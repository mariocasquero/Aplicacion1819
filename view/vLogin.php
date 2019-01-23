<div class="contenido">
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
        <label>Usuario </label>
        <input type="text" name="usuario" id="usuario">
        <p class="errores"><?php echo $aErrores["usuario"];?></p><br><br>
        <label>Password </label>
        <input type="password" name="password" id="password">
        <p class="errores"><?php echo $aErrores["password"];?></p><br><br>
        
        <input type="submit" name="acceder" id="acceder" value="Acceder">
    </form>
</div>