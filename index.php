<!DOCTYPE html>
<html>

<head>
    <title>Jake Basten</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body style="margin:0px;padding:0px;overflow:hidden">

    <div class="main-content">

        <div class="responsive">
            <iframe id="theFrame" src="/resources/jake_basten_cv.pdf" frameborder="0" width="100%" height="100%"></iframe>
            <script>
                document.getElementById("theFrame").contentWindow.onload = function() {
                    this.document.getElementsByTagName("img")[0].style.width="100%";
                };
            </script>
        </div>

    </div>

</body>

</html>