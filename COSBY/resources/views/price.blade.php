<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#06aa5e">
    
    
    <title>price | COSBY D CUSTOM ™</title>
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <script src="./assets/js/script.js" defer></script>
</head>

<body>
    
<form action="Price" method="post"> @csrf
    <label for="size">size</label>
    <select name="size" id="size">
        <option value="small" >small</option>
        <option value="medium" >medium</option>
        <option value="large" >large</option>
        <option value="xlarge" >xlarge</option>
        <option value="xxlarge" selected>xxlarge</option>
    </select>
    <label for="pocket">pocket</label>
    <select name="pocket" id="pocket">

    <option value="single" >single</option>
    <option value="double" >double</option>
    <option value="no" >no</option>
    </select>
    <label for="fabric">fabric</label>
    <select name="fabric" id="fabric">
        <option value="cotton">cotton</option>
        <option value="linen" >linen</option>
        <option value="polyester" selected>polyester</option>
    </select>
<input type="number" name="cost" id="" placeholder="cost">
</form>
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

</body>
</html>