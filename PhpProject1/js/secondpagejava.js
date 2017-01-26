/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

function showValue(newValue)
{
	document.getElementById("range").innerHTML=newValue;
}

function showValue1(newValue)
{
	document.getElementById("range1").innerHTML=newValue;
}
function showValue2(newValue)
{
	document.getElementById("range2").innerHTML=newValue;
}

function validate()
{
    var selected;
    var elements = document.getElementsByClassName(selected);
    string = [].map.call( elements, function(node){
        return node.textContent || node.innerText || "";
    }).join("");
    window.alert(string);
}