


<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

//////////////////////////////
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>	








<script>
 
 $(document).ready(function(){  
      $('#upload_file').on('submit', function(e){  
           e.preventDefault();  
           
              $.ajax({  
                     url:"<?= site_url('csv_data') ?>",
                     type:"POST",   
                    
                     data:new FormData(this),  
                     contentType: false,  
                     cache: false,  
                     processData:false,  
                     dataType: "json",
                     success:function(data)  
                     {  
                        console.log(data);
                        
                         document.getElementById("upload_file").reset(); 
                     } ,
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error at add data');
                }
              });  
           
      });  
 }); 
</script>  

</body>
</html>