$(document).ready(function () {

    // Website.html ------------------------


    var textArray1 = ["学英语", "выучить английский язык", "تعلم الإنجليز", "Learn English"];
    var textArray2 = ["与漫画", "с комиксами", "مع كاريكاتير", "with comics"];
    var index1 = 0;
    var index2 = 0;

    setInterval(function () {


        $("#changeText1").animate({
            // opacity: 0
        }, function () {
            if (textArray1.length > index1) {
                $(this).text(textArray1[index1]).animate({ opacity: 1 })
                index1++;
            }
            else
                index1 = 0;
            
        });
        $("#changeText2").animate({
            // opacity: 0
        }, function () {
            if (textArray2.length > index2) {
                $(this).text(textArray2[index2]).animate({ opacity: 1 })
                index2++;
            }
            else
                index2 = 0;
        });
    }, 2000);



    // Introduction.html -----------------------

    // username
    $('#submitUsername').click(function () {
        var username = $('#username').val();

        // assign cookie
        document.cookie = 'username = ' + username + '; Path=/';

        // save to db
        url = '../../script/signup.php';

        $.ajax({
            type: 'POST',
            url: url + '?username=' + username,
            success: function (data) {
                if (data.includes("name already exists"))
                {
                    $('#introduction').html('<p>ah yes, it is... ' + username + '</p><h3><a href="../../index.html">Welcome!</a></h3>');
                }
                else
                {
                    $('#introduction').html('<p>ah, a new student. How wonderful.</p><h3><a href="this-way.html">Welcome!</a></h3>');
                }
            }
        });
    });



    // homescreen.html ----------------

    // get the 'username' cookie
    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var cookieArray = decodedCookie.split(';');
        for (var i = 0; i < cookieArray.length; i++) {
            var cookie = cookieArray[i];
            while (cookie.charAt(0) == ' ') {
                cookie = cookie.substring(1);
            }
            if (cookie.indexOf(name) == 0) {
                return cookie.substring(name.length, cookie.length);
            }
        }
        return "";
    }

    var cnameUsername = 'username';
    // show on screen
    var currentUser = getCookie(cnameUsername);
    $('#currentUser').text(currentUser);


    //familiar

    $('#submitFamiliar').click(function () {
        var familiar = $("input:radio[name=familiar]:checked").val();

        // assign cookie
        document.cookie = 'familiar = ' + familiar + '; Path=/';

        url = '../../script/addFamiliar.php';
        $.ajax({
            type: 'POST',
            url: url + '?username=' + currentUser + '&familiar=' + familiar
        });

        $('#chooseFamiliar').text('Ah, the mighty ' + familiar + '. Great choice!');
        $('.disabled').removeClass('disabled');
    });




    // index.html ---------------------
    // add course

    // need to remove duplication

    $('#addCourse1').click(function () {
       
        // save to db
        url = '/script/addUserCourse.php';

        $.ajax({
            type: 'POST',
            url: url + '?username=' + currentUser + '&courseId=' + 1,
            success: function (data) {
                window.location.reload();
            }
        });
    });


    $('#addCourse2').click(function () {
       
        // save to db
        url = '/script/addUserCourse.php';

        $.ajax({
            type: 'POST',
            url: url + '?username=' + currentUser + '&courseId=' + 2,
            success: function (data) {
                window.location.reload();
            }
        });
    });


    $('#addCourse3').click(function () {
       
        // save to db
        url = '/script/addUserCourse.php';

        $.ajax({
            type: 'POST',
            url: url + '?username=' + currentUser + '&courseId=' + 3,
            success: function (data) {
                window.location.reload();
            }
        });
    });


    $('#addCourse4').click(function () {
       
        // save to db
        url = '/script/addUserCourse.php';

        $.ajax({
            type: 'POST',
            url: url + '?username=' + currentUser + '&courseId=' + 4,
            success: function (data) {
                window.location.reload();
            }
        });
    });


    // show user courses - index.html and account.html

    var getUserCoursesUrl = 'script/getUserCourses.php';

    $.ajax({
        type: 'GET',
        url: getUserCoursesUrl + '?username=' + currentUser,
        success: function (data) {
          
            var obj = JSON.parse(data);

            for (i=0; i < obj.usercourses.length; i++)
            {
                $('#userCourseList').append('<tr><td><a href="views/' + obj.usercourses[i].name + '/01.php">' + obj.usercourses[i].name + '</a></td><td>' + obj.usercourses[i].completed + '<td/></tr>');
            }

        }
    });





    // Admin.html --------------------


    // get students
    var getStudentsUrl = 'script/getStudents.php';

    $.ajax({
        type: 'GET',
        url: getStudentsUrl,
        success: function (data) {

            var obj = JSON.parse(data);

            for (i=0; i < obj.students.length; i++)
            {
                $('#studentList').append('<tr><td>' + obj.students[i].username + '</td></tr>');
             
            }
        }
    });


    // get courses
    var getCoursesUrl = 'script/getCourses.php';

    $.ajax({
        type: 'GET',
        url: getCoursesUrl,
        success: function (data) {

            var obj = JSON.parse(data);

            for (i=0; i < obj.courses.length; i++)
            {
                $('#courseList').append('<tr><td>' + obj.courses[i].name + '</td><td>' + obj.courses[i].category + '</td></tr>');
            }
        }
    });



    // account.html ---------------------

    // get the 'familiar' cookie
    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var cookieArray = decodedCookie.split(';');
        for (var i = 0; i < cookieArray.length; i++) {
            var cookie = cookieArray[i];
            while (cookie.charAt(0) == ' ') {
                cookie = cookie.substring(1);
            }
            if (cookie.indexOf(name) == 0) {
                return cookie.substring(name.length, cookie.length);
            }
        }
        return "";
    }

    var cnameFamiliar = 'familiar';
    // show on screen
    var familiar = getCookie(cnameFamiliar);
    $('#familiar').text(familiar);
    



    // View folder -----------------------------------

    // recording when a course has been completed


    $('#finishedC1').click(function () {
        
        // save to db
        url = '/script/updateUserCourse.php';

        $.ajax({
            type: 'POST',
            url: url + '?username=' + currentUser + '&courseId=' + 1,
            success: function (data) {
            }
        });
    });

    $('#finishedC2').click(function () {
        
        // save to db
        url = '/script/updateUserCourse.php';

        $.ajax({
            type: 'POST',
            url: url + '?username=' + currentUser + '&courseId=' + 2,
            success: function (data) {
            }
        });
    });

    $('#finishedC3').click(function () {
        
        // save to db
        url = '/script/updateUserCourse.php';

        $.ajax({
            type: 'POST',
            url: url + '?username=' + currentUser + '&courseId=' + 3,
            success: function (data) {
                
            }
        });
    });

    $('#finishedC4').click(function () {
        
        // save to db
        url = '/script/updateUserCourse.php';

        $.ajax({
            type: 'POST',
            url: url + '?username=' + currentUser + '&courseId=' + 4,
            success: function (data) {
                
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









