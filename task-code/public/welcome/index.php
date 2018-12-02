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
                font-size: 20px;
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
                var arr = {student_id: button.innerText}
                var uri = button.value
                var name = button.name
                $.ajax({
                    type: "GET",
                    url: '../' + uri + '/',
                    data: arr,
                    success: function(data) {
                        $(name).html(data);
                        if (button.innerText.match(/create|drop|get/i)) {
                            $(".item5").html('');
                        }
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
                <button onclick="handleGet(this)" name=".item3" value="createtables">Create tables</button><br>
                <button onclick="handleGet(this)" name=".item3" value="testdata">Create testdata</button><br>
                <button onclick="handleGet(this)" name=".item3" value="droptables">Drop tables</button><br>
                <button onclick="handleGet(this)" name=".item3" value="students">Create/update student</button><br>
                <button onclick="handleGet(this)" name=".item3" value="liststudents">List students</button><br>
                <button onclick="handleGet(this)" name=".item3" value="groups">Create groups</button><br>
                <button onclick="handleGet(this)" name=".item3" value="subjects">Create subject</button><br>
                <button onclick="handleGet(this)" name=".item3" value="teachers">Create teacher</button><br>
                <button onclick="handleGet(this)" name=".item3" value="semesters">Create semester</button><br>
            </div>
            <div id="content" class="item3"></div>
            <div class="item4">
                <form id="top_student">
                    <div>
                        <input type="hidden" name="uri" value="liststudents">
                        <button type="button" onclick="handlePost(this)" name=".item3" value="top_student">Get top students</button><br>
                    </div>
                </form>
            </div>
            <div class="item5"></div>
        </div>
    </body>
</html>
