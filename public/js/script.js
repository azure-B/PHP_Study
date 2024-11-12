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
                const Lists = document.getElementById('Lists');
                Lists.innerHTML += `<p>${items.Title} - ${items.Content} 
                <button onclick="deleteUser(${items.id})">Delete</button>
                <button onclick="updateUser(${items.id}, '${items.name}', '${items.email}')">Edit</button></p>`;
            });
        },

        error: function(xhr, status, error) {

            console.error("AJAX Error:", status, error);  
            console.error("Response Text:", xhr.responseText); 

        }
    });


}
