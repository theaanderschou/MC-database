    <?php
    include_once "dbh.inc.php";

        $navn = $_POST['navn'];
        $email = $_POST['email'];
        $besked = $_POST['besked'];


        // First we make a SQL query that selects all data from our users table in the database.
        $sql = "INSERT INTO mc_contact (navn, email, besked) VALUES ('$navn', '$email', '$besked');";
        

        // Then we run the query in the database.
        mysqli_query($conn, $sql);
    
    ?> 
