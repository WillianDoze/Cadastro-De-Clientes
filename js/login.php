<?php
 
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "cadastro_cliente";
 
// Create connection
$conn = new mysqli($servername,
    $username, $password, $dbname);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: "
        . $conn->connect_error);
}
 
$sqlquery = "INSERT INTO table VALUES
    ('Willian da Silva Ferreira', '123456789-12', '23.236.563-5', '13170-575', 'Rua Barbara Blumer', 'Sumare', 'SP', '321', 'wfdirceu@gmail.com', 'file')"
 
if ($conn->query($sql) === TRUE) {
    echo "record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>

<?php
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    // collect value of input field
    $data = $_REQUEST['val1'];
 
    if (empty($data)) {
        echo "data is empty";
    } else {
        echo $data;
    }
}
?>
 
// Closing the connection.
$conn->close();
 
?>
