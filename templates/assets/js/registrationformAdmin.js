var i = 0;
var Ahoppy = 0;
var hobbys = [];
var counterH = 0;
var hobbieslist = ["swimming", "running"];

var Aphone = 0;
var phoneList = [];

var positions = ["Leader", "Leader assist", "Rouer", "Venturer", "Scout", "Cub", "Beauer"];

var campains = [];
var campainlist = ["campain1", "campain2"];
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
    if (array === 'hobby') {
        if (CheckDuplicate(hobbys, document.getElementById(id).value)) {
            hobbys[counterH] = document.getElementById(id).value;
            counterH++;
            document.getElementById('hob').innerHTML += "<div class='diva' id='" + hobbys[counterH - 1] +
                "'>" + hobbys[counterH - 1] + "<a onclick=Remove('hobby','" + hobbys[counterH - 1] +
                "')><div class='glyphicon glyphicon-minus btn btn-info'></div></a></div>";
        }
    }
    if(array==="train"){
        if(CheckDuplicate(trains,document.getElementById(id).value)){
            trains[counterT]= document.getElementById(id).value;
            counterT++;
            document.getElementById('traines').innerHTML+="<div class='diva' id='"+trains[counterT-1]+"'>"
             +trains[counterT-1]+"<a onclick=Remove('train','"+trains[counterT-1]+
            "')><div class='glyphicon glyphicon-minus btn btn-info'></div></a></div>";
        }
    }
    if (array === "experience") {
        if(CheckDuplicate(experiences,document.getElementById(id).value)){
            experiences[counterE]= document.getElementById(id).value;
            counterE++;
            document.getElementById('experiencees').innerHTML+="<div class='diva' id='"+experiences[counterE-1]+"'>"
             +experiences[counterE-1]+"<a onclick=Remove('experience','"+experiences[counterE-1]+
            "')><div class='glyphicon glyphicon-minus btn btn-info'></div></a></div>";
        }
    }
    if (array === "campain") {
        if(CheckDuplicate(campains,document.getElementById(id).value)){
            campains[counterC]= document.getElementById(id).value;
            counterC++;
            document.getElementById('campainees').innerHTML+="<div class='diva' id='"+campains[counterC-1]+"'>"
             +campains[counterC-1]+"<a onclick=Remove('campain','"+campains[counterC-1]+
            "')><div class='glyphicon glyphicon-minus btn btn-info'></div></a></div>";
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
    }
    if (array === 'train') {
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
