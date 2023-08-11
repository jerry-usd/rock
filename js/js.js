$(document).ready(function($) {
	// Declare the body variable
	var $body = $("body");

	// Function that shows and hides the sidebar cart
	$(".cart-button, .close-button, #sidebar-cart-curtain").click(function(e) {
		e.preventDefault();
		
		// Add the show-sidebar-cart class to the body tag
		$body.toggleClass("show-sidebar-cart");

		// Check if the sidebar curtain is visible
		if ($("#sidebar-cart-curtain").is(":visible")) {
			// Hide the curtain
			$("#sidebar-cart-curtain").fadeOut(500);
		} else {
			// Show the curtain
			$("#sidebar-cart-curtain").fadeIn(500);
		}
	});
	
	// Function that adds or subtracts quantity when a 
	// plus or minus button is clicked
	$body.on('click', '.plus-button, .minus-button', function () {
		// Get quanitity input values
		var qty = $(this).closest('.qty').find('.qty-input');
		var val = parseFloat(qty.val());
		var max = parseFloat(qty.attr('max'));
		var min = parseFloat(qty.attr('min'));
		var step = parseFloat(qty.attr('step'));

		// Check which button is clicked
		if ($(this).is('.plus-button')) {
			// Increase the value
			qty.val(val + step);
		} else {
			// Check if minimum button is clicked and that value is 
			// >= to the minimum required
			if (min && min >= val) {
				// Do nothing because value is the minimum required
				qty.val(min);
			} else if (val > 0) {
				// Subtract the value
				qty.val(val - step);
			}
		}
	});
});
f


function f() {

document.getElementById('list').innerHTML="<img src='../images/785.svg' class='preloader'>";
	
var data="type=f";

     
     
		 var xhr = new XMLHttpRequest();
		 xhr.open('POST', 'php/master.php', true);
		 xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
		 xhr.onload = function () {
     
        document.getElementById('list').innerHTML=xhr.responseText;
           new Splide( '#so1', {
  perPage: 5,
  rewind : true,
    pagination  : false,
    breakpoints: {
    '640': {
      perPage: 2,
      gap    : '1rem',
    },
    '480': {
      perPage: 1,
      gap    : '1rem',
    },
  }
} ).mount();
		 }
	xhr.send(data);
	


}



function l() {
var room = arguments[0];

	
var data="type=l&room="+room;

     
     
		 var xhr = new XMLHttpRequest();
		 xhr.open('POST', 'php/master.php', true);
		 xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
		 xhr.onload = function () {
		 	if (room=='KIT') {
 document.getElementById('l').innerHTML=xhr.responseText;
		 	}
		 	if (room=='straight') {
 document.getElementById('b').innerHTML=xhr.responseText;
		 	}
		 	if (room=='curly') {
 document.getElementById('w').innerHTML=xhr.responseText;
		 	}

       
		 }
	xhr.send(data);
	


}

function cart(argument) {
	var id=arguments[0];
		var quantity=arguments[1];
		var color=arguments[2];
	var data="type=addtocart&quantity="+quantity+"&id="+id+"&color="+color;

     
     
		 var xhr = new XMLHttpRequest();
		 xhr.open('POST', 'php/master.php', true);
		 xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
		 xhr.onload = function () {
		 	console.log(xhr.responseText);
             iziToast.success({
    title: 'Added to cart!',
    message: 'Great Job',
    position: 'bottomRight'
  });

             document.getElementById('number').innerHTML = +document.getElementById('number').innerHTML + 1;
             document.getElementById('kki').style.display='none';

             cartdom();
		 }
	xhr.send(data);



}
function cartdom(argument) {
	

var data="type=cartdom";

      document.getElementById('cartdom').innerHTML="<img src='images/785.svg' class='preloaderr'>";
     
		 var xhr = new XMLHttpRequest();
		 xhr.open('POST', 'php/master.php', true);
		 xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
		 xhr.onload = function () {
    
        document.getElementById('cartdom').innerHTML=xhr.responseText;
        document.getElementById('ctop').innerHTML=document.getElementById('cc').innerHTML;
        document.getElementById('number').innerHTML=document.getElementById('cc').innerHTML;
        
          document.getElementById('control').onclick=


        function () {
             
  $("body").toggleClass("show-sidebar-cart");
  document.getElementById('sidebar-cart-curtain').style.display='none';


        };
        document.getElementById('number').innerHTML=document.getElementById('cc').innerHTML;
        document.getElementById('number1').innerHTML=document.getElementById('cc').innerHTML;
		 }
	xhr.send(data);



}

function carta(argument) {

	var act=arguments[0];
	var id=arguments[1];
	var val=arguments[2];
	

var data="type=carta&act="+act+"&id="+id+"&val="+val;

     
     
		 var xhr = new XMLHttpRequest();
		 xhr.open('POST', 'php/master.php', true);
		 xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
		 xhr.onload = function () {
    console.log(xhr.responseText);
           iziToast.success({
    title: 'Cart Updated!',
    message: 'Great Job',
    position: 'bottomRight'
  });
           cartdom();
		 }
	xhr.send(data);



}
function find(argument) {
	  if (typeof arguments[0] !== "undefined") {
	  	var data="type=find&room="+arguments[0];
     }

     else{
     var data="type=find";	
     }
	


      document.getElementById('itoogood').innerHTML="<img src='images/785.svg' class='preloaderr'>";
     
		 var xhr = new XMLHttpRequest();
		 xhr.open('POST', 'php/master.php', true);
		 xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
		 xhr.onload = function () {
    
        document.getElementById('itoogood').innerHTML=xhr.responseText;
      
     console.log(xhr.responseText);
		 }
	xhr.send(data);
	}



	function processs(argument) {

	var a=arguments[0];

	var data="type=processs&date="+a;	

   

   document.getElementById(a).innerHTML="<img src='images/785.svg' class='preloaderr'>";
     
		 var xhr = new XMLHttpRequest();
		 xhr.open('POST', 'php/master.php', true);
		 xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
		 xhr.onload = function () {
    
        document.getElementById(a).innerHTML=xhr.responseText;
      
     
		 }
	xhr.send(data);





	}
	function ship(argument) {
		if (arguments[0] =='NG') {
			if (arguments[1]=='LA') {
					document.getElementById('ts').innerHTML=document.getElementById('country').value+" | "+document.getElementById('country-state').value;
document.getElementById('tp').innerHTML=2000;
			}
			else{
					document.getElementById('ts').innerHTML=document.getElementById('country').value+" | "+document.getElementById('country-state').value;
document.getElementById('tp').innerHTML=10000;
			}
		}
		else{
document.getElementById('ts').innerHTML=document.getElementById('country').value;
document.getElementById('tp').innerHTML=9000;
		}
		document.getElementById('speall').innerHTML =  parseInt(document.getElementById('tp').innerHTML, 10)  + parseInt(document.getElementById('speal').innerHTML, 10) ;

	}


	function pp(argument) {

	var a=arguments[0];
	var a1=arguments[1];

	var data="type=pp&amt="+a+"&email="+arguments[1];	

   

   document.getElementById('pp').innerHTML="<img src='images/785.svg' class='preloaderr'>";
     
		 var xhr = new XMLHttpRequest();
		 xhr.open('POST', 'php/master.php', true);
		 xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
		 xhr.onload = function () {
    
        document.getElementById('pp').innerHTML=xhr.responseText;
        document.getElementById('kj').addEventListener("click", function () {
    FlutterwaveCheckout({
      public_key: "FLWPUBK-317deaa9559d04241c6966d18fc1a0b3-X",
      tx_ref: ''+Math.floor((Math.random() * 1000000000) + 1),
      amount: a,
      currency: "NGN",
      country: "NG",
      payment_options: " ",
      customer: {
        email:a1,
        phone_number: "08116331975",
        name: "Rockas Empire",
      },
      callback: function (data) { // specified callback function
      	     iziToast.success({
    title: 'Payment Completed',
    message: 'Great Job',
    position: 'topRight'
  });


var formElement = document.getElementById('gcpr');
 var formData = new FormData(formElement);
  formData.append('type', 'insertor');
  formData.append('data', data);

   

   document.getElementById('pp').innerHTML="<img src='images/785.svg' class='preloaderr'>";
     
		 var xhr = new XMLHttpRequest();
		 xhr.open('POST', 'php/master.php', true);
	
		 xhr.onload = function () {
   
        document.getElementById('pp').innerHTML=xhr.responseText;
      
     final();
		 }
	xhr.send(formData);



        console.log(data);
      },
     
      customizations: {
        title: "RockasEmpire",
        description: "Payment for items in cart",
        logo: "https://assets.piedpiper.com/logo.png",
      },
    });
  }

 );








		 }
	xhr.send(data);





	}

function final(argument) {
	



	var data="type=final&ref="+document.getElementById('fake').innerHTML;	

   

   document.getElementById('final').innerHTML="<img src='images/785.svg' class='preloaderr'>";
     
		 var xhr = new XMLHttpRequest();
		 xhr.open('POST', 'php/master.php', true);
		 xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
		 xhr.onload = function () {
    
        document.getElementById('final').innerHTML=xhr.responseText;
      
     
		 }
	xhr.send(data);
}


function check(argument) {
	
if (document.getElementById('fphone').value !=='' && document.getElementById('email').value !=='' && document.getElementById('country').value !=='' && document.getElementById('adf').value !=='' ) {
	document.getElementById('step-3').click();
}
else{
	          iziToast.error({
    title: 'Error In Details!',
    message: 'Please Check Entries and try again',
    position: 'topRight'
  });
}


}