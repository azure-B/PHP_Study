$(document).ready(function(){
    Load_data();


    $("#Create").on("submit",function(event){

        event.preventDefault();

        let Title = $("#Title").val();
        let Content = $("#Content").val();
  
        $.ajax({
            
            url: '../../src/controllers/create.php',
            
            type: 'POST',     
            
            data: { Title, Content },

            dataType: 'json',
            
            success: function(res) {  
                if (res.success) {
                    Load_data(); 
                } else {
                    alert('Error');
                }
            }
        });

    });

    $("#Read").on("submit",function(event){

        event.preventDefault();

        Load_data(); 
        
    });

})

function Load_data() {

    $.ajax({

        url: '../../src/controllers/read.php',

        type: 'GET',

        dataType: 'json',

        success : function(res) {
            
            $("#Lists").empty();

            res.Data.forEach(items => {
                console.log(items);
            });
        },

        error: function(xhr, status, error) {

            console.error("AJAX Error:", status, error);  
            console.error("Response Text:", xhr.responseText); 

        }
    });


}
