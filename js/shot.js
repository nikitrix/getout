$( "#shootCommand" ).submit(function( event ) {
    event.preventDefault();
    var server = $("input#inputServer").val();
    var command = $("input#inputCommand").val();
    var login = $("input#inputLogin").val();
    var password = $("input#inputPassword").val();

    if (server && command && login && password ) {
      $('#load').html("<div class='alert load'>");
      $('#load > .load').append("<strong>Executing...</strong>");
      $('#load > .load').append('</div>');
        $.ajax({
            type: "POST",
            url: "./include/shot.php",
            data: {
                server: server,
                command : command,
                login : login,
                password : password
            },
            cache: false,
            success: function(data) {
                $('#load').hide();
                //Output
                $('#output').html("<div class='well'>");
                $('#output > .well').html(data);
                $('#output > .well').append('</div>');
            },
            error: function() {
                // Fail message
                $('#success').html("<div class='alert alert-danger'>");
                $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;").append("</button>");
                $('#success > .alert-danger').append("<strong>Your request cannot be processed.</strong>");
                $('#success > .alert-danger').append('</div>');
            },
        });
    }else{
      $('#success').html("<div class='alert alert-success'>");
      $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
          .append("</button>");
      $('#success > .alert-success')
          .append("<strong>Please fill all required fields.</strong>");
      $('#success > .alert-success')
          .append('</div>');
    }

});
