var slideshowIndex = 1

function myFuncRight()
{
    let imageArray = document.getElementsByClassName("slides")
    var i
    for( i = 0 ; i < 11 ; i++){
        imageArray[i].style.display = "none"
    }
    if(index == 11){
        index = 1
    }
    else{
        index++
    }
    imageArray[slideshowIndex].style.display = "block"
}

function myFuncLeft()
{
    let imageArray = document.getElementsByClassName("slides")
    var i
    for( i = 0 ; i < 11 ; i++){
        imageArray[i].style.display = "none"
    }    
    if(index == 1){
        index = 11
    }
    else{
        index--
    }

    imageArray[slideshowIndex].style.display = "block"
}
