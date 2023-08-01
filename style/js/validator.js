(function(){
  'use strict';
  
  $(document).ready(function(){

  	let form = $('.bootstrap-form');

  	// On form submit take action, like an AJAX call
    $(form).submit(function(e){

        if(this.checkValidity() == false) {
            $(this).addClass('was-validated');
            e.preventDefault();
            e.stopPropagation();
        }

    });

    // On every :input focusout validate if empty
    $(':input').blur(function(){
    	let fieldType = this.type;

    	switch(fieldType){
    		case 'text': 
    		
            case 'textarea':

                validateText($(this));
                break;
    		case 'email':
                validateEmail($(this));
                break;
    		case 'checkbox':
    			validateCheckBox($(this));
    			break;
    		case 'select-one':
    			validateSelectOne($(this));
    			break;
    		case 'select-multiple':
    			validateSelectMultiple($(this));
    			break;
    		default:
	    		break;
    	}
	});

$('#mobile').blur(function(){
   let fieldType=this.type;
   validateNumber($(this));

    
});

$('#password, #Confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#Confirm_password').val()) {
    $('#message').html('Password Matched <i class="fa fa-check-circle"></i>').css({"background-color": "#28a745", "color": "white","padding":"5px"});
  } else 
    $('#message').html('Password does Not Matched <i class="fa fa-times-circle">').css({"background-color": "#dc3545", "color": "white","padding":"5px"});
});




$('#Aadhar').blur(function(){
   let fieldType=this.type;
   validateAadhar($(this));

    
});

$('#pin').blur(function(){
   let fieldType=this.type;
   validatePin($(this));

    
});


	// On every :input focusin remove existing validation messages if any
    $(':input').click(function(){

    	$(this).removeClass('is-valid is-invalid');

	});
     $('#mobile').click(function(){

        $(this).removeClass('is-valid is-invalid');

    });

  
      $('#Aadhar').click(function(){

        $(this).removeClass('is-valid is-invalid');

    });
        $('#pin').click(function(){

        $(this).removeClass('is-valid is-invalid');

    });

    // On every :input focusin remove existing validation messages if any
    $(':input').keydown(function(){

        $(this).removeClass('is-valid is-invalid');

    });
     $('#Aadhar').keydown(function(){

        $(this).removeClass('is-valid is-invalid');

    });
       $('#mobile').keydown(function(){

        $(this).removeClass('is-valid is-invalid');

    });
 
$('#pin').keydown(function(){

        $(this).removeClass('is-valid is-invalid');

    });
 

	// Reset form and remove validation messages
    $(':reset').click(function(){
        $(':input, :checked').removeClass('is-valid is-invalid');
    	$(form).removeClass('was-validated');
    });

  });

    // Validate Text and password
    function validateText(thisObj) {
        let fieldValue = thisObj.val();
        if(fieldValue.length > 1) {
            $(thisObj).addClass('is-valid');
        } else {
            $(thisObj).addClass('is-invalid');
        }
    }

     function validateNumber(thisObj) {
        let fieldValue = thisObj.val();
        let pattern=/^[0-9]+$/;
        if(pattern.test(fieldValue) && fieldValue.length==10  ) {
            $(thisObj).addClass('is-valid');
        } else {
            $(thisObj).addClass('is-invalid');
        }
    }

 function validatePin(thisObj) {
        let fieldValue = thisObj.val();
        let pattern=/^[0-9]+$/;
        if(pattern.test(fieldValue)  && fieldValue.length==6) {
            $(thisObj).addClass('is-valid');
        } else {
            $(thisObj).addClass('is-invalid');
        }
    }



     function validateAadhar(thisObj) {
        let fieldValue = thisObj.val();
        let pattern= /^[0-9]+$/;
        if(pattern.test(fieldValue) && fieldValue.length==12  ) {
            $(thisObj).addClass('is-valid');
        } else {
            $(thisObj).addClass('is-invalid');
        }
    }



     

    // Validate Email
    function validateEmail(thisObj) {
        let fieldValue = thisObj.val();
        let pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;

        if(pattern.test(fieldValue)) {
            $(thisObj).addClass('is-valid');
        } else {
            $(thisObj).addClass('is-invalid');
        }
    }




    // Validate CheckBox
    function validateCheckBox(thisObj) {
         
        if($(':checkbox:checked').length > 0) {
            $(thisObj).addClass('is-valid');
        } else {
            $(thisObj).addClass('is-invalid');
        }
    }

    // Validate Select One Tag
    function validateSelectOne(thisObj) {

        let fieldValue = thisObj.val();
        
        if(fieldValue != null) {
            $(thisObj).addClass('is-valid');
        } else {
            $(thisObj).addClass('is-invalid');
        }
    }

    // Validate Select Multiple Tag
    function validateSelectMultiple(thisObj) {

        let fieldValue = thisObj.val();
        
        if(fieldValue.length > 0) {
            $(thisObj).addClass('is-valid');
        } else {
            $(thisObj).addClass('is-invalid');
        }
    }

})();
$('#BSbtninfo').filestyle({
 
buttonName : 'btn-info',
 
buttonText : ' Select a File'
 
});
 