



// JQUERY

$(document).ready(function(){
    console.log("Hello, console!");
    $(this).click(function(){
        console.log("Hello, console!");
        $(this).css("opacity", "0.1");

    });
  });


function setotherOpacity(button)
{
    for(let i = 0; i < 5; i++)
    {
        if(i == button)
            continue;

        document.getElementById(`button${i}`).style.backgroundColor = "red";
    }
}


function setOtherOpacity(button) 
{
    for (let i = 0; i < 5; i++) 
    {
        if(i === button) 
            continue;
        
        $(`#button${i}`).css("opacity", "0.5");
    }
}
  