var customValidator = {
    config: {
    },
    validator: function() {
        //document.getElementById('errMsgBlock').style.display = 'none';
        let errors = [];
        const myForm = document.getElementById('myForm');
        for (let elementIndex = 0; elementIndex < myForm.elements.length; elementIndex++) {
            const currElement = myForm.elements[elementIndex];
            const formFieldName = myForm.elements[elementIndex].name; 
            const formFieldValue = myForm.elements[elementIndex].value;
            const formFieldClass = myForm.elements[elementIndex].classList;
            if (formFieldClass.contains('required') === true) {
                if (formFieldValue == '' || formFieldValue === null) {
                    let errorMsg = '';
                    if (customValidator.config.messages[formFieldName] !== undefined) {
                        errorMsg = customValidator.config.messages[formFieldName];
                        //errors.push(customValidator.config.messages[formFieldName]);
                    } else {
                        errorMsg = formFieldName + ' is required';
                       
                        //errors.push(formFieldName + ' is required');
                    }
                    document.getElementById('error-' + formFieldName).innerText = errorMsg;
                }
            }
        }
        /*if (errors.length > 0) {
            let errStr = '';
            document.getElementById('errMsgBlock').style.display = 'block';
            for (let errIndex in errors) {
                errStr = errStr + errors[errIndex] + '<br>';
            }
            document.getElementById('errMsg').innerHTML = errStr;
        }*/
        return false;        
    }
};