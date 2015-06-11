
   var count=0;
           var colour=["blue","red"];
           
       function change()
       {
           
           document.getElementById("change").style.color="blue";
         setTimeout("colorchange()",700);
           
           
       }
       function colorchange()
       {
           document.getElementById("change").style.color="white";
           setTimeout("change()",700);
       }
	   
	    function hange()
       {
           
           document.getElementById("hange").style.color="#00C";
         setTimeout("colorhange()",700);
           
           
       }
       function colorhange()
       {
           document.getElementById("hange").style.color="white";
           setTimeout("hange()",700);
       }
	   
	    function newc()
       {
           
           document.getElementById("new").style.color="red";
         setTimeout("newchange()",700);
           
           
       }
       function newchange()
       {
           document.getElementById("new").style.color="white";
           setTimeout("newc()",700);
       }
       
       
     function change3()
       {
           
           document.getElementById("change3").style.color="red";
         setTimeout("colorchange3()",700);
           
           
       }
       function colorchange3()
       {
           document.getElementById("change3").style.color="blue";
           setTimeout("change3()",700);
       }
	   
	   
	    function new2()
       {
           
           document.getElementById("new2").style.color="red";
         setTimeout("newchange2()",700);
           
           
       }
       function newchange2()
       {
           document.getElementById("new2").style.color="white";
           setTimeout("new2()",700);
       }
	   
    