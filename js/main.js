$(function(){
    $('[data-toggle="tooltip"]').tooltip();
  });

// functie die ervoor zorgt dat de div class update user eerst wordt gehide en als er op de button class changeUserOnClick wordt geklikt dat wordt er gewisseld met de div class updateUser
$('.updateUser').hide();
$('.changeUserOnClick').on('click',
    function() {
        $('.showUser, .updateUser').toggle(200);
    }
);
