<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 2</title>
    <style>
        .flex-container{
            display:flex;
            width:100%;
            box-sizing:border-box;
        }
        .flex-container > div{
            width:100%;
            padding:10px;
        }
        .tab{
            height:20px;
            cursor:pointer;
            border-top-left-radius:16px;
            border-top-right-radius:16px;

        }
        .content{
            height:500px;
            padding:20px;
            border:1px solid #ccc;
            border-top: none;
            box-sizing:border-box;
        }

        #tab1,#content1{
            background-color:yellow;
        }
        #tab2,#content2{
            background-color:pink;
        }
        #tab3,#content3{
            background-color:orange;
        }
        #content2,#content3{
            display:none;
        }
        #content1{
            display:block;
        }
    </style>
    <script>
        function tab(t){
            if (t == 1){
                document.getElementById('content1').style.display = 'block';
                document.getElementById('content2').style.display = 'none';
                document.getElementById('content3').style.display = 'none';
            }
            else if (t == 2){
                document.getElementById('content1').style.display = 'none';
                document.getElementById('content2').style.display = 'block';
                document.getElementById('content3').style.display = 'none';
            }
            else if (t == 3){
                document.getElementById('content1').style.display = 'none';
                document.getElementById('content2').style.display = 'none';
                document.getElementById('content3').style.display = 'block';
            }
        }
    </script>
</head>
<body>
    <div class="flex-container">
        <div class="tab" id="tab1" onclick="tab(1)">Tab 1</div>
        <div class='tab' id='tab2' onclick="tab(2)">Tab 2</div>
        <div class='tab' id='tab3' onclick="tab(3)">Tab 3</div>
    </div>

    <div class="flex-container">
        <div class='content' id='content1' >Content 1</div>
        <div class='content' id='content2' >Content 2</div>
        <div class='content' id='content3' >Content 3</div>
    </div>
</body>
</html>