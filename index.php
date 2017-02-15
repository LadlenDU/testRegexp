<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Тестирование PHP функции preg_match()</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
</head>
<body>

<input type="text" style="width:500px" name="expr">
<textarea name="string" cols="120" rows="7"></textarea>
<button id="count" style="width: 100px">Рассчитать</button>

<script>
    $(function () {
        function calc() {
            var expr = $('[name="expr"]').val();
            var string = $('[name="string"]').val();
            $.post('tester.php', {expr: expr, string: string}, function () {
                
            }, 'text');
        }

        $("#count").click(function () {
            calc();
        });
    });
</script>

</body>
</html>
