// function called in footer.php near one-click(line 38)
function addStu()
{
    var stuname = $("#stuname").val();
    var stuemail = $("#stuemail").val();
    var stupass = $("#stupass").val();
    $.ajax({
        url:'Student/addstudent.php',
        method: 'POST',
        data:{
            stusignup: "stusignup",
            stuname: stuname,
            stuemail:  stuemail,
            stupass: stupass,
        },
        success: function(data){
            console.log(data)
        },
    });
    

}