
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
.form{
	padding: 10px;	
}
</style>
</head>
<body>
<h1>User Update</h1>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'start')">Start</button>
  <button class="tablinks" onclick="openCity(event, 'contact')">Contact</button>
  <button class="tablinks" onclick="openCity(event, 'finish')">finish</button>
</div>
<form action="{{ url('user_update')}}" method="post">
		@csrf
<input type="hidden" name="id" value="{{ $result->id}}">
<div id="start" class="tabcontent">
 <div class="form">
      <label>name</label>
      <input type="text" name="name" value="{{ $result->name}}">
    </div>
    <div class="form">
      <label>email</label>
      <input type="email" name="email" value="{{ $result->email}}">
    </div>
</div>

<div id="contact" class="tabcontent">
  <div class="form">
      <label>contact</label>
      <input type="number" name="contact" value="{{ $result->contact}}">
    </div>
    
</div>

<div id="finish" class="tabcontent">
 <input type="submit" name="submit" value="Update">
</div>
</form>
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
   
</body>
</html> 
