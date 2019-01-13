<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* Popup container - can be anything you want */
.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* The actual popup */
.popup .popuptext {
  visibility: hidden;
  width: 160px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}
</style>

</head>
<body style="text-align:center">

<h2>Calculation functionality</h2>
<input type="text" name="num1" id="num1">
<input type="text" name="num2" id="num2">
<div class="popup" onclick="doSum()">
Do sum
<span class="popuptext" id="myPopup">Sum of numbers is: <span id="answer-obj"></span></span>
</div>
<script>
// When the user clicks on div, open the popup
function doSum() {
    var num1 = 0;
    var num2 = 0;
    var inputNum1 = parseInt(document.getElementById('num1').value);
    var inputNum2 = parseInt(document.getElementById('num2').value);
    if (!isNaN(inputNum1)) {
        num1 = inputNum1;
    } else {
        document.getElementById("myPopup").innerHTML = 'Num1 is not a number';
    }
    if (!isNaN(inputNum2)) {
        num2 = inputNum2;
    } else {
        document.getElementById("myPopup").innerHTML = 'Num2 is not a number';
    }
    var answer = num1 + num2;
    if (document.getElementById('answer-obj') != null) {
        document.getElementById('answer-obj').innerHTML = answer;
    }
    document.getElementById("myPopup").classList.toggle("show");
}
</script>

</body>
</html>
