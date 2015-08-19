	function showHover(hover,onOff) {

		if (onOff) 
			document.getElementById(hover).style.visibility = 'visible';
		else 
			document.getElementById(hover).style.visibility = 'hidden';
	}

		// $(document).ready(function(){
		// 	$('#imageGallery a').on('click', function(){
		// 		$('#placeholder').attr('src', this.href );
		// 		$('#description').html(this.title );
		// 		return false;
		// 	});
		// });


	function validate() {

		errorMsg = "";

    if (document.signup1.firstname.value == '')    //--- validate firstname is entered
    	errorMsg += ' First Name is missing !!! \n' ;

    else if (!/^[A-Za-z ]+$/.test(signup1.firstname.value)){
    	errorMsg += ' First Name you entered is not valid !!! \n' ;
                }                 //--- validate firstname is correct

     if (document.signup1.lastname.value == '')                 //--- validate lastname is entered
     	errorMsg += ' Last Name is missing !!! \n' ;

     else if (!/^[A-Za-z ]+$/.test(signup1.lastname.value)){
     	errorMsg += ' Last Name you entered is not valid !!! \n' ;
     }    

     if (document.signup1.emailaddress.value == '')                 //--- validate emailaddress is entered
     	errorMsg += ' Email Address is missing !!! \n' ;

     if (document.signup1.street.value == '')                 //--- validate street is entered
     	errorMsg += ' Street Address is missing !!! \n' ;


     if (document.signup1.city.value == '')                 //--- validate city is entered
     	errorMsg += ' City is missing !!! \n' ;

     else if (!/^[A-Za-z ]+$/.test(signup1.city.value)){
     	errorMsg += ' City you entered is not valid !!! \n' ;
     }    

    if (document.signup1.zipcode.value == '')                 //--- validate city is entered
    	errorMsg += ' Zip Code is missing !!! \n' ;

    else if (!/^[0-9 ]+$/.test(signup1.zipcode.value)){
    	errorMsg += ' Zip Code you entered is not valid !!! \n' ;
                }   //--- validate idnumber is correct

    if (document.signup1.phone.value == '')                 //--- validate city is entered
    	errorMsg += ' Phone Number is missing !!! \n' ;

    else if (!/^[0-9 ]+$/.test(signup1.phone.value)){
    	errorMsg += ' Phone Number you entered is not valid !!! \n' ;
                }   //--- validate idnumber is correct



    if (errorMsg != '')                                   //--- if there are errors
    { 
    	alert('Please correct the following:      \n' + 
    		'---------------------------------- \n' + 
    		errorMsg);
        return false;                       //exit, do not continue
    }

    submit = confirm('Please confirm the information you entered is correct and you would like to submit.');   //--- confirm submission
    if (submit == false)                  //    if click on Cancel
    return false;                           //    do not submit

    document.signup1.submit();                  //submit the form
}
