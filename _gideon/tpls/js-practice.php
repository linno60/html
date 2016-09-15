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
            function Calculator(){

                this.read = function () {
                    this.a = +prompt('a?', 0);
                    this.b = +prompt('b?', 0);
                };
                this.sum = function () {
                    return this.a + this.b;
                };
                this.mul = function () {
                    return this.a * this.b;
                };
            }

            var calculator = new Calculator();
            calculator.read();
            alert("Сумма=" + calculator.sum());
            alert("Произведение=" + calculator.mul());</script>
    </script>
    <script src="/js/jquery/jquery-2.1.4.min.js"></script>
    <script src="/js/index.js"></script>
</body>
</html>