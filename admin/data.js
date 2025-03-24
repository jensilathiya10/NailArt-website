$(document).ready(function(){

    var url = window.location.pathname;
    if(url=="/nailart-1/admin/request.php"){
        $.ajax({
            method:"POST",
            url:"data.php",
            data:{
                reqfrom:"request"
            },
            success:function(html){
                $(".data").html(html)
            }
        })
    }
    else if(url=="/nailart-1/admin/users.php"){ 
        $.ajax({
            method:"POST",
            url:"data.php",
            data:{
                reqfrom:"users"
            },
            success:function(html){
                $(".user").html(html)
            }
            })

        $("#usersearch").keyup(function(){
        var searchval = $("#usersearch").val();
        $.ajax({
            method:"POST",
            url:"data.php",
            data:{
                reqfrom:"users",
                search:searchval
            },
            success:function(html){
                $(".user").html(html)
            }
            })
            })    
    }

    
})