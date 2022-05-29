<!DOCTYPE html>
<html>
<head>
    <title>Shop Test</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <style>
        html {
            padding: env(safe-area-inset-top) env(safe-area-inset-right) env(safe-area-inset-bottom) env(safe-area-inset-left);
        }
        body {
            margin: 0;
        }
        h1, h2, h3, h4, h5, h6 {
            margin: 0;
        }
        .container {
            width: 100%;
            max-width: 1440px;
            margin: 0 auto;
            padding: 0 20px;
        }
        section {
            padding: 20px 0;
        }
    </style>
</head>
<body>
    <div id="page">
        <section>
            <div class="container">
                <h1>Checkout</h1>
                <a href="https://www.themichael.co.uk/projects/shop-test/complete.php" class="button">Submit order</a>
            </div>
        </section>
    </div>
    <script>
        var links = document.querySelectorAll('a'),
            linkingUri = ''

        var qs = decodeURIComponent(document.location.search);
        if (qs) {
            linkingUri = qs.split('?linkingUri=')[1]
        }

        for (var i = 0; i < links.length; ++i) {

            var url = new URL(links[i].href);

            if (linkingUri) {
                url.searchParams.append('linkingUri', linkingUri);
                links[i].href = url
            }
        }
    </script>
</body>
</html>