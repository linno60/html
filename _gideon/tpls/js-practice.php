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
            var expr, res;

            while (true) {
                expr = prompt("Введите выражение?", '2-');
                if (expr == null)
                    break;

                try {
                    res = eval(expr);
                    if (isNaN(res)) {
                        throw new Error("Результат неопределён");
                    }

                    break;
                } catch (e) {
                    alert("Ошибка: " + e.message + ", повторите ввод");
                }
            }

            alert(res);
        </script>
    </script>
    <script src="/js/jquery/jquery-2.1.4.min.js"></script>
    <script src="/js/index.js"></script>
</body>
</html>