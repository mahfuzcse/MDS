<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" type="text/css" href="{{asset('css/contact.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">

      <script src="{{asset('js/jquery-3.2.0.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.js')}}"></script>
      <script src="{{asset('js/npm.js')}}"></script>

</head>

<style>
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>

<body>
<h3>Contact Form</h3>

<div class="container">
  <form action="/action_page.php">

    <label for="fname">Name</label>
    <input type="text" id="name" name="name" placeholder="Your name.." required="required" class="form-control"/>


    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Your last name.." required="required" class="form-control" />


    <label for="subject">Subject</label>
    <select id="subject" name="subject" class="form-control" required="required">
                      <option value="na" selected="">Choose One:</option>
                      <option value="service">General Customer Service</option>
                      <option value="suggestions">Suggestions</option>
                      <option value="product">Product Support</option>
    </select>

    <!-- <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea> -->
    
    <label for="name"> Message</label>
    <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required" placeholder="Message"></textarea>


    <input type="submit" value="Submit">
  </form>
</div>
</body>
</html>