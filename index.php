<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Тестирование PHP функции preg_match()</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <style type="text/css">
        html, body {
            width: 100%;
        }
        .container {
            margin: 30px auto;
            width: 610px;
        }
    </style>
</head>
<body>

<div class="container">
    <input type="text" style="width:500px" name="expr">
    <button id="count" style="width: 100px">Рассчитать</button>
    <br>
    <textarea name="string" style="width:500px" rows="7"></textarea><br>
    <pre id="result"></pre>
</div>

<script>
    $(function () {
        function calc() {
            var expr = $('[name="expr"]').val();
            var string = $('[name="string"]').val();
            $.post('tester.php', {expr: expr, string: string}, function (text) {
                $("#result").text(text);
            }, 'text');
        }

        $("[name='expr'], [name='string']").keyup(function () {
            calc();
        });
        $("#count").click(function () {
            calc();
        });
        calc();
    });
</script>

</body>
</html>
