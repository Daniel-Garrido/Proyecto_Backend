<?php
session_start();
if($_SESSION["autentificado"] != "SI") {
    echo '<script>
alert("TIENES QUE INICIAR SESION");
location.href = "login.php";
</script>
';
    exit();
}
?>