/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//  When the user scrolls down 40px from the top of the document, show the logo in the header

window.onscroll = function () {
    scrollDownFunction();
    scrollStart();
};

function scrollDownFunction() {
    if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
        document.getElementById("logo-image").style.display = "contents";
    } else {
        document.getElementById("logo-image").style.display = "none";
    }
}