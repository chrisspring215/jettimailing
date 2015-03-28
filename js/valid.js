function valid()
{
	var firstNameField =  document.getElementById('firstNameField');
	var lastNameField =  document.getElementById('lastNameField');
	var emailField =  document.getElementById('emailField');
	var monthField =  document.getElementById('monthField');
	var dayField =  document.getElementById('dayField');
	var yearField =  document.getElementById('yearField');
	var submitButton =  document.getElementById('submitButton');
	
	if (firstNameField.value != '' && lastNameField.value != '' && emailField.value != ''  && dayField.value != ''  && monthField.value != '' && yearField.value != '')
		{
			document.getElementById('submitButton').className = "button expand";
			submitButton.type = 'submit';
			submitButton.value = "AWESOME, SIGN ME UP!";
		}
	else
		{
			document.getElementById('submitButton').className = "button expand disabled";
			submitButton.value = "PLEASE FILL OUT ALL FIELDS";
		}
}