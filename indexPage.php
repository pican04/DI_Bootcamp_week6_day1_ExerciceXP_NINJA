<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ExerciceXP_NINJA</title>
    </head>
    <body>
    <form action="submitPage.php" method="post">
            Username: <input type="text" name="username" placeholder="enter name" required/><br/><br/>
            Select your favourite colors:<br/>
            yellow<input type="checkbox" name="check_list[]" value="yellow"/><br/>
            purple<input type="checkbox" name="check_list[]" value="purple"/><br/>
            pink<input type="checkbox" name="check_list[]" value="pink"/><br/>
            red<input type="checkbox" name="check_list[]" value="red"/><br/>
            blue<input type="checkbox" name="check_list[]" value="blue"/><br/>
            indigo<input type="checkbox" name="check_list[]" value="indigo"/><br/>
            orange<input type="checkbox" name="check_list[]" value="orange"/><br/><br/>
            <input type="submit" name="submit" value="Submit"/><br/>
        </form>
    </body>
</html>