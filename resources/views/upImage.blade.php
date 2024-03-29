<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('image.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="img">Select image:</label>
        <input type="file" id="img" name="img" accept="image/*">
        @error('img')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="submit">
    </form>
</body>

</html>