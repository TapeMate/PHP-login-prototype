<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <main>
        <form action="includes/formhandler.php" method="post">
            <label for="firstname">Firstname?</label>
            <input type="text" id="firstname" name="firstname" placeholder="Firstname...">

            <label for="lastname">Lastname?</label>
            <input type="text" id="lastname" name="lastname" placeholder="Lastname...">

            <label for="favouritepet">Favourite Pet?</label>
            <select id="favouritepet" name="favouritepet">
                <option value="none">None</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="bird">Bird</option>
            </select>

            <button type="submit">Submit</button>
        </form>
    </main>

</body>

</html>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
    }

    html {
        background: #333333;
        color: beige;
    }

    main {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
    }

    form {
        width: 20%;
        height: max-content;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        text-align: center;
        padding-top: 20px;
    }

    label {
        padding: .5rem;
    }

    input {
        margin-bottom: 20px;
        height: 30px;
    }

    select {
        width: 100px;
    }

    button {
        background: lightgreen;
        margin: .5rem;
        width: 100px;
        padding: .5rem;
        border-radius: 15px;
    }
</style>