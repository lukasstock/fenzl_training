<html>
<head>
    <title>Ajax Example</title>

    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var test = []

        $( document ).ready(function() {
            $("#msg").on("click", function () {
                JSON.str
                console.log(123);
                $.ajax({
                    type: 'POST',
                    url: '/getmsg',
                    data: '_token =  {{csrf_token()}}',
                    success: function (data) {
                        $("#msg").html(data);
                    }
                });
            });
        });
    </script>
</head>

<body>
<div id = 'msg'>This message will be replaced using Ajax.
    Click the button to replace the message.</div>

</body>

</html>