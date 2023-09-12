<?php
$servername = "localhost";
$username = "jose";
$password = "#jose21Agosto";
$database = "sistemaprincipal";

// Crear una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Realizar una consulta
$query = "SELECT * FROM user_passwords";
$result = $conn->query($query);

// Crear una tabla HTML para mostrar los resultados
if ($result->num_rows > 0) {
    echo "<table border='1'>
        <tr>
            <th>id</th>
            <th>usuario</th>
            <th>contraseña</th>
        </tr>";
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>" . $row["id"] . "</td>
            <td>" . $row["usuario"] . "</td>
            <td>" . $row["contraseña"] . "</td>
        </tr>";
    }

    echo "</table>";
} else {
    echo "No se encontraron resultados.";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
