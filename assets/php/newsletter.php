 <?php
    function getDatabase() {
        $pdo = new PDO('mysql:host=localhost;dbname=waen0056_slyde','waen0056_slyde','Thanhestpasdev1234');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        return $pdo;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $db = getDatabase();

        $sql = "INSERT INTO newsletter (email, date) VALUES (:email, NOW())";

        $attributes = array(
            'email' => $_POST['email']
        );

        $stmt = $db->prepare($sql);

        $stmt->execute($attributes);

        $db = null;
    } 
    else {
        http_response_code(500);
    }
?>