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
            <label for="firstname">Firstname? </label>
            <input type="text" id="firstname" placeholder="Firstname...">

            <label for="lasttname">Lastname? </label>
            <input type="text" id="lastname" placeholder="lastname...">

            <label for="favoritepet">Favorite Pet</label>
            <select name="favoritepet" id="fovoritepet">
                <option value="none">None</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="dog">Bird</option>
            </select>
            <button type="submit">Submit</button>
        </form>
    </main>
</body>

</html>