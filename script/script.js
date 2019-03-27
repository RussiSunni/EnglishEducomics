

// Introduction.html

$(document).ready(function () {
    $('#submit').click(function () {
        var username = $('#username').val();

        url = '../../script/signup.php';

        $.ajax({
            type: 'POST',
            url: url + '?username=' + username,
            data: username,
            success: function () {
                $('#introduction').html('<p>ah yes, it is... ' + username + '</p><h3><a href="this-way.html">Welcome!</a></h3>');
            }
        });

    });
});




// checking answers in "My Family" section

$("#submit1").click(function (e) {
    if ($("#question").val() == 1) {
        $('#result').text("correct").addClass('bg-success').removeClass('bg-danger');
    }
    else {
        $('#result').text("incorrect").addClass('bg-danger').removeClass('bg-success');
    }
});

$("#submit2").click(function (e) {
    if ($("#question").val() == 3) {
        $('#result').text("correct").addClass('bg-success').removeClass('bg-danger');
    }
    else {
        $('#result').text("incorrect").addClass('bg-danger').removeClass('bg-success');
    }
});

$("#submit3").click(function (e) {
    if ($("#question").val() == 4) {
        $('#result').text("correct").addClass('bg-success').removeClass('bg-danger');
    }
    else {
        $('#result').text("incorrect").addClass('bg-danger').removeClass('bg-success');
    }
});

$("#submit4").click(function (e) {
    if ($("#question").val() == 3) {
        $('#result').text("correct").addClass('bg-success').removeClass('bg-danger');
    }
    else {
        $('#result').text("incorrect").addClass('bg-danger').removeClass('bg-success');
    }
});

$("#submit5").click(function (e) {
    if ($("#question").val() == 1) {
        $('#result').text("correct").addClass('bg-success').removeClass('bg-danger');
    }
    else {
        $('#result').text("incorrect").addClass('bg-danger').removeClass('bg-success');
    }
});



// text transition on website page


// $('#website-intro-line1').animate({'opacity': 0}, 3000, function () {
//     $(this).text('学英语');
// }).animate({'opacity': 1}, 3000);



// $('#website-intro-line2').animate({'opacity': 0}, 3000, function () {
//     $(this).text('与漫画');
// }).animate({'opacity': 1}, 3000);




var textArray1 = ["学英语","выучить английский язык","تعلم الإنجليز", "Learn English"];
var textArray2 = ["与漫画","с комиксами","مع كاريكاتير", "with comics"];
var index1 = 0;
var index2 = 0;

setInterval(function(){        
$("#changeText1").animate({
opacity:0
},function()
{
   if(textArray1.length > index1) {
   $(this).text(textArray1[index1]).animate({opacity:1})
   index1++; 
   }
   else
   index1 = 0;
});
},2000);


setInterval(function(){   
$("#changeText2").animate({
    opacity:0
    },function()
    {
       if(textArray2.length > index2) {
       $(this).text(textArray2[index2]).animate({opacity:1})
       index2++; 
       }
       else
       index2 = 0;
    });
},2000);




