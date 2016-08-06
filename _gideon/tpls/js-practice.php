<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Java Script</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="/css/addons/reset.css">
    </head>
    <body>
        <div>JS</div>
        <script>
            var user = {
                firstName: "Вася",
                sayHi: function () {
                    alert(this.firstName);
                }
            };

            setTimeout(user.sayHi, 1000); // undefined (не Вася!)
        </script>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>