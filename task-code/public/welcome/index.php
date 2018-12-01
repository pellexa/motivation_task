<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Motivation task</title>
        <style>
            .item1 { grid-area: header; }
            .item2 { grid-area: menu; }
            .item3 { grid-area: main; }
            .item4 { grid-area: right; }
            .item5 { grid-area: footer; }

            .grid-container {
                display: grid;
                grid-template-areas:
                    'header header header header header header'
                    'menu main main main right right'
                    'menu footer footer footer footer footer';
                grid-gap: 1px;
                background-color: #2196F3;
                padding: 1px;
            }
            .grid-container > div {
                background-color: rgba(255, 255, 255, 0.8);
                text-align: center;
                padding: 20px 0;
                font-size: 30px;
            }
        </style>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="../js/ip.js"></script>
        <script>
            var client_ip = '';

            getUserIP(function(ip){
                client_ip = ip;
            });

            function handleGet(button) {
                var uri = button.value
                $.ajax({
                    type: "GET",
                    url: '../' + uri + '/',
                    success: function(data) {
                        $(".item3").html(data);
                    }
                });
            }

            function handlePost(element) {
                var arr = $('#' + element.value).serializeArray()
                var uri = arr[arr.length - 1].value
                arr.push({name: "ip", value: client_ip})

                $.ajax({
                    type: "POST",
                    url: '../' + uri + '/',
                    data: arr,
                    success: function(data) {
                        $(".item3").html(data);
                    }
                });
            }
        </script>
    </head>
    <body>
        <div class="grid-container">
            <div class="item1">Motivation task</div>
            <div class="item2">
                <button onclick="handleGet(this)" value="createtables">Create tables</button><br>
                <button onclick="handleGet(this)" value="testdata">Create testdata</button><br>
                <button onclick="handleGet(this)" value="droptables">Drop tables</button><br>
                <button onclick="handleGet(this)" value="students">Create/update student</button><br>
                <button onclick="handleGet(this)" value="liststudents">List students</button><br>
                <button onclick="handleGet(this)" value="groups">Create groups</button><br>
                <button onclick="handleGet(this)" value="subjects">Create subject</button><br>
                <button onclick="handleGet(this)" value="teachers">Create teacher</button><br>
                <button onclick="handleGet(this)" value="semesters">Create semester</button><br>
            </div>
            <div id="content" class="item3"></div>
            <div class="item4">Filters</div>
            <div class="item5">Footer</div>
        </div>
    </body>
</html>
