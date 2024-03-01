<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Books</h1>
   <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif

    </div>
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>QTY</th>
                <th>PRICE</th>
                <th>DESCRIPTION</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
            @foreach($books as $books)
                <tr>
                    <td>{{$books->id}}</td>
                    <td>{{$books->name}}</td>
                    <td>{{$books->qty}}</td>
                    <td>{{$books->price}}</td>
                    <td>{{$books->description}}</td>
                    <td>
                        <a href="{{route('book.edit', ['book' => $books])}}">Edit</a>
                    </td>

                    <td>
                    <form method="post" action="{{route('books.destroy', ['book' => $books])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete"/>
                    </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>