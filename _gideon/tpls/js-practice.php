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
//            "use strict";
//
//            var salaries = {
//                "Вася": 100,
//                "Петя": 300,
//                "Даша": 250
//            };
//                        
//            var max = 0;// переменная суммы
//            var maxName = "";// переменная имени
//                        
//            for (var key in salaries) { // проверка в переборе
//                if (max < salaries[key]) { // если значение переменной суммы меньше суммы текущего свойства обьекта,                    
//                    max = salaries[key];// то ей присваивается новое значение,
//                    maxName = key;// а переменной имени текущее имя
//                }                 // в итоге в переменных останется максимальная сумма и соответствующее имя
//            }
//            
//            alert(maxName);

            var arr = ["Яблоко", "Апельсин", "Груша"];

            for (var i = 0; i < arr.length; i++) {
                alert(arr[i]);
            }


            var styles = ['Jazz', 'Blues'];
            styles[styles.length] = 'Rock';
            styles[styles.length - 1] = 'Classic';

        </script>
    </script>
    <script src="/js/jquery/jquery-2.1.4.min.js"></script>
    <script src="/js/index.js"></script>
</body>
</html>