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
            switch (browser) {
            case 'IE':
                    alert('О, да у вас IE!');
                    break;
                    case 'Chrome':
                    case 'Firefox':
                    case 'Safari':
                    case 'Opera':
                    alert('Да, и эти браузеры мы поддерживаем');
                    break;
                    default:
                    alert('Мы надеемся, что и в вашем браузере все ок!');
            }

            var browser = prompt;
                    if browser = 'IE'{
                    alert('О, да у вас IE!');
                    } else if browser = 'Chrome' || 'Firefox' || 'Safari' || 'Opera'{
            alert('Да, и эти браузеры мы поддерживаем');
            } else{
            alert('Мы надеемся, что и в вашем браузере все ок!');
            }




            var a = + prompt('a?', '');
                    if (a == 0) {
            alert(0);
            }

            if (a == 1) {
            alert(1);
            }

            if (a == 2 || a == 3) {
            alert('2,3');
            }

            var a = + prompt('a?', '');
                    switch (a){
            case: (0):
                    alert(0);
                    break;
                    case: (1):
                    alert(1);
                    break;
                    case: 2:
                    case: 3:
                    alert('2,3');
                    break;
            }


            a = + prompt("Enter a digit", "")
                    switch (a)
            {
            case 0:
                    case 1: alert(a);
                    break;
                    case 2:
                    case 3: alert("2,3");
                    break;
            }
        </script>
    </script>
    <script src="/js/jquery/jquery-2.1.4.min.js"></script>
    <script src="/js/index.js"></script>
</body>
</html>