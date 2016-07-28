<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Java Script</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="/css/addons/reset.css">
    </head>
    <body>
        <div>JS</div>
        <script>
            "" + 1 + 0    1
            "" - 1 + 0    -1
            true + false    0
            6 / "3" 2
            "2" * "3"    6
            4 + 5 + "px"   9px
            "$" + 4 + 5   $45

            "4" - 2      2

            "4px" - 2    Nan

            7 / 0

            "  -9\n" + 5  -4
            "  -9\n" - 5  -14
            5 && 2     2

            2 && 5     5

            5 || 0     5

            0 || 5     0
            null + 1   1
            undefined + 1  1
            null == "\n0\n"  0
                    + null == +"\n0\n"  0
        </script>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>