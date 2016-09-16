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
//            function getDecimal(num) {
//                var str = "" + num;
//                var zeroPos = str.indexOf(".");
//                if (zeroPos == -1)
//                    return 0;
//                str = str.slice(zeroPos);
//                return +str;
//            }
//            
//            alert(getDecimal(12.345)); // 0.345
//            alert(getDecimal(1.2)); // 0.2
//            alert(getDecimal(-1.2)); // 0.2


//            var str = "Ослик Иа-Иа посмотрел на виадук"; // ищем в этой строке
//            var target = "Иа"; // цель поиска
//
//            var pos = 0;
//            while (true) {
//                var foundPos = str.indexOf(target, pos);
//                if (foundPos == -1)
//                    break;
//
//                alert(foundPos); // нашли на этой позиции
//                pos = foundPos + 1; // продолжить поиск со следующей
//            }


//            var string = "карамболь";
//            
//            var string1 = string.slice(0, 4);
//            alert(string1);
//
//            var string2 = string.split("").reverse().join("").slice(1, 4);
//            alert(string2);
//
//            var string3 = string.slice(-4);
//            alert(string3);

///////////////////////////////////////////////////////////////////
            var a = 2,
                    b = 3;

// вместо обращения к a,b через eval
// будем принимать их как аргументы динамически созданной функции
            var mul = new Function('a, b', ' return a * b;');

            alert(mul(a, b)); // 6
        </script>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>