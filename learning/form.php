<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Simple Form</title>
  <link rel="stylesheet" href="../css/form.css" />
</head>
<body>
  <div class="container">
    <h2>User Form</h2>

    <form action = "includes/formhandler.php" method = "post">
      <label for="firstName">First Name</label>
      <input type="text" id="firstName" name="firstName" required />

      <label for="lastName">Last Name</label>
      <input type="text" id="lastName" name="lastName" required />

      <label for="animal">Favorite Animal</label>
      <select id="animal" name="animal" required>
        <option value="">Select one</option>
        <option value="dog">Dog</option>
        <option value="cat">Cat</option>
        <option value="lion">Lion</option>
        <option value="elephant">Elephant</option>
      </select>

      <button type="submit" name = "isSubmitted">Submit</button>
    </form>
  </div>
</body>
</html>
