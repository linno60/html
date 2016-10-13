<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Java Script</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="/css/addons/reset.css">
        <style>
            #ball{
                width: 40px;
                height: 40px;
                background: red;
                border-radius: 50%;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <div id="ball"></div>
        <script>
            var ball = document.getElementById('ball');

            ball.onmousedown = function (e) { // 1. отследить нажатие

                // подготовить к перемещению
                // 2. разместить на том же месте, но в абсолютных координатах
                ball.style.position = 'absolute';
                moveAt(e);
                // переместим в body, чтобы мяч был точно не внутри position:relative
                document.body.appendChild(ball);

                ball.style.zIndex = 1000; // показывать мяч над другими элементами

                // передвинуть мяч под координаты курсора
                // и сдвинуть на половину ширины/высоты для центрирования
                function moveAt(e) {
                    ball.style.left = e.pageX - ball.offsetWidth / 2 + 'px';
                    ball.style.top = e.pageY - ball.offsetHeight / 2 + 'px';
                }

                // 3, перемещать по экрану
                document.onmousemove = function (e) {
                    moveAt(e);
                }

                // 4. отследить окончание переноса
                ball.onmouseup = function () {
                    document.onmousemove = null;
                    ball.onmouseup = null;
                }
            }
        </script>
    </script>
</body>
</html>