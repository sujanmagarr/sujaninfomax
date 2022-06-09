<script>
           function confirmation(){
               var answer = confirm("Are You Ready To Login!");
               if(answer){
                   alert("confirm");
                   return true;
               }
               else{
                   window.location="home.html"
               } 
           }
</script>