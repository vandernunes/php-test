<html>
<head>
    <title>Hello Docker</title>
</head>
<body>

<h1>Demo App Vander</h1>

<p>
    <a href=phpinfo.php>phpinfo</a>
</p>

<p>
    <a href=host.php>hostname</a>
</p>

<p>
    <form method=get action=echo.php>
        <input type=submit value="Echo"/> <input type=text name="text" value="Some text here"/>
    </form>
</p>

<p>
    <form method=get action=env.php>
        <input type=submit value="Env var"/> <input type=text name="var" value="Env var name"/>
    </form>
</p>

<p>
    <form method=get action=fibonacci.php>
        <input type=submit value="Fibonacci"/> <input type=text name="value" value="5"/>
    </form>
</p>

</body>
</html>
