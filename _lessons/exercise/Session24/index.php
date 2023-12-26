<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form class="searchform" action="search.php" method="post">
        <label for="search">Search for user:</label>
        <input id="search" type="text" name="usersearch" placeholder="Search....">
        <button>Search</button>
    </form>

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