<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-card-4">
  <div class="w3-container w3-brown">
   
  </div>
  <form class="w3-container" action="/CvpageGet" method="POST"  enctype="multipart/form-data">
    @csrf
    <div>
      <input type="hidden" name="postid" value="{{$postId}}" >
  </div>
    <label class="w3-text-brown"><b>Enter Your CV or Resume</b></label>
    <input class="w3-input w3-border w3-sand" name="image" type="file"></p>
    <p>
    <button class="w3-btn w3-brown">Register</button></p>
  </form>
</div>

</body>
</html> 