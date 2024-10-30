$(document).ready(function () {


    // current rates API
    var exchangeApi = "https://api.exchangeratesapi.io/latest?base=RON";

    // initial company and branch on page load
    var currentCompani = $("#compani1").text();
    var branch = 3;

    // scroll to branch position
    var branchPosition;
    $(".sidebar ").on("click", "li", function(){
        var selector = $(this).attr("class");
        branchPosition = $("#" + selector).offset().top;
        $("html, body").animate({
            scrollTop: branchPosition
        }, 800);
    });

    $(".contact").click(function(){
        var contactPosition = $(".contacts").offset().top;
        console.log(contactPosition)
        $("html, body").animate({
            scrollTop: contactPosition
        }, 800);
    })


    $('.b1').click(function(){
        $('.cb1').hide();
         $(".main__container1").append(
         `<tr class="currencies">
         <td>
             <p class="block">18.3</p>
         </td>
         <td><img src="./assets/icons/australia-flag.png" alt="" class="icon"></td>
         <td>
             <p class="block2">18.6</p>
         </td>
     </tr>

     <tr class="currencies">
         <td>
             <p class="block">9.17</p>
         </td>
         <td><img src="./assets/icons/switzerland-flag.png" alt="" class="icon"></td>
         <td>
             <p class="block2">11.43</p>
         </td>
     </tr>
     `
        );

      });

      $('.b2').click(function(){
        $('.cb2').hide();
         $(".main__container2").append(
         `<tr class="currencies">
         <td>
             <p class="block">18.3</p>
         </td>
         <td><img src="./assets/icons/australia-flag.png" alt="" class="icon"></td>
         <td>
             <p class="block2">18.6</p>
         </td>
     </tr>

     <tr class="currencies">
         <td>
             <p class="block">9.17</p>
         </td>
         <td><img src="./assets/icons/switzerland-flag.png" alt="" class="icon"></td>
         <td>
             <p class="block2">11.43</p>
         </td>
     </tr>
     `
        );

      });

      $('.b3').click(function(){
        $('.cb3').hide();
         $(".main__container3").append(
        `<tr class="currencies">
         <td>
             <p class="block">18.3</p>
         </td>
         <td><img src="./assets/icons/australia-flag.png" alt="" class="icon"></td>
         <td>
             <p class="block2">18.6</p>
         </td>
     </tr>

     <tr class="currencies">
         <td>
             <p class="block">9.17</p>
         </td>
         <td><img src="./assets/icons/switzerland-flag.png" alt="" class="icon"></td>
         <td>
             <p class="block2">11.43</p>
         </td>
     </tr>
     `
        );

      });

      $('.b4').click(function(){
        $('.cb4').hide();
         $(".main__container4").append(
         `<tr class="currencies">
         <td>
             <p class="block">18.3</p>
         </td>
         <td><img src="./assets/icons/australia-flag.png" alt="" class="icon"></td>
         <td>
             <p class="block2">18.6</p>
         </td>
     </tr>

     <tr class="currencies">
         <td>
             <p class="block">9.17</p>
         </td>
         <td><img src="./assets/icons/switzerland-flag.png" alt="" class="icon"></td>
         <td>
             <p class="block2">11.43</p>
         </td>
     </tr>
     `
        );

      });

      $('.b5').click(function(){
        $('.cb5').hide();
         $(".main__container5").append(
         `<tr class="currencies">
         <td>
             <p class="block">18.3</p>
         </td>
         <td><img src="./assets/icons/australia-flag.png" alt="" class="icon"></td>
         <td>
             <p class="block2">18.6</p>
         </td>
     </tr>

     <tr class="currencies">
         <td>
             <p class="block">9.17</p>
         </td>
         <td><img src="./assets/icons/switzerland-flag.png" alt="" class="icon"></td>
         <td>
             <p class="block2">11.43</p>
         </td>
     </tr>
     `
        );

      });

      $('.b6').click(function(){
        $('.cb6').hide();
         $(".main__container6").append(
         `<tr class="currencies">
         <td>
             <p class="block">18.3</p>
         </td>
         <td><img src="./assets/icons/australia-flag.png" alt="" class="icon"></td>
         <td>
             <p class="block2">18.6</p>
         </td>
     </tr>

     <tr class="currencies">
         <td>
             <p class="block">9.17</p>
         </td>
         <td><img src="./assets/icons/switzerland-flag.png" alt="" class="icon"></td>
         <td>
             <p class="block2">11.43</p>
         </td>
     </tr>
     `
        );

      });

      $('.b7').click(function(){
        $('.cb7').hide();
         $(".main__container7").append(
         `<tr class="currencies">
         <td>
             <p class="block">18.3</p>
         </td>
         <td><img src="./assets/icons/australia-flag.png" alt="" class="icon"></td>
         <td>
             <p class="block2">18.6</p>
         </td>
     </tr>

     <tr class="currencies">
         <td>
             <p class="block">9.17</p>
         </td>
         <td><img src="./assets/icons/switzerland-flag.png" alt="" class="icon"></td>
         <td>
             <p class="block2">11.43</p>
         </td>
     </tr>
     `
        );

      });


});



