<div class="registro">
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post" id="registro">
        <fieldset>
            <legend>Registrarse</legend>
            
            <label>Usuario </label>
            <input type="text" name="usuario" id="usuarioR" size="40"><br><br>
            <label class="errores"><?php echo $aErrores["usuario"];?></label><br><br>
            
            <label>Descripción </label>
            <input type="text" name="descripcion" id="descripcionR" size="40"><br><br>
            <label class="errores"><?php echo $aErrores["descripcion"];?></label><br><br>
            
            <label>Password </label>
            <input type="password" name="password" id="passwordR" size="40"><br><br>
            <label class="errores"><?php echo $aErrores["password"];?></label><br><br>

            <input type="submit" name="aceptar" id="aceptar" value="Aceptar">
            <input type="submit" name="cancelar" id="cancelar" value="Cancelar">
        </fieldset>
        
    </form>
</div>