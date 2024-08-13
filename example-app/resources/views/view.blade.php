<!-- resources/views/yourview.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data View Table</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 18px;
            text-align: left;
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: green;
            color: #ffffff;
        }
        tr:hover {
            background-color: #c5b9cd;
            color:red;
        }
        
        h2 {
            text-align:center;
        }
        .id{
            background-color:#006996;
            color:#ffffff;
        }
        tr .ed{
            background-color:green;
            color:#ffffff;
            padding:8px;
            text-decoration:none;
            border-radius:5px;
        }
        tr .de{
            background-color:red;
            color:#ffffff;
            padding:8px;
            text-decoration:none;
            border-radius:5px;
        }
       
    </style>
</head>
<body>

    <h2>Data View Table</h2>

    <table>
        <thead>
            <tr>
                <th >id</th>
                <th >Name</th>
                <th >Email</th>
                <th >Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $item)
                <tr>
                <th class="id" scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->address }}</td>
                    <td>
                        <a class="ed" href="{{route('edit',$item->id)}}">Edit</a>
                       
                     <form action="{{route('delete')}}" method="post">
                        @method('DELETE')
                        @csrf
                        <input type="text" name="item_id" value="{{$item->id}}" hidden>
                        <button>delete</button>

                     </form>
                      
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a class="nav-link" href="{{ url('/') }}">Home</a>

</body>
</html>
