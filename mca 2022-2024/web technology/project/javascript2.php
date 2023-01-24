<?php
include("navbar.html");
 ?>
<body onload= "onloading() " onresize="onresizing()"
onbeforeprint="onbeforeprinting()"
onafterprint="onafterprinting()"
       onbeforeunload="return myFunction()"
      >
<div class="evnt">
  <h2>onload</h2>
  <h3>The onload event occurs when an object has been loaded.</h3>
  <h2>onresize Event</h2>
  <h3>The onresize event occurs when the browser window has been resized.</h3>
  <h2>onbeforeprint Event</h2>
  <h3>The onbeforeprint event occurs when a page is about to be printed (before the print dialogue box appears).</h3>
  <h2>onafterprint Event</h2>
  <h3>The onafterprint event occurs when a page has started printing, or if the print dialogue box has been closed.</h3>
  <h2>ononline Event
</h2>
  <h3>The ononline event occurs when the browser starts to work online.</h3>
  <h2>onoffline Event</h2>
  <h3>The onoffline event occurs when the browser starts to work offline.</h3>
  <h2>onerror Event</h2>
  <h3>The onerror event is triggered if an error occurs while loading an external file (e.g. a document or an image).</h3>
  <h2>onbeforeunload Event</h2>
  <h3>The onbeforeunload event occurs when the document is about to be unloaded.

This event allows you to display a message in a confirmation dialog box to inform the user whether he/she wants to stay or leave the current page.</h3>
  <h2>onreset Event</h2>
  <h3>The onreset event occurs when a form is reset.</h3>
  <h2>onsubmit Event</h2>
  <h3>The onsubmit event occurs when a form is submitted.</h3>
  <h2>onsearch Event</h2>
  <form>
  <h3>The onsearch event occurs when a user presses the "ENTER" key or clicks the "x" button in an <input id="search" type="search" onsearch="onsearch10()" onblur="onblur10()"> element with type="search".</h3>

</form>
  <h2>onblur Event</h2>
  <h3>The onblur event occurs when an object loses focus.
<br>
The onblur event is most often used with form validation code (e.g. when the user leaves a form field).</h3>
  <h2>oninput Event</h2>
  <h3>The oninput event occurs when an element gets user input.

This event occurs when the value of an input or textarea element is changed.</h3>
  <h2>HTML oninvalid Event Attribute</h2>
    <h3>The oninvalid event occurs when a submittable <input> element is invalid.</h3>
  <h2>onselect Event</h2>
  <h3 onselect="onselect10()">The onselect event occurs after some text has been selected in an element.

The onselect event is mostly used on </h3>
  <h2>onmouseup Event</h2>
    <h3>The onmouseup event occurs when a user releases a mouse button over an element.</h3>
  <h2>onfocus Event</h2>
  <h3 onfocus="myFunction60()">The onfocus event occurs when an element gets focus.

The onfocus event is most often used with input, select, and a.</h3>
  <h2>onkeypress Event</h2>
  <h3>The onkeypress event occurs when the user presses a key (on the keyboard).</h3>
  <h2>HTML onmousewheel Attribute</h2>
  <h3>The onmousewheel attribute fires when the mouse wheel is rolled up or down over an element.

Deprecated. The onmousewheel attribute is deprecated, you should use the onwheel attribute instead.</h3>
<h2>onmouseup</h2>
<h3 onmouseup="onmouseup10()">It fires when the user releases a mouse button.</h3>
<h2>mouseover</h2>
<h3 onmouseover="onmouseover10()">It fires when the user moves the cursor, which was outside an element before, inside the element. We can say that it fires when we move the cursor over the element.</h3>
  <h2>onmouseout Event</h2>
  <h3 onmouseout="onmouseout10()">The onmouseout event occurs when the mouse pointer is moved out of an element, or out of one of its children.</h3>
  <h2>oncopy Event</h2>
<h3  oncopy="myFunction30()">The oncopy event occurs when the user copies the content of an element.</h3>
  <h2>oncut Event</h2>
  <h3 oncut="myFunction40()">The oncut event occurs when the user cuts the content of an element.</h3>
  <h2>onpaste Event</h2>
  <h3 onpaste="myFunction50()">The onpaste event occurs when the user pastes some content in an element.</h3>
    <input type="search" id = "search" >


  <form onreset="myFunction10()" onsubmit="myFunction20()">
  Enter name: <input type="text">
  <input type="reset">
    <input type="submit">
</form>

</div>

<script type="text/javascript">
function onloading() {
      alert("hello world");
    }

function onresizing() {
      alert("the width has decreased");
    }

function onbeforeprinting() {
      alert("do you want to print something? ");
    }
 function onafterprinting() {
      alert("you have printed something");
    }

function myFunction() {
return "Write something clever here...";
}

function myFunction10() {
alert("The form was reset");
}

function myFunction20() {
alert("The form was submitted");
}

function myFunction30() {
alert("you have copied the text");
}

function myFunction40() {
alert("you have cut the text");
}

function myFunction50() {
alert("you have pasted the element");
}

function myFunction60() {
alert("you have focus");
}

function onmouseout() {
  alert("the mouse has been moved");
}

function onmouseover10() {
  alert("this is mouseover");
}

function onmouseup10() {
  alert("this is mouseup");
}

function onsearch10() {
  alert("this is onsearch");
}

function onselect10() {
  alert("this is onselect");
}

function onblur10() {
 var x = document.getElementById("fname");
 x.value = x.value.toUpperCase();
}

</script>
</body>
</html>
