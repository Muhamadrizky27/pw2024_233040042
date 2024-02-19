<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        .container {
            left: auto;
            display: flex;
            flex-wrap : nowrap;
        }
        .blue-box {
            width: 50px;
            height: 50px;
            background-color: blue;;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="blue-box">1</div>
    </div>
    <div class="container">
    <div class="blue-box">2</div>
    <div class="blue-box">2</div>
    </div>
    <div class="container">
    <div class="blue-box">3</div>
    <div class="blue-box">3</div>
    <div class="blue-box">3</div>
    </div>
    </body>
    </html>