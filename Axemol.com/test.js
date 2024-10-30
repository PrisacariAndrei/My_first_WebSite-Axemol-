$(document).ready(function(){
    
    for(var i = 0; i < branch; i++){
        displayBranch(currentCompani + ": branch " + (i + 1), (i + 1))
        branchList("Branch: " + (i + 1), (i + 1))
    }


//        if ($(document).scrollTop() < 400) {
//            $('.sidebar').removeClass('sidebar-fixed');
//        }


//     display name of company and branch tables on click and call functions:
//     displayBranch() - this function will draw tables in dependence how many branches we have in current company
//     branchList() - this function will writte an list inside of sidebar block
    $(".compain").click(function () {
        $(".main-content").empty();
        $(".sidebar ul").empty();
        $(".curs__title").text($(this).text());

        currentCompani = $(this).attr('id');

        // some conditions to change currentCompani
        if (currentCompani == "compani1") {
            branch = 7;
            for(var i = 0; i < branch; i++){
                displayBranch(currentCompani + ": branch " + (i + 1), (i + 1));
                branchList("Branch: " + (i + 1), (i + 1));
            }
        } else if(currentCompani == "compani2"){
            branch = 3;
            for(var i = 0; i < branch; i++){
                displayBranch(currentCompani + ": branch " + (i + 1), (i + 1));
                branchList("Branch: " + (i + 1), (i + 1))
            }
        } else if(currentCompani == "compani3"){
            branch = 3;
            for(var i = 0; i < branch; i++){
                displayBranch(currentCompani + ": branch " + (i + 1), (i + 1));
                branchList("Branch: " + (i + 1), (i + 1));
            }
        } else if(currentCompani == "compani4"){
            branch = 1;
            for(var i = 0; i < branch; i++){
                displayBranch(currentCompani + ": branch " + (i + 1), (i + 1));
                branchList("Branch: " + (i + 1), (i + 1));
            }
        }
    });


    function branchList(name, number){
        $(".sidebar ul").append(
            `<li class="branch` + number + `">` + name + `</li>`
        )
    }

    function displayBranch(name, number) {
        // !!!IMPORTANT - getJSON is used to get data rates from API Key
        $.getJSON(exchangeApi).done(function (data) {
            $(".main-content").append( // append method will draw .curs block in .main-content allways when displayBranch() is called
                `
                 <div class="curs ` + 'rates' + number + `">
                 <div class="container">
                     <div class="curs__items">
                         <!-- <a class="btn  btn--gray" href="#">Address on the map</a> -->
                         <!-- <button class="btn-test  btn--gray" >Address on the map</button>-->
                         <h1 class="curs__title">`+ name + `</h1>
                         <p class="adres">str. Mitropolit Gavriil Bănulescu-Bodoni 41</p>
                         <a class="btn  btn--gray" href="https://goo.gl/maps/hdAQCk7tEmpMwRYR9" target="_blank">Address on the map</a>

                         <table class="main__container" id="first">
                             <tr class="text__div">
                                 <th>
                                     <p class="text">Buy</p>
                                 </th>
                                 <th>
                                     <p class="Currency_text">Currency</p>
                                 </th>
                                 <th>
                                     <p class="text">Sell</p>
                                 </th>
                             </tr>

                             <tr class="currencies">
                                 <td>
                                     <p class="block">`+ data.rates.USD.toFixed(3) +`</p>
                                 </td>
                                 <td><img src="../assets/icons/united-states.png" alt="" class="icon"></td>
                                 <td>
                                     <p class="block2">`+ (data.rates.USD + 0.11).toFixed(3)  +`</p>
                                 </td>
                             </tr>

                             <tr class="currencies">
                                 <td>
                                     <p class="block">`+ data.rates.EUR.toFixed(3) +`</p>
                                 </td>
                                 <td><img src="../assets/icons/eu-main-flag.png" alt="" class="icon"></td>
                                 <td>
                                     <p class="block2">`+ (data.rates.EUR + 0.11).toFixed(3) +`</p>
                                 </td>
                             </tr>

                             <tr class="currencies">

                                 <td>
                                     <p class="block">`+ data.rates.RUB.toFixed(3) +`</p>
                                 </td>
                                 <td><img src="../assets/icons/russia-flag.png" alt="" class="icon"></td>
                                 <td>
                                     <p class="block2">`+ (data.rates.RUB + 0.11).toFixed(3) +`</p>
                                 </td>
                             </tr>

                             <tr class="currencies">
                                 <td>
                                     <p class="block">`+ data.rates.RON.toFixed(3) +`</p>
                                 </td>
                                 <td><img src="../assets/icons/romania-flag.png" alt="" class="icon"></td>
                                 <td>
                                     <p class="block2">`+ (data.rates.RON + 0.11).toFixed(3) +`</p>
                                 </td>
                             </tr>

                             <tr class="currencies">
                                 <td>
                                     <p class="block">`+ data.rates.USD.toFixed(3) +`</p>
                                 </td>
                                 <td><img src="../assets/icons/ukraine-flag.png" alt="" class="icon"></td>
                                 <td>
                                     <p class="block2">`+ (data.rates.USD + 0.11).toFixed(3) +`</p>
                                 </td>
                             </tr>

                             <tr class="currencies">
                                 <td>
                                     <p class="block">`+ data.rates.GBP.toFixed(3) +`</p>
                                 </td>
                                 <td><img src="../assets/icons/united-kingdom.png" alt="" class="icon"></td>
                                 <td>
                                     <p class="block2">`+ (data.rates.GBP + 0.11).toFixed(3) +`</p>
                                 </td>
                             </tr>
                             <tr class="currencies">
                                 <td><a class="btn2  btn--gray" href="#">All currencies</a></td>
                             </tr>
                         </table>
                     </div>
                 </div>
             </div>

</div>`
            )
        });
    }
})