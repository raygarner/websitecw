function display(string)
{
    alert(string);
}


function validateString(string)
{
    //var name = document.forms[form][field].value;

    //alert(name);

    if (/^[a-zA-Z\x20]+$/.test(name)) {
        alert("You entered a valid name");
        return true;
    } else {
        alert("A name can only contain letters");
        return false;
    }


}

function toggleForm(form)
{

    if (document.getElementById(form).style.display == "none") {
        document.getElementById(form).style.display="block";
    } else {
        document.getElementById(form).style.display="none";
    }

}

function selectForm(form)
{
    document.getElementById(form).style.display = "block";


    if (form.localeCompare("firstForm") != 0) {
        document.getElementById("firstForm").style.display = "none";
    }


    if (form.localeCompare("secondForm") != 0) {
        document.getElementById("secondForm").style.display = "none";
    }


    if (form.localeCompare("thirdForm") != 0) {
        document.getElementById("thirdForm").style.display = "none";
    }

}

function bgCol()
{
    var bgColour = document.getElementById("body").style.backgroundColor;
    var fgColour = document.getElementById("body").style.color;

    if (bgColour == "black") {
        document.getElementById("body").style.backgroundColor = "white";
        document.getElementById("body").style.color = "black";
    } else {
        document.getElementById("body").style.backgroundColor = "black";
        document.getElementById("body").style.color = "white";

    }

    //alert("bgCol called");
}

function validate(form) {
    var ok=1
    var msg=""

    //alert("validate called");

	for (var i = 0; i < form.length; i++) {
		if (form.elements[i].value.trim() == "") {
			//msg += "'" + form.elements[i].name + "' is void. "
			ok=0
            alert("'" + form.elements[i].name + "' is void. ");
		}

        if (!/^[a-zA-Z\x20]+$/.test(form.elements[i].value.trim())) {
            //alert("You entered a valid name");
            //return true;
        //} else {
            alert("A name can only contain letters");
            //return false;
            ok=0;
        }
	}


	if (ok == 0) {
		//alert(msg)
		return false
	}
	else {
		return true
	}

}

function validateNewFilm(form) {
    var ok = 1;
    var msg = "";

    for (var i = 0; i < form.length; i++) {
     
       

        switch (form.elements[i].name) {
            case "title":
                if (form.elements[i].value.trim() == "") {
                    //msg += "'" + form.elements[i].name + "' is void. "
                    ok = 0;

                    if (form.elements[i].name == "title") {
                        alert("'" + form.elements[i].name + "' is void. ");
                    }

                }
            case "genre":
                if (!/^(([a-zA-Z\x20]+)|(\s*))$/.test(form.elements[i].value.trim())) {
                    //alert("You entered a valid name");
                    //return true;
                    //} else {
                    alert("Name and genre can only contain letters");
                    //return false;
                    ok = 0;
                }
                break;
            case "price":
                if (!/^(([0-9]+\.[0-9][0-9])|(\s*))$/.test(form.elements[i].value.trim())) {
                  
                    alert("Invalid price format");
                    
                    ok = 0;
                }
                break;

            case "year":
                if (!/^(([1-2][0-9][0-9][0-9])|(\s*))$/.test(form.elements[i].value.trim())) {
                    alert("Invalid year");
                    ok = 0;
                }
                break;
            case "scenes":
                if (!/^(([0-9]+)|(\s*))$/.test(form.elements[i].value.trim())) {
                    alert("Invalid number of scenes");
                    ok = 0;
                }
                break;


        }
               
    }


    if (ok == 0) {
        //alert(msg)
        alert("invalid!")
        return false
    }
    else {
        alert("valid!");
        return true
    }

}
