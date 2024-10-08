<html lang="en-US">
<head>
    <title>PHP Only App</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
    html {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        color: #333;
        background-color: #f4f4f4;
    }
    body {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container {
        margin: 10px 10px;
        padding: 0 2em;
        overflow: hidden;
    }
    h1 {
        color: #333;
        font-family: Arial, sans-serif;
    }
    ul {
        list-style-type: none;
        padding: 0;
    }
    li {
        display: inline;
        margin-right: 10px;
    }
    a {
        /*text-decoration: none;*/
        color: #333;
    }
    footer {
        position: absolute;
        bottom: 0 !important;
        margin: 0 !important;
        padding: 1vh 0;
        width: 100vw;
        background-color: #333;
        color: #fff;
        text-align: center;
    }
    table {
        width: 160px;
    }
    th {
        padding-top: 11px;
        padding-bottom: 11px;
        background-color: #515151;
        color: white;
    }
    td {
        padding: 8px;
        padding-left: 10px;
    }
    td:nth-child(odd) {
        text-align: right;
        padding-right: 10px;
    }


    input[type=submit] {
        background-color: #515151;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 160px;
    }
    input[type=submit]:hover {
        background-color: #333;
    }

    input::file-selector-button {
        background-color: #515151;
        color: white;
        padding: 14px 20px;
        margin: 8px 8px 8px 0;
        border: none;
        cursor: pointer;
        width: 160px;
    }
    form {
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        max-width: 360px;
    }
    .nav-bar {
        display: flex;
        justify-content: left;
        padding: 0;
    }
    .nav-bar ul {
        align-content: center;
        margin-left: 25px;
    }
    main {
        display: flex;
        justify-content: center;
    }

    input {
        padding: 8px;
        margin: 5px 0;
        width: 100%;
    }

</style>
<header>
    <div class="container nav-bar">
        <h3>PHP Only App</h3>
        <ul>
            <?php
            $routes = require 'routes.php';
            foreach ($routes['GET'] as $link => $class) {
                $name = basename(str_replace('\\', '/', $class['controller']), 'Controller');
                echo "<li><a href=\"{$link}\">{$name}</a></li>";
            }
            ?>
        </ul>
    </div>
</header>
<body>