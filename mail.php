<!-- DEMO FORM -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Mailer</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
  <div class="container mt-5">
  <div class="conatiner-fluid content-inner py-0 custom_body">
  <div class="bd-example">
    <form action="handler.php" method="post">
      <h2>Send Mail</h2>
      <div class="mb-3">
        <label for="" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="name" required>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Email Address</label>
        <input type="email" name="email" class="form-control" id="email" required>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Subject</label>
        <input type="text" name="subject" class="form-control" id="subject" required>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Message</label>
        <textarea type="text" class="form-control" name="message" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Send Mail</button>
    </form>
  </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>