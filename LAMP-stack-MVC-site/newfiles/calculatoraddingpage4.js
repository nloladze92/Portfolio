// JavaScript Document


function createMyFunction(myOperator)
{
  return new Function("a", "b", "return a" + myOperator + "b;");
}

var add=createMyFunction("+");                // creates "add" function
var subtract=createMyFunction("-");           // creates "subtract" function
var multiply=createMyFunction("*");           // created "multiply" function
// test the functions
alert("result of add="+add(10,2));            // result is 12
alert("result of substract="+subtract(10,2)); // result is 8
alert("result of multiply="+multiply(10,2));  // result is 20
alert(add);