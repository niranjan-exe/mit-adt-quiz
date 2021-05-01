// Function that prevents browser from going back
function preventBack() { window.history.forward(); }  
setTimeout("preventBack()", 0);  
window.onunload = function () { null };

// Check if the radio button is clicked so as to enable the button
function enableButton() {
    if (document.getElementById("btn").disabled == true) {
        document.getElementById("btn").disabled = false;
    }
    else {
        document.getElementById("btn").disabled = true;
    }
}

// Functions to work on the "I'm Ready" and "Next" buttons 
function startQuiz() {window.location.href = "quiz.php";}
function openQuestion2() {window.location.href = "question2.html";}
function openQuestion3() {window.location.href = "question3.html";}
function openQuestion4() {window.location.href = "question4.html";}
function openQuestion5() {window.location.href = "question5.html";}
function openQuestion6() {window.location.href = "question6.html";}
function openQuestion7() {window.location.href = "question7.html";}
function openQuestion8() {window.location.href = "question8.html";}
function openQuestion9() {window.location.href = "question9.html";}
function openQuestion10() {window.location.href = "question10.html";}
function openQuestion11() {window.location.href = "question11.html";}
function openQuestion12() {window.location.href = "question12.html";}
function openQuestion13() {window.location.href = "question13.html";}
function openQuestion14() {window.location.href = "question14.html";}
function openQuestion15() {window.location.href = "question15.html";}
function openQuestion16() {window.location.href = "question16.html";}
function openQuestion17() {window.location.href = "question17.html";}
function openQuestion18() {window.location.href = "question18.html";}
function openQuestion19() {window.location.href = "question19.html";}
function openQuestion20() {window.location.href = "question20.html";}
function openQuestion21() {window.location.href = "question21.html";}
function openQuestion22() {window.location.href = "question22.html";}
function openQuestion23() {window.location.href = "question23.html";}
function openQuestion24() {window.location.href = "question24.html";}
function openQuestion25() {window.location.href = "question25.html";}
function openQuestion26() {window.location.href = "question26.html";}
function openQuestion27() {window.location.href = "question27.html";}
function openQuestion28() {window.location.href = "question28.html";}
function openQuestion29() {window.location.href = "question29.html";}
function openQuestion30() {window.location.href = "question30.html";}