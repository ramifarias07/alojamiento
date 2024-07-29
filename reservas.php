<?php
$ciudad = $_POST['ciudad'];
$checkin = $_POST['fecha_ingreso'];
$checkout = $_POST['fecha_salida'];
$huespedes = $_POST['huespedes'];

echo("<h1>Reserva de alojamiento</h1>");

echo("<br>se ha realizado una reserva en la ciudad de " .$ciudad);
echo("<br>Se ha realizado una reserva para " .$huespedes. " personas");
echo("<br>Se ha realizado una reserva para el check-in en " .$checkin);


$fecha_inicio = new DateTime ($checkin);
$fecha_salida = new DateTime ($checkout);

$noches = $fecha_inicio ->diff($fecha_salida);

$diasDiferencia = $noches->days;

echo("<br>Se ha realizado una reserva para " .$diasDiferencia. " noches");


/* //mostrar la cantidad de noches tomando en cuenta $checkin y $checkout
// Define las dos fechas
$fecha1 = new DateTime('checkin');
$fecha2 = new DateTime('checkout');

// Resta las fechas
$diferencia = $fecha1->diff($fecha2);

// Muestra el resultado
echo '<br>Días de diferencia: ' . $diferencia->days . ' días';
echo "\n";
echo 'Años: ' . $diferencia->y . ', Meses: ' . $diferencia->m . ', Días: ' . $diferencia->d;

 */
?>
