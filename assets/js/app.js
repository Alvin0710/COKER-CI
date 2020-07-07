// $(document).ready(function () {
//     $('.nav-link').click(function () {
//         var menu = $(this).attr('id');
//         if (menu == "home") {
//             $('.div1').load('home.php');
//         } else if (menu == "corona_map") {
//             $('.div1').load('corona_map.php');
//         } else if (menu == "poster") {
//             $('.div1').load('poster.php');
//         } else if (menu == "about") {
//             $('.div1').load('about.php');
//         }
//     });
// });



// //The $(document).ready will be
// //triggered when all components in
// //the web page has been displayed
// $(document).ready(function () {

//     //Display beranda the first time the web page is ready
//     $.ajax({
//         url: "home.php",
//         success: function (result) {
//             $("#div1").html(result);
//         },
//         error: function (xhr, status, err) {
//             $("#div1").html("<h2>" + xhr.status + ":" + err + "</h2>")
//         }
//     });

//     // //If login button is clicked
//     // $(".container").on("click", "#submit", function () {
//     //     //        alert("Hello");
//     //     $.ajax({
//     //         url: 'php/login.php',
//     //         data: {
//     //             email: $("#email").val(),
//     //             pwd: $("#pwd").val()
//     //         },
//     //         type: 'post',
//     //         success: function (output) {
//     //             if (output != "0") {
//     //                 $("#loggedUser").html(output);
//     //                 alert("Successful Login");
//     //             }
//     //         },
//     //         error: function (xhr, status, err) {
//     //             $("#div1").html("<h2>" + xhr.status + ":" + err + "</h2>")
//     //         }

//     //     });
//     // });

//     //    The $("a").click will be
//     //    triggered if an "a"-tagged
//     //    component is clicked
//     $("a").click(function (e) {
//         //Reading data from the
//         //server directly and
//         //return the result in
//         //a call-back function
//         var data = $(e.currentTarget).data("link");
//         $.ajax({
//             url: data,
//             success: function (result) {
//                 $("#div1").html(result);
//             },
//             error: function (xhr, status, err) {
//                 $("#div1").html("<h2>" + xhr.status + ":" + err + "</h2>")
//             }
//         });

//     });


// });

// $(document).ready(function () {
//     var halaman = getCookie("halaman");
//     if (halaman == "") {
//         setCookie("halaman", "home.php", 30);
//         $('.halaman-menu').load(getCookie("halaman"));
//     } else {
//         $('.halaman-menu').load(getCookie("halaman"));
//     }

//     $('.nav-menu').click(function () {
//         var menu = $(this).attr('id');
//         setCookie("halaman", menu + ".php", 30);
//         $('.halaman-menu').load(getCookie("halaman"));
//     });
// });

// function setCookie(cname, cvalue, exdays) {
//     var d = new Date();
//     d.setTime(d.getTime() + (30 * 24 * 60 * 60 * 1000));
//     var expires = "expires=" + d.toGMTString();
//     document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
// }

// function getCookie(cname) {
//     var name = cname + "=";
//     var decodedCookie = decodeURIComponent(document.cookie);
//     var ca = decodedCookie.split(';');
//     for (var i = 0; i < ca.length; i++) {
//         var c = ca[i];
//         while (c.charAt(0) == ' ') {
//             c = c.substring(1);
//         }
//         if (c.indexOf(name) == 0) {
//             return c.substring(name.length, c.length);
//         }
//     }
//     return "";
// }

//the document ready will be trigerred when all component in the web page has been displayed
$(document).ready(function () {
    //display beranda in the first time
    $.ajax({
        url: "home.php",
        success: (result) => {
            $("#div1").html(result);
        },
        error: (xhr, status, err) => {
            $("#div1").html("<h2>"+xhr.status+" "+err+"</h2>");
        }
    });
    
    //the a click will be trigerred if an a-tagged is clicked
    $("a").click(function (e) {
        var data = $(e.currentTarget).data("page");
        //Reding data from the server directly and return the result in a call back function
        $.ajax({url: data, success: function(result){
            $("#div1").html(result);
        },error: function(xhr,status,err){
            $("#div1").html("<h2>" + xhr.status + ":" + err + "<h2>");
        }
    });
    });

    //if submit button is clicked
    $("submit").click
});