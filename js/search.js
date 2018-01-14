 $(document).ready(function(){  
      $('#search').keyup(function(){  
           var txt = $(this).val();  
           alert("ddone");
		   if(txt != '')  
           {  
                $.ajax({  
                   //  url:"phpscripts/search.php",  
                     method:"POST",  
                     data:{query:txt},  
                     dataType:"text",  
                     success:function(data)  
                     {  
                          $('.container-fluid #mainContent').html(data);  
                     }  
                });  
           }  
           else  
           {  
                $('#result').html('');                 
           }
      });  
 });  