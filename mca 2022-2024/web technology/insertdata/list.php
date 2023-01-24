<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ordered and unordered list.</title>
  </head>
  <style>

.part {
  display: flex;
  flex-direction: row;
}

  .part-1 {
    width: 50vw;
    height: 100vh;

  }

  .square {
    list-style-type: square;
  }

  .circle {
    list-style-type: circle;
  }

  .none {
    list-style-type: none;
  }

  .zero {
    list-style-type: decimal-leading-zero;
  }

  .alpha {
    list-style-type: lower-alpha;
  }

  .roman {
    list-style-type: lower-roman;
  }


  .part-2 {
    width: 50vw;
    height: 100vh;

  }
  </style>
  <body>
    <div class="part">
    <div class="part-1">
    <ul>
      <li>First Item</li>
      <li>Second Item</li>
      <li>Third Item</li>
    </ul>
    <ul>
      <li class="square">First Item</li>
      <li class="square">Second Item</li>
      <li class="square">Third Item</li>
    </ul>
    <ul>
      <li class="circle">First Item</li>
      <li class="circle">Second Item</li>
      <li class="circle">Third Item</li>
    </ul>
    <ul>
      <li class="none">First Item</li>
      <li class="none">Second Item</li>
      <li class="none">Third Item</li>
    </ul>
  </div>
    <div class="part-2">
    <ol>
      <li>First Item</li>
        <li>Second Item</li>
          <li>Third item.</li>
    </ol>
    <ol>
      <li class="zero">First Item</li>
        <li class="zero">Second Item</li>
          <li class="zero">Third item.</li>
    </ol>
    <ol>
      <li class="alpha">First Item</li>
        <li class="alpha">Second Item</li>
          <li class="alpha">Third item.</li>
    </ol>
    <ol>
      <li class="roman">First Item</li>
        <li class="roman">Second Item</li>
          <li class="roman">Third item.</li>
    </ol>
  </div>
</div>
  </body>
</html>
