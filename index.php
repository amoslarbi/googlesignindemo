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
<h4>User ID: <span id="userId" style="font-weight: normal"></span></h4>
<h4>Username: <span id="username" style="font-weight: normal"></span> </h4>
<img id="avatar">
<h4>Email: <span id="email" style="font-weight: normal"></span> </h4>

<script>

function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.

  document.getElementById("userId").innerHTML = profile.getId();
  document.getElementById("username").innerHTML = profile.getName();
  document.getElementById("avatar").src = profile.getImageUrl();
  document.getElementById("email").innerHTML = profile.getEmail();
}

</script>

</script>

<a href="#" onclick="signOut();">Sign out</a>
<script>
  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }
</script>
    
</body>
</html>