function myFunc()
{
    let x = document.getElementById("input1").value
    let y = document.getElementById("input2").value
    
    //Check that they are equal, and that they are greater than 8
    if( (x === y ) && (x.length > 7) ){
        alert("Correct")
    }
    else{
        
        if( x.length < 8)
            alert("First password length invalid")
        else if ( y.length < 8)
            alert("Second password length invalid")
        else
            alert("Passwords do NOT match")
    }
}
