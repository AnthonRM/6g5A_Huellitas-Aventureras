<?php
session_start();
?>
<div class="main">
    <div class="shop_top">
        <div class="container">
            <div class="col-md-6">
                <div class="profile_components-page">
                    <div style=" padding:1px; background-color:#65AAF0; line-height:1.4;">
                        <br>
                    </div>
                    <img src=img/regIcon.png>
                    <div style=" padding:1px; background-color:#65AAF0; line-height:2.5;">
                        <br>
                    </div>

                    <div style=" margin-top:25px;  padding:5px; background-color:#65AAF0; line-height:1.4;">
                        <h4 style="margin: rigth 30px;"> Mascotas</h4>
                    </div>
                    <div style=" padding:20px; background-color:#f2f2f2; line-height:1;">
                        <p>
                            Kiara
                            <br>
                            Dona
                            <br>
                            Mia
                            <br>
                            Kelly
                        </p>
                    </div>
                    <div style=" margin-bottom:10px; padding:2px; background-color:#65AAF0; line-height:1;">
                        <a href="add-pet.php">
                            <button type="getnow" name="add-pet" class="btn" required="required">
                                <p>Add</p></button>
                        </a>
                        <a href="edit-pet.php">
                            <button type="getnow" name="edit-pet" class="btn" required="required"><p>Edit</p></button>
                        </a></div>
                    <div class="clear"></div>
                </div>
            </div>

            <div class="col-md-6">
                <fieldset class="input">
                    <div style=" padding: 5px;px; background-color:#65AAF0; line-height:1.4;">
                        <h4> Datos personales</h4>
                    </div>
                    <div style=" padding:20px; background-color:#f2f2f2; line-height:1.4;">
                        <p>
                            Nombre: <?php echo $_SESSION["userName"]; ?>
                            <br>
                            Género: <?php
                            if ($_SESSION["userGender"] == "O")
                                echo "Otro";
                            else if ($_SESSION["userGender"] == "F")
                                echo "Femenino";
                            else
                                echo "Masculino";
                            ?>
                            <br>
                            Edad: <?php echo $_SESSION["userAge"]; ?> años
                            <br>
                            Teléfono: <?php echo $_SESSION["userPhone"]; ?>
                            <br>
                            Dirección: <?php echo $_SESSION["userAddress"]; ?>
                            <br>
                            Correo: <?php echo $_SESSION["userMail"]; ?>
                            <br>
                            Contraseña: <?php echo $_SESSION["userPassword"]; ?>
                            <br>
                        </p>
                    </div>
                    <div style=" padding:1px; background-color:#65AAF0; line-height:1.4;">
                        <br>
                    </div>
                    <div style="margin-top:25px; padding:5px; background-color:#65AAF0; line-height:1.4;">
                        <h4> Método de pago</h4>
                    </div>
                    <div style="  padding:20px; background-color:#f2f2f2; line-height:1.4;">
                        <p>
                            Sin Métodos de Pago Registrados.
                        </p>
                    </div>
                    <div style=" padding:1px; background-color:#65AAF0; line-height:1.4;">
                        <br>
                    </div>
<!--                    <div style="margin-top:25px; padding:5px; background-color:#65AAF0; line-height:1.4;">-->
<!--                        <h4> Sobre nosotros</h4>-->
<!--                    </div>-->
<!--                    <div style=" padding:20px; background-color:#f2f2f2; line-height:1.4;">-->
<!--                        <p>-->
<!--                            Somos un grupo de jovenes estudiantes, amantes de los animales unidos con el fin mejorar la-->
<!--                            calidad de vida de nuestros peluditos.-->
<!--                        </p>-->
<!--                    </div>-->
<!--                    <div style=" padding:1px; background-color:#65AAF0; line-height:1.4; margin-bottom: 10px;">-->
<!--                        <br>-->
<!--                    </div>-->
                </fieldset>
                </form>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
</div>
</div>