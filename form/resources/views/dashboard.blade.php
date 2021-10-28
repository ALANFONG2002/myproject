<html>
    <body>
    <head>
        <h1><br>View Records</br></h1>
        <style>
            h1{
                margin-left:850px;
            }
            body{
                background-color:lightgreen;
            }
            table{
                border: 5px solid;
                width:100%;
                text-align:center;
                border-collapse:collapse;
                margin:100px 100px 100px 100px;
            }
        </style>
    </head>    

    </body>
    <table border='1'>
        <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Phone</td>
        <td>Subject</td>
        <td>Message</td>
        </tr>
        @foreach($dashboard as $key => $data)
        <tr>
            <th>{{$data->name}}</th>
            <th>{{$data->email}}</th>
            <th>{{$data->phone}}</th>
            <th>{{$data->subject}}</th>
            <th>{{$data->message}}</th>
        </tr>
        @endforeach
    </table>
</html>