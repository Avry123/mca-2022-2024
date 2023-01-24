<?php
include("navbar.html");
 ?>

 <div class="dom">
   <h2>The HTML DOM (Document Object Model)</h2>
   <p>When a web page is loaded, the browser creates a Document Object Model of the page.
 <br>
 The HTML DOM model is constructed as a tree of Objects</p>
   <p>With the object model, JavaScript gets all the power it needs to create dynamic HTML:</p>
   <ul>
     <li>JavaScript can change all the HTML elements in the page</li>
     <li>JavaScript can change all the HTML attributes in the page</li>
     <li>JavaScript can change all the CSS styles in the page</li>
     <li>JavaScript can remove existing HTML elements and attributes</li>
     <li>JavaScript can add new HTML elements and attributes</li>
     <li>JavaScript can react to all existing HTML events in the page</li>
     <li>JavaScript can create new HTML events in the page
 </li>
   </ul>
   <h2>What is the DOM?</h2>
   <p>The DOM is a W3C (World Wide Web Consortium) standard.</p>
   <p>The DOM defines a standard for accessing documents:</p>
   <p>"The W3C Document Object Model (DOM) is a platform and language-neutral interface that allows programs and scripts to dynamically access and update the content, structure, and style of a document."</p>
   <p>The W3C DOM standard is separated into 3 different parts:</p>
   <ul>
     <li>Core DOM - standard model for all document types</li>
     <li>XML DOM - standard model for XML documents</li>
     <li>HTML DOM - standard model for HTML documents</li>
   </ul>
   <h3>innerHTML insert text.</h3>
   <p id="demo"></p>
   <h3>The HTML DOM Document Object</h3>
   <p>The document object represents your web page.

 If you want to access any element in an HTML page, you always start with accessing the document object.

 Below are some examples of how you can use the document object to access and manipulate HTML.</p>
   <h3>Finding HTML Elements</h3>
   <div class="wtable">
   <div class="table-1">
     <p>
 Method</p>
      <p>document.getElementById(id)</p>
      <p>document.getElementsByTagName(name)</p>
       <p>document.getElementsByClassName(name)</p>
   </div>
   <div class="table-2">
     <p>	Description</p>
      <p>Find an element by element id</p>
      <p>Find elements by tag name</p>
      <p>Find elements by class name</p>
   </div>
 </div>
   <div class="wtable-2">
     <div class="table-3">
       <p>Property</p>
       <p>element.innerHTML =  new html content</p>
       <p>element.attribute = new value</p>
       <p>element.style.property = new style</p>
       <p>Method</p>
       <p>element.setAttribute(attribute, value)</p>
     </div>
     <div class="table-4">
       <p>Description</p>
        <p>	Change the inner HTML of an element</p>
        <p>Change the attribute value of an HTML element</p>
        <p>	Change the style of an HTML element</p>
        <p>Description</p>
        <p>Change the attribute value of an HTML element
 </p>
     </div>
   </div>
   <div class="event">
     <h2>Adding Events Handlers</h2>
     <h3>document.getElementById(id).onclick = function(){code}</h3>
     <h3>Adding event handler code to an onclick event</h3>
   </div>
   <div class="find">
     <h2>Finding HTML Element by Id</h2>
     <h3>const element = document.getElementById("intro");</h3>
     <h2>Finding HTML Elements by Tag Name</h2>
     <h3>const element = document.getElementsByTagName("p");</h3>
     <h2>Finding HTML Elements by Class Name</h2>
     <h3>const x = document.getElementsByClassName("intro");</h3>
     <h2>Finding HTML Elements by CSS Selectors</h2>
     <h3>const x = document.querySelectorAll("p.intro");</h3>
     <h3>If you want to find all HTML elements that match a specified CSS selector (id, class names, types, attributes, values of attributes, etc), use the querySelectorAll() method.
 This example returns a list of all <p> elements with class="intro".</h3>
   </div>
   <div class="example">
     <h2>First Example of changing the content and the attribute inside the html tag using id.</h2>
     <h3 id ="h3">Hello world.</h3>
     <img id="img1" src ="https://images.unsplash.com/photo-1528360983277-13d401cdc186?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" / >
     <h3 id="date"></h3>
     <script>
       document.write(Date());
     </script>
   </div>
   <div class="form"></div>
   <div class="domcss">
     <h2>Syntax: document.getElementById(id).style.property = new style</h2>
     <h3>Changing HTML Style</h3>
     <h3 id="color">Change the color</h3>
     <h3 id="click">Thanks for clicking</h3>
     <button onclick="document.getElementById('click').style.color = 'orange'">Click Here</button>
   <h1 id="demo1">This covers mouseover and mouseout </h1>
     <h1 id="demo2">This is dblclick.</h1>
   </div>
   <div class="events"></div>
 </div>
 <script type="text/javascript">
 document.getElementById("demo").innerHTML = "Hello World!";

document.getElementById("h3").innerHTML = "New text!";

document.getElementById("img1").src = "https://images.unsplash.com/photo-1490806843957-31f4c9a91c65?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80";

document.getElementById("demo1").onmouseover = function() {mouseOver()};
document.getElementById("demo1").onmouseout = function() {mouseOut()};
document.getElementById("demo2").onmouseout = function() {dblClick()};

function mouseOver() {
document.getElementById("demo1").style.color = "red";
}

function mouseOut() {
document.getElementById("demo1").style.color = "orange";
}

function dblClick() {
alert("this is double click");
}





 </script>
 </body>
 </html>
