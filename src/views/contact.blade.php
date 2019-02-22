<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>User email send </h2>
  <form action="{{ route('contact') }}" method="POST">
    <div class="form-group">
      <label for="Text">Text:</label>
      <input type="text" class="form-control" id="text" placeholder="Enter email" name="name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter password" name="email">
    </div>
    <div class="form-group">
      <label>Message</label>
      <textarea name="message" cols="50" rows="10"></textarea> 
    </div>
    <input type="submit" value="submit">
     {{-- <button type="submit" class="btn btn-default">Submit</button> --}}
  </form>
</div>

</body>
</html>
