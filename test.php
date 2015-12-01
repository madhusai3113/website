<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>
<div class="topnav">
<table>
  <td>
    <a>home</a>
  </td>
  <td>
  </td>
  <td>
    <form class="">
        <input type="text" placeholder="Search here..." required>
        <button type="submit">Search</button>
    </form>   
  </td>
  <td></td><td></td><td></td><td></td><td></td>
  <td>
    <a>home</a>
  </td>
</table>
</div>

<div class="left sidenav">
  <div class="nav-container">
  <ul class="nav">
    <li class="active">
      <a href="#">
        <span class="icon-home"></span>
        <span class="text">home</span>
      </a>
    </li>
    <li>
      <a href="#">
        <span class="icon-user"></span>
        <span class="text">about</span>
      </a>
      </li>
    <li>
      <a href="#">
        <span class="icon-headphones"></span>
        <span class="text">Audio</span>
      </a>
    </li>
    <li>
      <a href="#">
        <span class="icon-picture"></span>
        <span class="text">Portfolio</span>    
      </a>
    </li>
    <li>
      <a href="#">
        <span class="icon-facetime-video"></span><span class="text">video</span>
      </a>
    </li>
  </ul>
  </div>
</div>
  
  <div class="left sidenav">
  
  </div>
<script type="text/javascript">
   $('li').click(function(){
  
  $(this).addClass('active')
       .siblings()
       .removeClass('active');
    
});
</script>
</body>
</html>