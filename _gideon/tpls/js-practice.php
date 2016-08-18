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
            function throttle(func, ms) {

                var isThrottled = false,
                        savedArgs,
                        savedThis;

                function wrapper() {

                    if (isThrottled) { // (2)
                        savedArgs = arguments;
                        savedThis = this;
                        return;
                    }

                    func.apply(this, arguments); // (1)

                    isThrottled = true;

                    setTimeout(function () {
                        isThrottled = false; // (3)
                        if (savedArgs) {
                            wrapper.apply(savedThis, savedArgs);
                            savedArgs = savedThis = null;
                        }
                    }, ms);
                }

                return wrapper;
            }
        </script>
    </script>
    <script src="/js/jquery/jquery-2.1.4.min.js"></script>
    <script src="/js/index.js"></script>
</body>
</html>