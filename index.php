<!DOCTYPE html>
<html>
<head>
  <title>Simple HTML JS</title>
</head>
<body>

  <h2>Hello, Rahul!</h2>
  <button onclick="sayHello()">Click Me</button>

  <div id="message" style="margin-top: 20px; font-weight: bold;"></div>

  <script>
    function sayHello() {
      document.getElementById("message").innerText = "You clicked the button. Updated!";
    }
  </script>

</body>
</html>
