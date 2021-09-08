// function pay()
// {
//     document.getElementById('btn').innerText="Paid Successful";
//     window.location.assign('/home');
// }

// var btnInfo = document.getElementById('info');

// btnInfo.addEventListener("click", function(){
//     document.getElementById("card").hidden();
// });

let c=0;

function myFunction()
{
    
    if(c==0)
    {
        document.getElementById("card").style.visibility='visible';
        c=1;
    }
    else
    {
        document.getElementById('card').style.visibility='hidden';
        c=0;
    }
    
    
}