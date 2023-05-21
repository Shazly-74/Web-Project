
goto_main = () => location.href = "main.php";

$(document).ready(function() {
    //$elements = $("#size1, #size2, #size3, #size4, #size5, #size6");

    for(let i = 1; i < 7; i++)
    {
        $(`#size${i}`).click(function(){
            $(`#size${i}`).css("backgroundColor", "#0d3F83");
            $(`#size${i}`).css("opacity", "1.0");

            setsizesOpacity(i);
        });
    } 
    // $("#size").click(function(){
    //     $("#size1").css("backgroundColor", "#0d3F83");
    //     setOtherOpacity(1);

    // });

    $(".stars img").click(function(){
        var $temp = $(this);
        $($temp).animate({
          left:'800px',
          height:'500px',
          width:'500px'
        }, 2000, function(){
            setTimeout(function() {
                console.log("Before reset");
                $($temp).stop().css('left', '0').css('width', '100px').css('height', '100px');
                console.log("After reset");
              }, 5000);
        });
    });

    $("#favheart").click(function(){
        console.log("clicked");
        if ($('#favheart').hasClass('fa-solid')) 
        {
            $('#favheart').removeClass("fa-solid");
            $('#favheart').addClass("fa-regular");

        } 
        else if ($('#favheart').hasClass('fa-regular'))
        {
            $('#favheart').removeClass("fa-regular");
            $('#favheart').addClass("fa-solid");
        }
          
        //<i class="fa-sharp fa-solid fa-heart"></i>
    }); 

    $(".fa-circle-user").click(function(){
        console.log("clicked");
        alert("clicked");
          
        //<i class="fa-sharp fa-solid fa-heart"></i>
    }); 
        
});

function setsizesOpacity(button) 
{
    for (let i = 1; i < 7; i++) 
    {
        if(i === button) 
            continue;
        
        $(`#size${i}`).css("opacity", "0.5");
        $(`#size${i}`).css("background", "#fff");

    }
}
