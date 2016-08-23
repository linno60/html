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
            function formatDate(d) {
                switch ( {
                    }.toString.call(d).slice(8, -1)) {
                    case 'Date':
                        return getDate(d);
                    case 'String':
                        return getDate(new Date(d));
                    case 'Number':
                        return getDate(new Date(d * 1000));
                    case 'Array':
                        return getDate(new Date(d[0], d[1], d[2]));
                    default:
                        return 'Unknown Format';
                }
                function getDate(d) {
                    return f(d.getDate()) + '.' +
                            f(d.getMonth() + 1) + '.' +
                            f(d.getFullYear() % 100);
                }
                function f(n) {
                    return n < 10 ? '0' + n : n;
                }
            }
        </script>
    </script>
    <script src="/js/jquery/jquery-2.1.4.min.js"></script>
    <script src="/js/index.js"></script>
</body>
</html>