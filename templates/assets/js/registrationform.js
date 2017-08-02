var i = 0;
var Ahoppy = 0;
var hobbys = [];
var counterH = 0;

var Aphone = 0;
var phoneList = [];

var campains = [];
var counterC = 0;

var trains = [];
var counterT = 0;

var experiences = [];
var counterE = 0;


function addfield(id) {
    i++;
    var x = document.getElementById(id + i);
    x.style.display = 'block';
}
function removefield(id) {
    i--;
    var x = document.getElementById(id);
    x.style.display = 'none';
}
function Add(array, id) {
		if (array === 'train') {
        if (CheckDuplicate(trains, document.getElementById(id).value)) {
            trains[counterT] = document.getElementById(id).value;
            counterT++;
            document.getElementById('traines').innerHTML += "<div class='input-group 'style='float:left;width: 120px;	border-radius:5px;background: #2F383D;margin-right: 4px;	padding-left: 4px;' id='"+trains[counterT-1] +
				"'><input type='hidden' name='trains[]' value='" + trains[counterT-1] +
				"'/>"+document.getElementById('trains').options[document.getElementById('trains').value-1].text+"<a class='input-group-addon' onclick=Remove('train','"+trains[counterT-1]+"')><div class='fa fa-minus'></div></a></div>";
        }
    }
    if (array === 'hobby') {
        if (CheckDuplicate(hobbys, document.getElementById(id).value)) {
            hobbys[counterH] = document.getElementById(id).value;
            counterH++;
            document.getElementById('hob').innerHTML +=	"<div class='input-group 'style='float:left;width: 120px;	border-radius:5px;background: #2F383D;margin-right: 4px;	padding-left: 4px;' id='"+hobbys[counterH - 1] +
				"'><input type='hidden' name='hobbs[]' value='" + hobbys[counterH - 1]+
				"'/>"+document.getElementById('hobbies').options[document.getElementById('hobbies').value-1].text+"<a class='input-group-addon' onclick=Remove('hobby','"+hobbys[counterH - 1]+"')><div class='fa fa-minus'></div></a></div>"
        }
    }
    if (array === "experience") {
        if(CheckDuplicate(experiences,document.getElementById(id).value)){
            experiences[counterE]= document.getElementById(id).value;
            counterE++;
            document.getElementById('experiencees').innerHTML+="<div class='input-group 'style='float:left;width: 120px;	border-radius:5px;background: #2F383D;margin-right: 4px;	padding-left: 4px;' id='"+experiences[counterE-1] +
				"'><input type='hidden' name='exp[]' value='" + experiences[counterE-1] +
				"'/>"+document.getElementById('experiences').options[document.getElementById('experiences').value-1].text+"<a class='input-group-addon' onclick=Remove('experience','"+experiences[counterE-1]+"')><div class='fa fa-minus'></div></a></div>"
        }
    }
    if (array === "campain") {
        if(CheckDuplicate(campains,document.getElementById(id).value)){
            campains[counterC]= document.getElementById(id).value;
            counterC++;
            document.getElementById('campainees').innerHTML+="<div class='input-group 'style='float:left;width: 170px;	border-radius:5px;background: #2F383D;margin-right: 4px;	padding-left: 4px;' id='"+campains[counterC-1] +
				"'><input type='hidden' name='camps[]' value='" + campains[counterC-1] +
				"'/>"+document.getElementById('campaines').options[document.getElementById('campaines').value-1].text+"<a class='input-group-addon' onclick=Remove('campain','"+campains[counterC-1]+"')><div class='fa fa-minus'></div></a></div>"
        }
    }

}
var index;
var elementToD
function CheckDuplicate(list, x) {
    if (list.length == 0) {
        return true;
    }
    for (this.i = 0; this.i < list.length; this.i++) {
        if (list[this.i] === x) {
            return false;
        }
    }
    return true;
}
function Remove(array, itemToD) { //itemToDelete
    if (array === 'hobby') {
        elementToD = document.getElementById(itemToD);
        index = hobbys.indexOf(itemToD, 0);
        hobbys.splice(index, 1);
        elementToD.parentNode.removeChild(elementToD);
    }alert("l  ");
    if (array === 'train') {alert("2  ");
        elementToD = document.getElementById(itemToD);
        index= trains.indexOf(itemToD,0);
        trains.splice(index,1);
        elementToD.parentNode.removeChild(elementToD);
    }
    if (array === "experience") {
        elementToD = document.getElementById(itemToD);
        index= experiences.indexOf(itemToD,0);
        experiences.splice(index,1);

        elementToD.parentNode.removeChild(elementToD);
    }
    if (array === "campain") {
        elementToD = document.getElementById(itemToD);
        index= campains.indexOf(itemToD,0);
        campains.splice(index,1);
        elementToD.parentNode.removeChild(elementToD);
    }

}
