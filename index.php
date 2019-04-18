<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form>
        <h2>Please enter the number</h2><br>
        <input type="number" class="form-input1" name="number" id="number">
        <input type="submit" class="form-submit1" name="submit" value="submit">
    </form>
    <div class="result"></div>
     <script type="text/javascript">
        const form = document.querySelector('form');
        form.onsubmit = function(e) {
            e.preventDefault();
            const xhr = new XMLHttpRequest();
            const n = document.querySelector('#number').value;
            xhr.open('POST', '/fact.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.send('n=' + n);
            xhr.onreadystatechange = function() {
                if (this.readyState == 4 && xhr.status == 200) {
                    const response = document.querySelector('.result');
                    response.innerHTML = this.responseText;
                    console.log(this.responseText);
                }
            };
        };
    </script>
    </body>
</html>