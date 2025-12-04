<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            box-sizing:border-box;
        }
        body {
            background-image:url("jujinyi.jpg");
        }
        #wrapper{
            display:flex;
            flex-direction:column;
            align-items:center;
            padding:10px;
        }
        #header,#menu {
            width:100%;
            max-width:900px;
            margin-bottom:10px;
            text-align:center;
            padding:10px;
        }
        #header{
            background-color:#ff9900;
            height:100px;
        }
        #menu{
            background-color:#ccff99;
            height:50px;
        }
        .content-container{
            display:flex;
            flex-direction:row-reverse;
            flex-wrap:wrap;
            justify-content:space-between;
            width:100%;
            max-width:900px;
        }
        .content{
            flex:1 1 45%;
            height:450px;
            background-color:rgba(255,255,255,0.8);
            border-radius:25px;
            margin:5px;
            padding:50px;
            box-sizing:border-box;
        }
        @media(max-width:600px){
            .content{
                flex:1 1 100%;
                margin:10px 0;
            }
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <div id="header">Responsive</div>
        <div id="menu">This is menu</div>
        <div class="content-container">
            <div class="content">Content 1</div>
            <div class="content">Content 2</div>
        </div>
    </div>
</body>
</html>