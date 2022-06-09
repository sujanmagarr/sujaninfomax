function validation(){
	var firstname =document.forms["form1"]["firstname"]; 
        if (firstname.value == "") 
                { 
                    window.alert("Please enter your firstname."); 
                    firstname.focus(); 
                    return false; 
                } 

        var lastname =document.forms["form1"]["lastname"];
        if (lastname.value == "") { 
                    
                    window.alert("Please enter your lastname."); 
                    lastname.focus(); 
                    return false; 
                }  

        var email =document.forms["form1"]["email"];
        if (email.value == "") { 
                    window.alert( "Please enter valid e-mail address."); 
                    email.focus(); 
                    return false; 
                }  

        var message =document.forms["form1"]["message"]; 
        if (message.value == "") { 
                    window.alert( "Please write a message."); 
                    message.focus(); 
                    return false; 
                } 
                    window.alert( "Are you ready to Submit?"); 
                     
}

