$(document).ready(function(){
    $("#add-to-cart-button").click(function(){
        event.preventDefault();
        let name = document.getElementById("product-name").textContent;
        console.log(name);
        $.ajax({
            type: "POST",
            contentType: "application/json; charset=utf-8",
            url: "handleCart.php",
            data: { 
                name:name
            },
            success: function (response) {
                location.href = 'handleCart.php';
            
            }
       });
    });
  });