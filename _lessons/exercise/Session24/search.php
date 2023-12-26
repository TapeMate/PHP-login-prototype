<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userSearch = $_POST["usersearch"];

    try {
        // includes as sub directory due to we are running search.php from the root
        require_once "includes/dbh.inc.php";

        // add ne param to query in SQL
        $query = "SELECT * FROM comments WHERE username = :usersearch;";

        $stmt = $pdo->prepare($query);

        // bin new Param
        $stmt->bindParam(":usersearch", $userSearch);

        $stmt->execute();

        //creating an array for the results in search
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pdo = null;
        $stmt = null;
        // delete redirect because we want to see the search result
        // delete die method to not interupt the search from executing

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

} else {
    header("Location: ../index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h3>Search Results:</h3>

    <?php

    if (empty($results)) {
        echo "<div>There were no results.</div>";
    } else {
        // var_dump for showing current result, close to print_r
        // var_dump($results);
        foreach ($results as $row) {
            // #################   !!!!!!!!!!!   ##########################
            // OUTPUTTING DATA INTO HTML -> CHECK FOR SPECIAL CHARACTERS!!!
            // #################   !!!!!!!!!!!   ##########################
            echo htmlspecialchars($row["username"]);
            echo htmlspecialchars($row["comment_text"]);
            echo htmlspecialchars($row["created_at"]);
        }
    }

    ?>

</body>

<style>
    html {
        background: #333333;
        color: tomato;
        font-family: Arial, Helvetica, sans-serif;
    }

    h3 {
        width: 300px;
        text-align: center
    }

    form {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        width: 300px;
        height: max-content;
    }

    button {
        margin-top: 20px;
    }
</style>

</html>