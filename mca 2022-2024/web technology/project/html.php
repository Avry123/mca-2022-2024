<?php
include("navbar.html");
 ?>


   <div class="html">
<h1>Document type declaration</h1>
<h3>A document type declaration, or DOCTYPE, is an instruction that associates a particular XML or SGML document with a document type definition.</h3>
<h1>HTML</h1>
<h3>An HTML element is a type of HTML document component, one of several types of HTML nodes. HTML document is composed of a tree of simple HTML nodes, such as text nodes, and HTML elements, which add semantics and formatting to parts of document. Each element can have HTML attributes specified.</h3>
<h1>head</h1>
<h3>The <head> element is a container for metadata (data about data) and is placed between the <html> tag and the <body> tag. Metadata is data about the HTML document. Metadata is not displayed. Metadata typically define the document title, character set, styles, scripts, and other meta information.</h3>
  <h1>body</h1>
  <h3>The <body> tag defines the document's body. The <body> element contains all the contents of an HTML document, such as headings, paragraphs, images, hyperlinks, tables, lists, etc. Note: There can only be one <body> element in an HTML document.</h3>
    <h1>span</h1>
    <h3>Span tag is an inline container used to mark up a part of a text, or a part of a document.

The span tag is easily styled by CSS or manipulated with JavaScript using the class or id attribute.

The span tag is much like the div element, but div is a block-level element and span is an inline element.</h3>
    <h1>Div</h1>
    <h3>The div tag defines a division or a section in an HTML document.

The div tag is used as a container for HTML elements - which is then styled with CSS or manipulated with JavaScript.

The div tag is easily styled by using the class or id attribute.

Any sort of content can be put inside the div tag!

Note: By default, browsers always place a line break before and after the div element.</h3>
    <h1>DIV</h1>
    <h3>The div tag defines a division or a section in an HTML document.

The div tag is used as a container for HTML elements - which is then styled with CSS or manipulated with JavaScript.

The div tag is easily styled by using the class or id attribute.

Any sort of content can be put inside the div tag!
<br><br>
Note: By default, browsers always place a line break before and after the div element.
</h3>
    <h1>P tag (para tag)</h1>
    <h3>The HTML p element defines a paragraph.
A paragraph always starts on a new line, and browsers automatically add some white space (a margin) before and after a paragraph.</h3>
    <h1>Links</h1>
    <h3>HTML links are hyperlinks.

You can click on a link and jump to another document.

When you move the mouse over a link, the mouse arrow will turn into a little hand.<br>
  The most important attribute of the a element is the href attribute, which indicates the link's destination.

The link text is the part that will be visible to the reader.

Clicking on the link text, will send the reader to the specified URL address.
</h3>
    <h1>img tag</h1>
    <h3>The HTML img tag is used to embed an image in a web page.

Images are not technically inserted into a web page; images are linked to web pages. The img tag creates a holding space for the referenced image.

The img tag is empty, it contains attributes only, and does not have a closing tag.
<br><br>
The img tag has two required attributes:
<ul>
<li> src - Specifies the path to the image</li>
  <li>alt - Specifies an alternate text for the image</li>
      </ul>
  </h3>
    <h1>class</h1>
    <h3>The class attribute is often used to point to a class name in a style sheet. It can also be used by a JavaScript to access and manipulate elements with the specific class name.</h3>
    <h1>ID</h1>
    <h3>The HTML id attribute is used to specify a unique id for an HTML element.
<br><br>
You cannot have more than one element with the same id in an HTML document.
<br><br>    The id attribute specifies a unique id for an HTML element. The value of the id attribute must be unique within the HTML document.
<br><br>
The id attribute is used to point to a specific style declaration in a style sheet. It is also used by JavaScript to access and manipulate the element with the specific id.
<br>
The syntax for id is: write a hash character (#), followed by an id name.</h3>
    <h1>form</h1>
    <h3>The form tag is used to create an HTML form for user input.</h3>
      <ul>
        <li><a href ="input">input</a></li>
        <li><a href ="textarea">textarea</a></li>
        <li><a href ="button">button</a></li>
        <li><a href ="select">select</a></li>
        <li><a href ="option">option</a></li>
      </ul>
    <div class="input">
      <h1>input</h1>
      <h3>The input tag specifies an input field where the user can enter data.

The input element is the most important form element.

The input element can be displayed in several ways, depending on the type attribute.</h3>
      <ul>
        <li>input type="button"</li>
        <li>input type="checkbox"</li>
        <li>input type="color"</li>
        <li>input type="email"</li>
        <li>input type="date"</li>
        <li>input type="password"</li>
        <li>input type="file"</li>
        <li>input type="image"</li>
        <li>input type="month"</li>
        <li>input type="number"</li>
        </ul>
    </div>
    <div class="textarea">
      <h1>textarea</h1>
      <h3>The textarea tag defines a multi-line text input control.

The textarea element is often used in a form, to collect user inputs like comments or reviews.

A text area can hold an unlimited number of characters, and the text renders in a fixed-width font (usually Courier).<br>

The size of a text area is specified by the cols and rows attributes (or with CSS).<br>

The name attribute is needed to reference the form data after the form is submitted (if you omit the name attribute, no data from the text area will be submitted).

The id attribute is needed to associate the text area with a label. </h3>
    </div>
    <div class="button">
      <h1>button</h1>
      <h3>The button tag defines a clickable button.

Inside a button element you can put text (and tags like i, b, strong, br, img, etc.). That is not possible with a button created with the input element!</h3>
    </div>
    <div class="option">
      <h1>Option</h1>
      <h3>The value attribute specifies the value to be sent to a server when a form is submitted.

The content between the opening <option> and closing </option> tags is what the browsers will display in a drop-down list. However, the value of the value attribute is what will be sent to the server when a form is submitted.
<br>
Note: If the value attribute is not specified, the content will be passed as a value instead.</h3>
    </div>
    <div class="select">
      <h1>Select</h1>
      <h3>The form attribute specifies the form the drop-down list belongs to.

The value of this attribute must be equal to the id attribute of a <form> element in the same document.</h3>
        <h3>form_id: Specifies the form element the select element belongs to. The value of this attribute must be equal to the id attribute of a form element in the same document.</h3>
    </div>
    </div>
</body>
</html>
