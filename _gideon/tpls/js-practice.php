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
            var users = [{
                    name: "Вася",
                    surname: 'Иванов',
                    age: 20
                }, {
                    name: "Петя",
                    surname: 'Чапаев',
                    age: 25
                }, {
                    name: "Маша",
                    surname: 'Медведева',
                    age: 18
                }];
            function byField(field) {
                return function (a, b) {
                    return a[field] > b[field] ? 1 : -1;
                }
            }

            users.sort(byField('name'));
            users.forEach(function (user) {
                alert(user.name);
            });

            users.sort(byField('age'));
            users.forEach(function (user) {
                alert(user.name);
            });
        </script>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>