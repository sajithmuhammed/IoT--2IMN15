<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
	<meta charset="utf-8">
	<title>Internet Of Things - Group 12</title>
       
	<link rel="stylesheet" href="style1.css">
        <link rel="stylesheet" href="css/customcolorpicker.css">

        <script src="js/secondpagejava.js"></script>
       
        <script src="js/customColorPicker.js"></script>
        

	<!-- Google Fonts   -->
	<h1 style="font-style: italic; color:white;" align="center"><strong>Lights</strong></h1>


        <style>
body {
        background-image: url("http://www.twc.edu/sites/default/files/assets/lightbulb-idea.jpg");
} 
 
</style>

</head>
    <body align="center">
        <ul class="tab" align="center">
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Light-1')">Light-1</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Light-2')">Light-2</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Light-3')">Light-3</a></li>
</ul>

<div id="Light-1" class="tabcontent">
  <h3>Light-1</h3>
  <p color="white">You can edit this</p>
  
   <h3>Choose Colour</h3>
   <span class="colorpicker">
    <span class="bgbox"></span>
    <span class="hexbox"></span>
    <span class="clear"></span>
    <span class="colorbox">
        <b class="selected" style="background:#FFFFFF" title="White" value="white"></b>
        <b style="background:#FF0000" title="Red"></b>
        <b style="background:#0000FF" title="Blue"></b>
        <b style="background:#008000" title="Green"></b>
        <b style="background:#000000" title="Black"></b>    
    </span>    
</span>
    <h3>Intensity</h3>

<form method="get">
  Intensity:
  <input type="range" name="points" min="0" max="1"><h3 color="black">Submit Now</h3>
  <input type="submit">
</form>
</div>

<div id="Light-2" class="tabcontent">
  <h3>Light-2</h3>
  <p color="white">You cannot edit this</p>

   <h3>Choose Colour</h3>
   <span class="colorpicker">
    <span class="bgbox"></span>
    <span class="hexbox"></span>
    <span class="clear"></span>
    <span class="colorbox">
        <b class="selected" style="background:#FFFFFF" title="White" value="white"></b>
        <b style="background:#FF0000" title="Red"></b>
        <b style="background:#0000FF" title="Blue"></b>
        <b style="background:#008000" title="Green"></b>
        <b style="background:#000000" title="Black"></b>    
    </span>    
</span>
   
     <h3>Intensity</h3>
  <form  method="get">
  Intensity:
  <input type="range" name="points" min="0" max="1"><h3>Submit Now</h3>
  <input type="submit">
</form>
</div>

<div id="Light-3" class="tabcontent">
  <h3>Light-3</h3>
  <p color="white">You cannot edit this</p>
   
  <h3>Choose Colour</h3>
   <span class="colorpicker">
    <span class="bgbox"></span>
    <span class="hexbox"></span>
    <span class="clear"></span>
    <span class="colorbox">
        <b class="selected" style="background:#FFFFFF" title="White" value="white"></b>
        <b style="background:#FF0000" title="Red"></b>
        <b style="background:#0000FF" title="Blue"></b>
        <b style="background:#008000" title="Green"></b>
        <b style="background:#000000" title="Black"></b>    
    </span>    
</span>
     <script>
     function OnCustomColorChanged(selectedColor, selectedColorTitle, colorPickerIndex) {
        //here we use only one of the passed in parameters: selectedColorTitle
        window.alert(selectedColorTitle);
    };
     </script>
      <h3>Choose Intensity</h3>
     <form method="get">
  Intensity:
  <input type="range" name="points" min="0" max="1"><br><h3>Submit Now</h3>
  <input type="submit" onclick="OnCustomColorChanged()">
</form>
     
    
    </div>
</div>

</div>
    
        <?php
        // put your code here
        ?>
    </body>
</html>
