<html>

    <head>

        <title>Tasks Page</title>

    </head>


    <body>

        @foreach($Tasks as $task)

            {{$task->Task_Name}} :: {{$task->Body}}
            <br>

        @endforeach


    </body>


</html>