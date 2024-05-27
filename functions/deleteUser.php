<?php
session_start();
include_once "../conetion.php";

$id = intval($_GET['id']); // Sanitiza la entrada
$userId = $_SESSION['user_id'];

// Verificar si el usuario actual es el mismo que se va a eliminar
if ($userId == $id) {
  header("Location: ../listaUser.php?error=delete-yourself");
    exit();
}

try {
    // Obtener la instancia de la conexión
    $db = Database::get_instance();

    // Primero, eliminar las dependencias del usuario en otras tablas
    $stmt = $db->prepare("DELETE FROM shipping_details WHERE user_id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();

    // Luego, eliminar el usuario
    $stmt = $db->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();

    header("Location: ../listaUser.php?success=deleted");
    exit();
} catch (mysqli_sql_exception $e) {
    echo "<script>alert('No se pudo eliminar el usuario. Asegúrate de que no tiene datos relacionados.');</script>";
    echo "<script>window.location.href = '../listaUser.php';</script>";
    exit();
}
?>
