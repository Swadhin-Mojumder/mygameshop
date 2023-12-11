<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <form class="form"  action="{{url('doctorview')}}">
    <div class="form-group">
      <input type="file" id="image" name="image" class="input-field" required>
      <label for="image">Image</label>
    </div>
    <div class="form-group">
      <input type="text" id="address" name="address" class="input-field" required>
      <label for="address">Address</label>
    </div>
    <div class="form-group">
      <input type="text" id="name" name="name" class="input-field" required>
      <label for="name">Name</label>
    </div>
    <div class="form-group">
      <input type="text" id="specialist" name="specialist" class="input-field" required>
      <label for="specialist">Specialist</label>
    </div>
    <div class="form-group">
      <input type="date" id="date" name="date" class="input-field" required>
      <label for="date">Date</label>
    </div>
    <div class="form-group">
      <input type="time" id="time" name="time" class="input-field" required>
      <label for="time">Time</label>
    </div>
    <div class="form-group">
      <input type="text" id="bio_head" name="bio_head" class="input-field" required>
      <label for="bio_head">Bio Head</label>
    </div>
    <div class="form-group">
      <textarea id="bio_body" name="bio_body" class="input-field" required></textarea>
      <label for="bio_body">Bio Body</label>
    </div>
    <button type="submit" class="submit-btn">Submit</button>
  </form>

  <style>
    /* Basic styles for form */
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-color: #f4f4f4;
}

.form {
  max-width: 500px;
  width: 90%;
  padding: 30px;
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.form-group {
  margin-bottom: 20px;
}

.input-field {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
  transition: border-color 0.3s, box-shadow 0.3s;
}

.input-field:focus {
  outline: none;
  border-color: dodgerblue;
  box-shadow: 0 0 5px dodgerblue;
}

label {
  font-weight: bold;
  display: block;
  margin-bottom: 5px;
  color: #333;
  transition: color 0.3s;
}

.label-animation {
  color: dodgerblue;
}

.input-field:hover + label,
.input-field:focus + label {
  color: dodgerblue;
}

.submit-btn {
  width: 100%;
  padding: 10px;
  border: none;
  border-radius: 5px;
  background-color: dodgerblue;
  color: #fff;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s;
}

.submit-btn:hover {
  background-color: #2980b9;
}

  </style>
</body>
</html>
