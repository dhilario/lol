<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>

<body>
<div data-role="page">

  <div data-role="header">
    <h1>Lock-Out-Loud App</h1>
  </div>

  <div data-role="main" class="ui-content">
	<div data-role="fieldcontain">
		<label for="password">Enter PIN code:</label>
		<input type="password" name="password" id="password" value="" />
	</div>	
    <input id="on" type="button" value="Turn ON">
    <input id="off" type="button" value="Turn OFF">
  </div>

  <script>
  function is_password_correct() {
    var password = $('#password').val();
    if(password == 'spongebob') return true;
    else {
      alert('Your password is not correct!');
      return false;
    }
  }
	  
  $('#on').click(function() {
    if(is_password_correct()) {
      $.ajax({
        type: "POST",
        url: "lol-start.php" 
      }).done(function(data) {
      });
    }
  });

  $('#off').click(function() {
    if(is_password_correct()) {
      $.ajax({
        type: "POST",
        url: "buzzeroff.php"
      }).done(function( msg ) {
      });
    }
  });
  </script>

  <div data-role="footer">
    <h1>Powered by Kowalski - Don Bosco Makati</h1>
  </div>

</div>
</body>
</html>
