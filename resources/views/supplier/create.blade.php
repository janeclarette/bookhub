<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create a supplier</h1>
    
    <form method="post" action="{{route('supplier.store')}}">
    @csrf
    @method('post')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" />
        </div>
        <div>
            <label>Address</label>
            <input type="text" name="address" placeholder="Address" />
        </div>
        <div>
            <label>Mobile Number</label>
            <input type="text" name="mobilenumber" placeholder="MobileNumber" />
        </div>
        <div>
            <input type="submit" value="Save a new supplier"/>
        </div>
    </form>
</body>
</html>