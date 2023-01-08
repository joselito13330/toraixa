/* Script Javascript*/

//Pour faire disparaître le message arès 3 secondes
$("document").ready(function(){
    setTimeout(function(){
       $("#alert").remove();
    }, 3000 ); // 3 secs
});
