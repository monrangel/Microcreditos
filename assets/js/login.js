(function($){
   $("#frm_login").submit(function(ev){
       $.ajax({
           url:'login/validate',
           type:'POST',
           data:$(this).serialize(),
           success:function(data){
               var json=JSON.parse(data);
               console.log(json)
           },
           error: function(xhr){
               console.log(xhr.status);
           },
       });
        ev.preventDefault();
   }); 
    
})(jQuery)

