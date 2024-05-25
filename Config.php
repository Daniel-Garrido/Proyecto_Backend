<?php
// ProPayPal es vital para declarar si es demo o prueba las transacciones
// define('ProPayPal', 0); // El cero simboliza entorno de Prueba
// define('ProPayPal', 1); // El 1 simboliza entorno de producción

if (!defined('ProPayPal')) {
    define('ProPayPal', 0);
}

if (!defined('PayPalClientId')) {
    if (ProPayPal) {
        define("PayPalClientId", "Acd53H2JUZV9UI1qkbca5sckXfsxQw996xhdoCBO0AC5vrNjv6umzogZQnoG2Fu7JgZPwGJ0jrgaUN1g");
        define("PayPalSecret", "EFdHk25zMypoHxsveTrUXLIfginGm_FnIU10xfnkHr7aJtJO0Hijerh55wXQsTKcKJTXqnXvHz7n581r");
        define("PayPalBaseUrl", "https://api-m.sandbox.paypal.com");
        define("PayPalENV", "production");
    } else {
        define("PayPalClientId", "Acd53H2JUZV9UI1qkbca5sckXfsxQw996xhdoCBO0AC5vrNjv6umzogZQnoG2Fu7JgZPwGJ0jrgaUN1g");
        define("PayPalSecret", "EFdHk25zMypoHxsveTrUXLIfginGm_FnIU10xfnkHr7aJtJO0Hijerh55wXQsTKcKJTXqnXvHz7n581r");
        define("PayPalBaseUrl", "https://api-m.sandbox.paypal.com");
        define("PayPalENV", "sandbox");
    }
}
?>
