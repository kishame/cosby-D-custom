<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 28px;
            color: #333;
            margin-bottom: 20px;
        }

        h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 10px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 5px;
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
            margin-bottom: 20px;
            
        }

        .customer-info {
            margin-top: 20px;
        }

        label {
            display: block;
            font-size: 16px;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
            font-size: 16px;
        }

     .customer-info>   a {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }

     .customer-info>   a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
    
        <h1>Checkout Summary</h1>
        <div>
            <h2>Selected Options:</h2>
            <ul>
                <li>Size: {{ $size }}</li>
                <li>Pocket: {{ $pocket }}</li>
                <li>Fabric: {{ $fabric }}</li>
                <li>Color: {{ $color }}</li>
            </ul>
        </div>

        <div>
            <h2>T-Shirt Image:</h2>
            <img class="shirt" src="{{ asset('images/tshirt_' . $color . '.png') }}" alt="T-Shirt Image">
        </div>

        <div>
            <h2>Cost: ${{ $cost->cost }}</h2>
        </div>

        <div class="customer-info">
            <h2>Customer Information</h2>
            
                <input type="hidden" name="size" value="{{ $size }}">
                <input type="hidden" name="pocket" value="{{ $pocket }}">
                <input type="hidden" name="fabric" value="{{ $fabric }}">
                <input type="hidden" name="color" value="{{ $color }}"> 
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name" value="{{$data->first_name}}" disabled>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{$data->email}}" disabled>

                <label for="address">Address:</label>
                <input type="text" id="address" name="address" value="{{$data->address}}"disabled>

                <label for="phone">Phone:</label>
                <input type="text" id="phone" name="phone" value="{{$data->phone}}" disabled>

                <a href="success">Place Order</a>
            
        </div>
    </div>
   
    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
   
    
</body>
</html>