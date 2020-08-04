let myUsername;
let myPassword;

function formChecker()
{
    myUsername = document.getElementById("username").value;
    myPassword = document.getElementById("password").value;
    
    //We have the username password that was input
    //Need to make sure they are non zero values
    if(!validUsername())
    {
        alert("Username incorrect")
        return false
    }
    
    if(!validPassword())
    {
        alert("Password Incorrect")
        return false
    }
   
    
    //We have a valid username and a valid password, return true 
    return true
}
function validUsername()
{
    let length = myUsername.length
    
    let firstTest = myUsername.indexOf("@")
    //if the @ is at index 0, there is no name
    if(firstTest < 1)
        return false
    //the string must end in .com so the following is that test
    let finalChar0 = myUsername.charAt( length - 4)
    let finalChar1 = myUsername.charAt( length - 3)
    let finalChar2 = myUsername.charAt( length - 2)
    let finalChar3 = myUsername.charAt( length - 1)

    if(finalChar0 !== ".")
        return false
    if(finalChar1 !== "c")
        return false
    if(finalChar2 !== "o")
        return false
    if(finalChar3 !== "m")
        return false

    //if we get to this point, return true
    return true
}

function validPassword()
{
    if(myPassword.length < 1)
        return false
    else
        return true
}




