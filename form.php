//This is not an actual file.

<form method="POST" onsubmit="return Validate()" name="vForm">
      <div class="_list_input">
        <div class="_first_name">
          <input type="text" placeholder="First Name" name="first"/>
          <div id="first_error" class="val_error"></div>
        </div>
        <div class="_first_name _last_name">
          <input type="text" placeholder="Last Name" name="last"/>
          <div id="last_error" class="val_error"></div>
        </div>
      </div>
      <div class="_list_input">
        <input type="text" placeholder="Email Address" name="email"/>
        <div id="email_error" class="val_error"></div>
      </div>
      <div class="cd-popup-trigger2">
        <input type="submit" value="Sign Up" name="done"/>
      </div>
    </form>
    
    
    <script type="text/javascript">
    
    
    var first = document.forms["vForm"]["first"];
    var last = document.forms["vForm"]["last"];
	var email = document.forms["vForm"]["email"];
    
    
	// GETTING ALL ERROR OBJECTS
	var first_error = document.getElementById("first_error");
	var last_error = document.getElementById("last_error");
    var email_error = document.getElementById("email_error");
        
    function Validate(){
		// VALIDATE USERNAME
		if(first.value == ""){

			first.style.border = "2px solid red";
			first.focus();
			return false;
		}
        
        if(last.value == ""){

			last.style.border = "2px solid red";
			last.focus();
			return false;
		}
    
        if(email.value == ""){

			email.style.border = "2px solid red";
			email.focus();
			return false;
		}
    }
        
    </script>
