<html>
    <head>
        <meta charset="UTF-8">
        <title>Car Info :: Database Error</title>
    </head>
    <body>
        <header><h1>Car Info</h1></header>
        <main>
            <h1>Database Error</h1>
            <p>There was an error in connecting to your database</p>
            <p>Check that the database is correctly installed &amp; named correctly</p>
            <p>Error message: <?php echo $error_message; ?> </p>
        </main>
        <footer>&copy; <?php echo date("Y "); ?>Car Info</footer>
    </body>
</html>
