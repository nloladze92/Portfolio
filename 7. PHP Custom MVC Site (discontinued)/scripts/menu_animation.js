// JavaScript Document

var main = function() {
    
    $(".icon-menu").click(function() {
    $(".menu").animate({
    left: "0px"}, 200);
	
	$(".icon-menu").toggleClass('trigger');
           
    $('#body').animate({
     left: "285px"}, 200);
    });
    
    $(".icon-close").click(function() {
    $(".menu").animate({
    left: "-285px"}, 200);
	
	$(".icon-menu").removeClass('trigger');
    
    $('#body').animate({
      left: "0px"}, 200);
    });
};

$(document).ready(main);