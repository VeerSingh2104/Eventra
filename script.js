function validatesignup()
{
    var fname=document.getElementById("name").value;
    if (name.length>10)
    {
        alert("Length of First Name should be less than or equal to 10 characters long!");
        return false;
    }
    var age=document.getElementById("age").value;
    if(age<0)
    {
        alert("INVALID INPUT!!");
    }
    if(age<18 && age>0)
    {
        alert("AGE SHOULD BE GREATER THAN 18!!");
    }
    var phone = document.getElementById('phonenumber').value;
    if (phone.length!=10)
    {
        alert("Please enter a valid Phone number!");
        return false;
    }
    var username= document.getElementById('username').value;
    if (username.length>12 || username.length<5)
    {
        alert("Length of Username must be between 5 and 12 characters long!");
        return false;
    }
    var password=document.getElementById('password').value;
    if (password.length>12)
    {
        alert("Length of Password must be 12 or less characters long!");
        return false;
    }
    const specialChars = /[`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
    if(!specialChars.test(password))
    {
        alert("Password must contain at least one special character!");
        return false;
    }
    return true;

}

function validatelogin()
{
    var username= document.getElementById('username').value;
    if (username.length>12 || username.length<5)
    {
        alert("Length of Username must be between 5 and 12 characters long!");
        return false;
    }
    var password=document.getElementById('login_password').value;
    if (password.length>12)
    {
        alert("Length of Password must be 12 or less characters long!");
        return false;
    }
    const specialChars = /[`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
    if(!specialChars.test(password))
    {
        alert("Password must contain at least one special character!");
        return false;
    }
    return true;

}

function gotopage(action,formid)
{
    form=Document.getElementById(formid);
    if (action=='login')
    {
        //if ()
        form.action=userlogin.php;
    }
    else if (action=='signup')
    {
        form.action=usersignup.php;
    }
    else if (action=='period')
    {
        form.action=perioddata.php;
    }
    else if (action=='ovulation')
    {
        form.action=ovulation.php;
    }
    else if (action=='medication')
    {
        form.action=medication.php;
    }

    form.submit();
}