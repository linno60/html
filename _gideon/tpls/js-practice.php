<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Java Script</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="/css/addons/reset.css">
    </head>
    <body>
        <div>JS&#x2702;</div>
        <script>
            var names = ['HTML', 'CSS', 'JavaScript'];

            var nameLengths = names.map(function (name) {
                return name.length;
            });
            

            var arr = ["Есть", "жизнь", "на", "Марсе"];

            var arrLength = [];
            for (var i = 0; i < arr.length; i++) {
                arrLength[i] = arr[i].length;
            }
            var arrLength = arr.map(function (item) {
                return item.length;
            });

        </script>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>