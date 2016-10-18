<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Java Script</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="/css/addons/reset.css">
        <style>
            #elem::shadow span {
                /* для span только внутри Shadow DOM #elem */

                border-bottom: 1px dashed blue;
            }

            #elem > * {
                /* для всех элементов внутри Shadow DOM #elem и далее внутри input[type=date] */

                color: red;
            }
        </style>
    </head>
    <body>
        <p id="elem"></p>
        <script>
            var root = elem.createShadowRoot();
            root.innerHTML = "<span>Текущее время:</span> <input type='date'>";
        </script>
    </script>
</body>
</html>