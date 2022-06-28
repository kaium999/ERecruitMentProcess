<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-card-4">
  <div class="w3-container w3-brown">
   
  </div>
  <form class="w3-container" action="jobsave" method="POST">
    @csrf
    <p>      
    <label class="w3-text-brown"><b>Enter Job titlle</b></label>
    <input class="w3-input w3-border w3-sand" name="jobTitle" type="text"></p>
    <p>      
    <label class="w3-text-brown"><b>Enter Job Description</b></label>
    <input class="w3-input w3-border w3-sand" name="jobdescription" type="text"></p>
  
   
    <p>
    <button class="w3-btn w3-brown">Submit</button></p>
  </form>
  {{session('logid')}}
</div>

</body>
</html> 