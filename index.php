<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-signin-client_id" content="81705531483-700ijokbsmblmq5alissr5jrancqk7h5.apps.googleusercontent.com">
    <title>Google Sign In</title>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
</head>
<body>

<h4>Integrating Google Sign In</h4>

<div class="g-signin2" data-onsuccess="onSignIn"></div>

<script>

function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
}

</script>
    
</body>
</html>