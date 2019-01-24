<div>
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post" id="registro">
        <fieldset>
            <legend>Registrarse</legend>
            
            <label>Usuario </label>
            <input type="text" name="usuarioR" id="usuarioR" size="35" value="<?php echo $_REQUEST["usuarioR"]?>"><br><br>
            <label class="errores"><?php echo $aErrores["usuarioR"];?></label><br><br>
            
            <label>Descripción </label>
            <input type="text" name="descripcion" id="descripcionR" size="35" value="<?php echo $_REQUEST["descripcion"]?>"><br><br>
            <label class="errores"><?php echo $aErrores["descripcion"];?></label><br><br>
            
            <label>Password </label>
            <input type="password" name="passwordR" id="passwordR" size="35" value="<?php echo $_REQUEST["passwordR"]?>"><br><br>
            <label class="errores"><?php echo $aErrores["passwordR"];?></label><br><br>

            <input type="submit" name="aceptar" id="aceptar" value="Aceptar">
            <input type="submit" name="cancelar" id="cancelar" value="Cancelar">
        </fieldset>
    </form>
</div>