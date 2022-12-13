<!DOCTYPE html>
<html>
  <head>
    <title>Firebase Phone Verification</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- <link href="main.css" rel="stylesheet"> -->
  </head>
  <body>
    <form action="verification.php">
      <h1>Firebase Phone verification In PHP</h1>
      <div class="formcontainer">
      <hr/>
      <div class="container">
        <label for="uname"><strong>Phone Number</strong></label>
        <input type="text" id="number" placeholder="Enter phone number" name="uname" required>
      </div>
      <div id="recaptcha-container"></div>
      <button type="button" onclick="phoneAuth();">Send Otp</button>
    
    </form>
    <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase.js"></script>
    <script>
    // Your web app's Firebase configuration
    const firebaseConfig = {

        apiKey: "AIzaSyBnJkUP6dijFn1vnPxGte3htkJoZrPbUEI",

        authDomain: "sms-authentication-74992.firebaseapp.com",

        projectId: "sms-authentication-74992",

        storageBucket: "sms-authentication-74992.appspot.com",

        messagingSenderId: "468212085953",

        appId: "1:468212085953:web:4dab7a068d4df515449040",

        measurementId: "G-S870RM60QZ"

    };

    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
     firebase.analytics();
</script>
    <script src="firebase.js" type="text/javascript"></script>
  </body>
</html>