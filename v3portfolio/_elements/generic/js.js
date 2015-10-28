$(function() {

$(".headline").pxgradient({ //произвольный селектор jQuery
  step: 10, 
  colors: ["#fc0","#0fc","#00f"], 
  dir: "x" 
});
console.log($(".headline"));

});