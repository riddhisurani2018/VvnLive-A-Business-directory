<html>
<head>
<style>
body {background:#111}
@t:4000ms;
@d:40px;
@color:#ffffff;
.progress-ring {
  position: relative;
  padding-top: @d/5;
  width: @d;
  height: @d;
  margin: auto;

  .progress-ring__wrap {
    position: absolute;
      width: @d - 2;
      height: @d - 2;

    .progress-ring__circle {
      transform: rotate(225deg);
      animation-iteration-count: infinite;
      animation-name: orbit;
      animation-duration: @t;
      width: @d - 2;
      height: @d - 2;

      opacity: 0;

      &:after {
      content: '';
        position: absolute;
        width: @d/8;
        height: @d/8;
        border-radius: @d/8;
        box-shadow: 0px 0px 5% @color;
        background: @color; /* Pick a color */
      }
    }


    @r:-14deg;
    @m:30;
    &:nth-child(2) {
      transform:rotate(@r);
      .progress-ring__circle {  animation-delay: @t/@m; }
    }
    &:nth-child(3) {
      transform:rotate(@r*2);
      .progress-ring__circle {  animation-delay: @t/@m*2; }
    }
    &:nth-child(4) {
      transform:rotate(@r*3);
      .progress-ring__circle {  animation-delay: @t/@m*3; }
    }
    &:nth-child(5) {
      transform:rotate(@r*4);
      .progress-ring__circle {  animation-delay: @t/@m*4; }
    }
  }
}

@keyframes orbit { 
  0%   { transform:rotate(225deg); opacity: 1;
         animation-timing-function: ease-out; } 

  7%   { transform:rotate(345deg);
         animation-timing-function: linear; }

  35%   { transform:rotate(495deg);
          animation-timing-function: ease-in-out; }

  42%   { transform:rotate(690deg);
          animation-timing-function: linear; }

  70%   { transform:rotate(835deg); opacity: 1; 
         animation-timing-function: linear; }

  76% {opacity: 1;}

  77%   { transform:rotate(955deg);
         animation-timing-function: ease-in; }

  78% { transform:rotate(955deg); opacity: 0; }
  100% { transform:rotate(955deg); opacity: 0; } 
}
</style>
</head>
<div class='progress-ring'>
  <div class='progress-ring__wrap'>
    <div class='progress-ring__circle'></div>
  </div>
  <div class='progress-ring__wrap'>
    <div class='progress-ring__circle'></div>
  </div>
  <div class='progress-ring__wrap'>
    <div class='progress-ring__circle'></div>
  </div>
  <div class='progress-ring__wrap'>
    <div class='progress-ring__circle'></div>
  </div>
  <div class='progress-ring__wrap'>
    <div class='progress-ring__circle'></div>
  </div>
</div>
<?php
include 'index.php';
?>
</html>