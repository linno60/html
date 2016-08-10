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
//            function makeBuffer() { /* ваш код */
//            }
//
//            var buffer = makeBuffer();
//
//// добавить значения к буферу
//            buffer('Замыкания');
//            buffer(' Использовать');
//            buffer(' Нужно!');
//
//// получить текущее значение
//            alert(buffer()); // Замыкания Использовать Нужно!
//
//            var buffer = makeBuffer();
//            buffer(0);
//            buffer(1);
//            buffer(0);
//
//            alert(buffer()); // '010'          


            function makeBuffer() {
                var text = '';

                return function (piece) {
                    if (arguments.length == 0) { // вызов без аргументов
                        return text;
                    }
                    text += piece;
                };
            }
            ;

            var buffer = makeBuffer();

// добавить значения к буферу
            buffer('Замыкания');
            buffer(' Использовать');
            buffer(' Нужно!');
            alert(buffer()); // 'Замыкания Использовать Нужно!'

            var buffer2 = makeBuffer();
            buffer2(0);
            buffer2(1);
            buffer2(0);

            alert(buffer2()); // '010'
        </script>
    </script>
    <script src="/js/jquery/jquery-2.1.4.min.js"></script>
    <script src="/js/index.js"></script>
</body>
</html>