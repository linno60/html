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
            // вспомогательная функция для проверки на число
            function checkNumber(value) {
                return typeof value == 'number';
            }

// декоратор, проверяющий типы для f
// второй аргумент checks - массив с функциями для проверки
            function typeCheck(f, checks) {
                return function () {
                    for (var i = 0; i < arguments.length; i++) {
                        if (!checks[i](arguments[i])) {
                            alert("Некорректный тип аргумента номер " + i);
                            return;
                        }
                    }
                    return f.apply(this, arguments);
                }
            }

            function sum(a, b) {
                return a + b;
            }

// обернём декоратор для проверки
            sum = typeCheck(sum, [checkNumber, checkNumber]); // оба аргумента - числа

// пользуемся функцией как обычно
            alert(sum(1, 2)); // 3, все хорошо

// а вот так - будет ошибка
            sum(true, null); // некорректный аргумент номер 0
            sum(1, ["array", "in", "sum?!?"]); // некорректный аргумент номер 1
        </script>
    </script>
    <script src="/js/jquery/jquery-2.1.4.min.js"></script>
    <script src="/js/index.js"></script>
</body>
</html>