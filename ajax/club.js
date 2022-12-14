$(document).ready(function(){
$('#tab').click(function(){
        let lettre = $('#lettre').val();
        $.ajax({
            url:'club.php',
            type:'POST',
            data:{aff:lettre},
            success: function(response){
                $('#aff').html(response);
            }
        });
    });

    $('#ins').click(function(){
        $('#insertion').css("display", "block");
    });

    $('#butins').click(function(){
        let nom = $('#nom').val();
        let prenom = $('#prenom').val();
        let poste = $('#poste').val();
        $.ajax({
            url:'club.php',
            type:'POST',
            data:{nom:nom, prenom:prenom, poste:poste},
            success: function(response){
                $('#aff').html(response);
            }
        })
    })

})

