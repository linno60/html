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
            function Journal(date) {
                this.date = date;
                // ...
            }
// возвращает значение, большее 0, если A больше B, иначе меньшее 0
            Journal.compare = function (journalA, journalB) {
                return journalA.date - journalB.date;
            };
        </script>
    </script>
    <script src="/js/jquery/jquery-2.1.4.min.js"></script>
    <script src="/js/index.js"></script>
</body>
</html>