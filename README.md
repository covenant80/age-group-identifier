<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Age group Identifier</h1>
    <p>input age below to find the catigory of your age group  </p>
    <form id="demo">
        Age: <input id="AgeIn" type="text"><br>
        <input type="button" onclick="ageInput(event);" value="submit">
        <p id="AgeText"></p>
    </form>
    <script>
        function ageInput(event) {
        var ageIn = parseInt(document.getElementById("AgeIn").value);
        var ageText = '';
        if (ageIn <= 12)
            ageText = "you are a child";
        else if (ageIn <= 19)
            ageText = "you are a teenager";
        else if (ageIn <= 50)
            ageText = "you are an adult";
        else
        ageText = "you are old"
        document.getElementById("AgeText").innerText = ageText;
        }
    </script>
</body>
</html>
