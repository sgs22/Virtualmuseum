//used to fetch each of the models for the gallery

$(document).ready(function() {

    //Initalise on load with the first object
    var objID = 0;
    update(objID);

    //Update the HTML page with new object data from AJAX request
    $( "#model0" ).click(function() {
        update(objID=0); //Update gallery to this object.
    });
    //Update the HTML page with new object data from AJAX request
    $( "#model1" ).click(function() {
        update(objID=1); //Update gallery to this object.
    });
    //Update the HTML page with new object data from AJAX request
    $( "#model2" ).click(function() {
        update(objID=2); //Update gallery to this object.
    });
    //Update the HTML page with new object data from AJAX request
    $( "#model3" ).click(function() {
        update(objID=3); //Update gallery to this object.
    });


    //Select the media object youd like to view
    $('.obj3D').show(); //Initially show the 3d model of the object first
    $('.objImage').hide(); 
    $('.objVideo').hide(); 
    $('.objSound').hide();
    
    $('#obj3D').click(function(){
        $('.obj3D').delay(500).fadeIn(500);
        $('.objImage').fadeOut(500);
        $('.objVideo').fadeOut(500);	  
        });
    $('#objImage').click(function(){
        $('.objImage').delay(500).fadeIn(500);
        $('.obj3D').fadeOut(500);
        $('.objVideo').fadeOut(500);	  
        });
    $('#objVideo').click(function(){
        $('.objVideo').delay(500).fadeIn(500);
        $('.objImage').fadeOut(500);
        $('.obj3D').fadeOut(500);	  
        });
    
    function update(objID) {	
	
        //Read the JSON file as an AJAX request 
       $.getJSON('application/model/data.json', function(jsonObj) {
       console.log(jsonObj);
           //Assign the AJAX requested data in to approriate <div> tag wrapped in HTML
           //Start by making AJAX request for the selected object name and its description
           $('#name').html(jsonObj.models[objID].name);
           $('#description').html('<p style="display:inline">' + jsonObj.models[objID].description + '</p>');
       
           //Then AJAX request the further information based on the object's metadata
           $('#designedBy').html('<p style="display:inline">' + jsonObj.models[objID].designedBy + '</p>');
           $('#productionDate').html('<p style="display:inline">' + jsonObj.models[objID].productionDate + '</p>');
           $('#modelNumber').html('<p style="display:inline">' + jsonObj.models[objID].modelNumber + '</p>');
           $('#releasePrice').html('<p style="display:inline">' + jsonObj.models[objID].releasePrice + '</p>');
               
           //Next grab (AJAX request) the thumbnails for each object to create the links to each cultural object, note that we are only dealing with 4 objects here.  
           //In reality, if we had multple cultural objects, for example being returned by a search for 'bowl', we would be building a 'gallery' selector to browse the multiple objects
           //So in this particular case, we have hard wired each object 0 to 3
           $('#model0').attr('src', jsonObj.models[0].imageUrl);
           $('#model1').attr('src', jsonObj.models[1].imageUrl);
           $('#model2').attr('src', jsonObj.models[2].imageUrl);
           $('#model3').attr('src', jsonObj.models[3].imageUrl);

           //And grab any 3D media objects
           //Every time the user clicks on a X3DOM object
           var file = jsonObj.models[objID].x3domUrl;
           //Replace the x3d file in the context (if not already loaded)
           if(file != $('#x3domUrl').attr('url'))
               $('#x3domUrl').attr('url', file); 	

            //grab the remaining media objects, e.g. audio, video, image
		    $('#soundUrl').html('<audio width=100% controls>' + '<source src="' + jsonObj.models[objID].soundUrl + '"'+  ' type=' + '"audio/mpeg"' + '/>' + '</audio> ');
            $('#videoUrl').html('<video width=100% height=700px controls>' + '<source src="' + jsonObj.models[objID].videoUrl + '"'+  ' type=' + '"video/mp4"' + '/>' + '</video> ');
            $('#imageUrl').html('<a href="' + jsonObj.models[objID].imageUrl + '" class="lightbox center">' + '<img height=700px src="' + jsonObj.models[objID].imageUrl + '" alt="Object Image"/>');
        });

    }

    function reply_click(clicked_id) {
        alert(clicked_id);
    }


});