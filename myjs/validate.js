var myvalidator={
   config:{

   },
   validator:function()
   {
   	let errors=[];
   	const myForm = document.getElementById('myForm');
   	for(let i=0;i<myForm.length;i++)
   	{
   		const name=myForm[i].name;
   		const id=myForm[i].id;
   		const val=myForm[i].value;
   		const myclass=myForm[i].classList;
   		const mytag=myForm[i].tagName;
        
        let errorMsg='';
        errorMsg = name + 'Is Required';
        document.getElementById('error-'+name).innerText = errorMsg;

   	}
   	return false;
   }


};