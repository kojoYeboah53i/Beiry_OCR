
function myFunction() {

    var name = document.getElementById("name").value;
  //  var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
   // var contact = document.getElementById("contact").value;

    // Returns successful data submission message when the entered information is stored in database.

    var dataString = 'name1=' + name  + '&password1=' + password ;

    if (name == '' || password == '') {
    alert("Please Fill All Fields");
    } 
    
    else {

    // AJAX code to submit form.
    $.ajax({
    type: "POST",
    url: "ajax_php.php",
    data: dataString,
    cache: false,
    
    success: function(html) {
    alert(html);
    }
    });
    }
    return false;
    }