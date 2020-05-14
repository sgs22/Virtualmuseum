
var counter = 0;
$(document).ready(function() {
	
	selectPage();
	
});
function selectPage() {

	$('#home').show();
	$('#about').hide();
	$('#models').hide();
	$('#interaction').hide();
	$('#cokeDescription').hide();
	$('#spriteDescription').hide(); 
	$('#macintoshDescription').hide(); 


	$('#navHome').click(function(){
		$('#home').show();
		$('#about').hide();
		$('#models').hide();
		$('#interaction').hide();
		$('#cokeDescription').hide();
		$('#spriteDescription').hide(); 
		$('#macintoshDescription').hide(); 	  
	});

	$('#navAbout').click(function(){
		$('#home').hide();
		$('#about').show();
		$('#models').hide();
		$('#interaction').hide();
		$('#cokeDescription').hide();
		$('#spriteDescription').hide(); 
		$('#macintoshDescription').hide(); 	  
	});

	$('#navModels').click(function(){
		$('#home').hide();
		$('#about').hide();
		$('#models').show();
		$('#interaction').show(); 
		$('#cokeDescription').hide();
		$('#spriteDescription').show(); 
		$('#macintoshDescription').hide();
		$("#x3dModelTitle_coke").hide();
		$("#x3dModelTitle_sprite").show();
		$("#x3dModelTitle_macintosh").hide();
		$("#x3dCreationMethod_coke").hide();
		$("#x3dCreationMethod_sprite").show();
		$("#x3dCreationMethod_macintosh").hide(); 
	});

	$('#navMacintosh').click(function(){
		$('#home').hide();
		$('#about').hide();
		$('#models').show();
		$('#interaction').show(); 
		$('#cokeDescription').hide();
		$('#spriteDescription').hide(); 
		$('#macintoshDescription').show();
		$("#x3dModelTitle_coke").hide();
		$("#x3dModelTitle_sprite").hide();
		$("#x3dModelTitle_macintosh").show();
		$("#x3dCreationMethod_coke").hide();
		$("#x3dCreationMethod_sprite").hide();
		$("#x3dCreationMethod_macintosh").show(); 
	});

	$('#navSprite').click(function(){
		$('#home').hide();
		$('#about').hide();
		$('#models').show();
		$('#interaction').show(); 
		$('#cokeDescription').hide();
		$('#spriteDescription').show(); 
		$('#macintoshDescription').hide();
		$("#x3dModelTitle_coke").hide();
		$("#x3dModelTitle_sprite").show();
		$("#x3dModelTitle_macintosh").hide();
		$("#x3dCreationMethod_coke").hide();
		$("#x3dCreationMethod_sprite").show();
		$("#x3dCreationMethod_macintosh").hide(); 
	});

}

function cokeDescription() {
	$("button").click(function(){
		
		$("#cokeDescription").show();
        $("#spriteDescription").hide();
		$("#macintoshDescription").hide();
		
		$("#x3dModelTitle_coke").show();
		$("#x3dModelTitle_sprite").hide();
		$("#x3dModelTitle_macintosh").hide();

		$("#x3dCreationMethod_coke").show();
		$("#x3dCreationMethod_sprite").hide();
		$("#x3dCreationMethod_macintosh").hide();

    }); 
}

function spriteDescription() {
    $("button").click(function(){

        $("#cokeDescription").hide();
        $("#spriteDescription").show();
		$("#macintoshDescription").hide();
		
		$("#x3dModelTitle_coke").hide();
		$("#x3dModelTitle_sprite").show();
		$("#x3dModelTitle_macintosh").hide();

		$("#x3dCreationMethod_coke").hide();
		$("#x3dCreationMethod_sprite").show();
		$("#x3dCreationMethod_macintosh").hide();
    }); 
}

function macintoshDescription() {
    $("button").click(function(){

        $("#cokeDescription").hide();
        $("#spriteDescription").hide();
		$("#macintoshDescription").show();
		
		$("#x3dModelTitle_coke").hide();
		$("#x3dModelTitle_sprite").hide();
		$("#x3dModelTitle_macintosh").show();

		$("#x3dCreationMethod_coke").hide();
		$("#x3dCreationMethod_sprite").hide();
		$("#x3dCreationMethod_macintosh").show();
    }); 
}



function swap(selected) {
    //first dont display all div id elements
    document.getElementById('home').style.display = 'none';
    document.getElementById('coke').style.display = 'none';
    document.getElementById('sprite').style.display = 'none';
    document.getElementById('macintosh').style.display = 'none';

    //then display the selected div id contents
    document.getElementById(selected).style.display = 'block';
}

function changeLook() {
    //Use this to change the style dynamically
	document.getElementById('body').style.backgroundColor = '#000000';
	document.getElementById('body').style.Color = '#ffffff';
    //document.getElementById('footer').style.color = '#212529';
	document.getElementsByClassName('card').style.backgroundColor = '#000000';
	document.getElementById('card-body').style.backgroundColor = '#000000';
	document.getElementById('modelDescription').style.backgroundColor = '#000000';
	document.getElementById('models').style.backgroundColor = '#000000';
}

function changeLook2() {
    //Use this to change the style dynamically
	document.getElementById('body').style.backgroundColor = 'beige';
	document.getElementById('Main-Title').style.fontFamily = 'AppleGaramond';
	document.getElementsByClassName('h3').style.backgroundColor = 'AppleGaramond';
	document.getElementById('body').style.Color = '#ffffff';
    //document.getElementById('footer').style.color = '#212529';
	document.getElementsByClassName('card').style.backgroundColor = 'beige';
	document.getElementById('card-body').style.backgroundColor = 'beige';
	document.getElementById('modelDescription').style.backgroundColor = 'beige';
	document.getElementById('models').style.backgroundColor = 'beige';
}

function changeBack() {
    document.getElementById('body').style.backgroundColor = 'white';
    document.getElementById('footer').style.backgroundColor = '#760003';
    
}

function countUp() {
    //Simple incremental counter
    counter += 1;
    //assign the counter result to the inn HTML of the result div tag
    document.getElementById('result').innerHTML = counter;
}

function changeColor(newColor) {
    var elem = document.getElementById('para1');
    elem.style.color = newColor;
}

function animateScroll() {
	window.scroll({ top: 700, left: 0, behavior: 'smooth' });
  }
 
