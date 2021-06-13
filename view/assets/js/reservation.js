let localTypeSelect = document.querySelector("#localType");
let Appt = document.querySelector("#Appartement");
let place = document.querySelector("#place");
let place2 = document.querySelector("#place2");
let place3 = document.querySelector("#place3");
let place4 = document.querySelector("#place4");
let place5 = document.querySelector("#place5")
let pension_place = document.querySelector("#pension_place");
let pension_half_option = document.querySelector("#pension_half_option");
let pension_place_container = document.querySelector("#pension_place_container");

localTypeSelect.addEventListener("change", chooseYourLocal);

// choose your local type - appartement / bungalow / room

// -------------------------------------------------------
// ----------------- local type choice -------------------
// -------------------------------------------------------

function chooseYourLocal() {
    let index = localTypeSelect.value;

    console.log(index);

    // -------------------------------------------------------
    // ----------------- appartement choice ------------------
    // -------------------------------------------------------
    if (index == "Appartement") {
        place.innerHTML = ``;
        place2.innerHTML = ``;
        place3.innerHTML = ``;
        place4.innerHTML = ``;
        place5.innerHTML = ``;
        pension_place.innerHTML = ``;
        pension_half_option.innerHTML = ``;
        place.innerHTML = `
        <label for="pensionType" class="form-label">Pension Type</label>
        <select class="form-select form-control" id="pensionType" name="pensionType" required>
            <option value="" selected hidden>Choose type of your Pension</option>
            <option>Full Pension</option>
            <option>Whitout Pension</option>
            <option>Half Pension</option>
        </select>
        <div class="invalid-feedback">
            Please select a valid type of pension.
        </div>`;


        // ---------******** pension options ******----------
        pensionType.addEventListener("change", choosePensionType);

        function choosePensionType() {
            index2 = document.querySelector("#pensionType").value;

            console.log(index2);

            if (index2 == "Half Pension") {
                place2.innerHTML = ``;
                place2.innerHTML = `
            <label for="localType" class="form-label">half type</label>
            <select class="form-select form-control" id="halfType" name="halfType" required>
                <option value="" selected hidden>Choose what type of half</option>
                <option value="dej">petit dej/dej</option>
                <option value="din">petit dej/din</option>
            </select>
            <div class="invalid-feedback">
                Please select a valid type of type of half .
            </div>`;
            } else {
                place2.innerHTML = ``;
            }

        }


        // -------------------------------------------------------
        // ----------------- bungalow choice ---------------------
        // -------------------------------------------------------
    } else if (index == "Bungalow") {
        place.innerHTML = ``;
        place2.innerHTML = ``;
        place3.innerHTML = ``;
        place4.innerHTML = ``;
        place5.innerHTML = ``;
        pension_place.innerHTML = ``;
        pension_half_option.innerHTML = ``;
        place.innerHTML = `
            <label for="pensionType" class="form-label">Pension Type</label>
            <select class="form-select form-control" id="pensionType" name="pensionType" required>
                <option value="" selected hidden>Choose type of your Pension</option>
                <option>Full</option>
                <option>Whitout Pension</option>
                <option>Half</option>
            </select>
            <div class="invalid-feedback">
                Please select a valid type of pension.
            </div>`;


        // ---------******** pension options ******----------

        let pensionType = document.querySelector("#pensionType");

        pensionType.addEventListener("change", choosePensionType);

        function choosePensionType() {
            index2 = document.querySelector("#pensionType").value;

            console.log(index2);

            if (index2 == "Half") {
                place2.innerHTML = ``;
                place2.innerHTML = `
                <label for="halfType" class="form-label">Type of Half</label>
                <select class="form-select form-control" id="halfType" name="halfType" required>
                    <option value="" selected hidden>Choose what type of half</option>
                    <option value="dej">petit dej/dej</option>
                    <option value="din">petit dej/din</option>
                </select>
                <div class="invalid-feedback">
                    Please select a valid type of type of half .
                </div>`;
            }
        }

        // ---------------------------------------------------------------
        // ------------------------- ROOM CHOICE -------------------------
        // ---------------------------------------------------------------

    } else {
        // ------------------- Room Type ---> Simple Room / Double Room ----------------
        place.innerHTML = ``;
        place2.innerHTML = ``;
        place3.innerHTML = ``;
        place4.innerHTML = ``;
        place5.innerHTML = ``;
        pension_place.innerHTML = ``;
        pension_half_option.innerHTML = ``;
        place.innerHTML = `
        <label for="localType" class="form-label">Room Type</label>
        <select class="form-select form-control" id="roomType" name="chambreType" required>
            <option value="" selected hidden>Choose type of room</option>
            <option>Simple Room</option>
            <option>Double Room</option>
        </select>
        <div class="invalid-feedback">
            Please select a valid type of local.
        </div>`;


        roomType.addEventListener("change", chooseRoomType);

        console.log(roomType);

        // ----------------------------------------------------------------------
        // ******* choose your room type ----> Simple Room / Double Room ********
        // ----------------------------------------------------------------------

        function chooseRoomType() {
            index2 = roomType.value;

            console.log(index2);

            if (index2 == "Simple Room") {
                // ------- Simple Room view --> internal view / external view -------
                place2.innerHTML = ``;
                place3.innerHTML = ``;
                place4.innerHTML = ``;
                place5.innerHTML = ``;
                pension_half_option.innerHTML = ``;
                pension_place.innerHTML = ``;

                // -------***** view type ******---------
                place2.innerHTML = `
            <label for="roomView" class="form-label">Room View</label>
            <select class="form-select form-control" id="singleRoomView" name="vueType" required>
                <option value="" selected hidden>Choose type of view</option>
                <option>internal view</option>
                <option>external view + 20% simple room</option>
            </select>
            <div class="invalid-feedback">
                Please select a valid type of view .
            </div>`;

                // --------- pension place --------

                pension_place.innerHTML =
                    `<label for="pensionType" class="form-label">Pension Type</label>
            <select class="form-select form-control" id="pensionType" name="pensionType" required>
                <option value="" selected hidden>Choose type of your Pension</option>
                <option>Full Pension</option>
                <option>Whitout Pension</option>
                <option>Half Pension</option>
            </select>
            <div class="invalid-feedback">
                Please select a valid type of pension.
            </div>`;

                // pension choice

                pensionType.addEventListener("change", choosePensionType);

                function choosePensionType() {
                    index2 = document.querySelector("#pensionType").value;

                    console.log(index2);

                    if (index2 == "Half Pension") {
                        pension_half_option.innerHTML = ``;
                        pension_half_option.innerHTML = `
                <label for="halfType" class="form-label">Type of Half</label>
                <select class="form-select form-control" id="halfType" name="halfType" required>
                    <option value="" selected hidden>Choose what type of half</option>
                    <option value="dej">petit dej/dej</option>
                    <option value="din">petit dej/din</option>
                </select>
                <div class="invalid-feedback">
                    Please select a valid type of type of half .
                </div>`;
                    } else {
                        pension_half_option.innerHTML = ``;
                    }
                }

                // childrens number 


                place4.innerHTML = `<div class="mb-3">
        <label for="numberOfChildrens">childrens</label>
        <input type="number" class="form-control" id="numberOfChildrens" name="numberOfChildrens" min="0" max="5" placeholder="enter number of your childrens">
        <div class="invalid-feedback">
        Please enter a valid number.
        </div>
    </div>`;

                let numberofchildrens = document.querySelector("#numberOfChildrens");

                numberofchildrens.addEventListener("input", showChildrensInputs);

            } else { // ------******** double room choice *******----------

                // -------------------- Double Room Type - double bed / 2 simple beds -----------------------
                place2.innerHTML = ``;
                place3.innerHTML = ``;
                place4.innerHTML = ``;
                place5.innerHTML = ``;
                pension_half_option.innerHTML = ``;
                pension_place.innerHTML = ``;
                place2.innerHTML = `
            <label for="doubleRoomType" class="form-label">Double Room Type</label>
            <select class="form-select form-control" id="doubleRoomType" name="chambreDoubleType" required>
                <option value="" selected hidden>Choose type of double room</option>
                <option>double bed</option>
                <option>2 simple beds</option>
            </select>
            <div class="invalid-feedback">
                Please select a valid type of bed.
            </div>`;

                document.querySelector("#doubleRoomType").addEventListener("change", chooseDoubleRoomType);

                function chooseDoubleRoomType() {
                    index2 = doubleRoomType.value;

                    if (index2 == "double bed") {
                        place3.innerHTML = ``;
                        place4.innerHTML = ``;
                        place5.innerHTML = ``;
                        pension_place.innerHTML = ``;
                        pension_half_option.innerHTML = ``;
                        place3.innerHTML = `
                <label for="doubleRoomView" class="form-label">Room View</label>
                <select class="form-select form-control" id="doubleRoomView" name="vueType" required>
                    <option value="" selected hidden>Choose type of view</option>
                    <option>internal view</option>
                    <option>external view + 20% double room</option>
                </select>
                <div class="invalid-feedback">
                    Please select a valid type of view .
                </div>`;

                        // pension place 
                        pension_place.innerHTML =
                            `<label for="pensionType" class="form-label">Pension Type</label>
            <select class="form-select form-control" id="pensionType" name="pensionType" required>
                <option value="" selected hidden>Choose type of your Pension</option>
                <option>Full Pension</option>
                <option>Whitout Pension</option>
                <option>Half Pension</option>
            </select>
            <div class="invalid-feedback">
                Please select a valid type of pension.
            </div>`;


                        // pension choice

                        pensionType.addEventListener("change", choosePensionType);

                        function choosePensionType() {
                            index2 = document.querySelector("#pensionType").value;

                            console.log(index2);

                            if (index2 == "Half Pension") {
                                pension_half_option.innerHTML = ``;
                                pension_half_option.innerHTML = `
                <label for="halfType" class="form-label">Type of Half</label>
                <select class="form-select form-control" id="halfType" name="halfType" required>
                <option value="" selected hidden>Choose what type of half</option>
                <option value="dej">petit dej/dej</option>
                <option value="din">petit dej/din</option>
                </select>
                <div class="invalid-feedback">
                Please select a valid type of type of half .
                </div>`;
                            } else {
                                pension_half_option.innerHTML = ``;
                            }
                        }


                        place4.innerHTML = `<div class="mb-3">
                <label for="numberOfChildrens">childrens</label>
                <input type="number" class="form-control" id="numberOfChildrens" name="numberOfChildrens" min="0" max="5" placeholder="enter number of your childrens">
                <div class="invalid-feedback">
                Please enter a valid number.
                </div>
            </div>`;

                        let numberofchildrens = document.querySelector("#numberOfChildrens");

                        numberofchildrens.addEventListener("input", showChildrensInputs);

                        //----- 2 simple bed ----   
                    } else if (index2 == "2 simple beds") {
                        place3.innerHTML = ``;
                        place4.innerHTML = ``;
                        place5.innerHTML = ``;
                        pension_place.innerHTML = ``;
                        pension_half_option.innerHTML = ``;
                        place3.innerHTML = `
                <label for="doubleRoomView" class="form-label">Room View</label>
                <select class="form-select form-control" id="doubleRoomView" name="vueType" required>
                    <option value="" selected>internal vue</option>
                </select>
                <div class="invalid-feedback">
                    Please select a valid type of view .
                </div>`

                        pension_place.innerHTML =
                            `<label for="pensionType" class="form-label">Pension Type</label>
            <select class="form-select form-control" id="pensionType" name="pensionType" required>
                <option value="" selected hidden>Choose type of your Pension</option>
                <option>Full Pension</option>
                <option>Whitout Pension</option>
                <option>Half Pension</option>
            </select>
            <div class="invalid-feedback">
                Please select a valid type of pension.
            </div>`;

                        // pension choice

                        pensionType.addEventListener("change", choosePensionType);

                        function choosePensionType() {
                            index2 = document.querySelector("#pensionType").value;

                            console.log(index2);

                            if (index2 == "Half Pension") {
                                pension_half_option.innerHTML = ``;
                                pension_half_option.innerHTML = `
                <label for="halfType" class="form-label">Type of Half</label>
                <select class="form-select form-control" id="halfType" name="halfType" required>
                <option value="" selected hidden>Choose what type of half</option>
                <option value="dej">petit dej/dej</option>
                <option value="din">petit dej/din</option>
                </select>
                <div class="invalid-feedback">
                Please select a valid type of type of half .
                </div>`;
                            }
                        }


                        place4.innerHTML = `<div class="mb-3">
        <label for="numberOfChildrens">childrens</label>
        <input type="number" class="form-control" id="numberOfChildrens" name="numberOfChildrens" min="0" max="5" placeholder="enter number of your childrens">
        <div class="invalid-feedback">
        Please enter a valid number.
        </div>
    </div>`;

                        let numberofchildrens = document.querySelector("#numberOfChildrens");

                        numberofchildrens.addEventListener("input", showChildrensInputs);


                    } // ---- end of condition 2 simple beds ------ 
                } //
            }
        }
    }
}

// ----***** childrens function ****-----

function showChildrensInputs() {
    numberOfChildrens = document.querySelector("#numberOfChildrens").value;
    console.log(numberOfChildrens);

    place5.innerHTML = ``;

    for (i = 1; i <= numberOfChildrens; i++) {
        console.log(i);
        place5.innerHTML +=
            `<div class="row">
        <div class="col-lg-6 mb-3">
        <label for="child">child ${i}</label>
        <input type="text" class="form-control age-input" id="${i}" name="child${i}" placeholder="enter age of child ${i}" oninput="selection(${i})" required>
        </div>
        <div class="col-lg-6 mb-3" id="child_select_place${i}">
        
        </div>
        </div>`
    }
}



function selection(i) {


    let child_age = document.getElementById(parseInt(i)).value;
    console.log(child_age);
    let childOptions = document.querySelector("#child_select_place" + i);
    console.log(child_age);

    if (child_age <= 2) {
        childOptions.innerHTML = ``;
        childOptions.innerHTML =
            `
            <label for="optionSelect1" class="form-label">option selelct</label>
            <select class="form-select form-control" id="optionSelect${i}" name="childOption${i}" required>
            <option value="" selected hidden>Choose what your option</option>
            <option value="supplement_lit_25%">supplément lit enfant 25% chambre simple</option>
            <option value="sans_supplement_lit">pas de supplément lit 0 DH</option>
        </select>`;
    } else if (2 < child_age && child_age <= 14) {
        childOptions.innerHTML = ``;
        childOptions.innerHTML =
            `
            <label for="optionSelect1" class="form-label">option selelct</label>
            <select class="form-select form-control" id="optionSelect${i}" name="childOption${i}" required>
            <option value="ajout_50%_chambre_simple" selected >ajout 50% chambre simple</option>
        </select>`;
    } else if (child_age >= 14) {
        console.log("well done !!!!!!")
        childOptions.innerHTML = ``;
        childOptions.innerHTML =
            `
            <label for="optionSelect1" class="form-label">option selelct</label>
            <select class="form-select form-control" id="optionSelect${i}" name="childOption${i}" required>
            <option value="ajout_chambre_simple" >ajouter une chambre simple</option>
            <option value="ajout_70%_chambre_simple+lit" >ajouter 70% chambre simple + lit</option>
        </select>`;
    }
}

















/* 

let ageInput = document.querySelectorAll(".age-input");
console.log(ageInput[i]);

for (i = 0; i < ageInput.length; i++) {

    ageInput[i].addEventListener("input", function(e) {

        // if (ageInput[i].value == 5) {
        // }
        console.log(e.target.value);

        let childOptions = e.target.parentElement.parentElement.children[1];



        console.log(i);

        childOptions.innerHTML = ``;
        if (e.target.value <= 2) {
            childOptions.innerHTML = ``;
            childOptions.innerHTML =
                `
                    <label for="optionSelect1" class="form-label">option selelct</label>
                    <select class="form-select form-control" id="optionSelect${i}" name="childOption${i}" required>
                    <option value="" selected hidden>Choose what your option</option>
                    <option>supplément lit enfant 25% chambre simple</option>
                    <option>pas de supplément lit 0 DH</option>
                </select>`;
        } else if (2 < e.target.value && e.target.value < 14) {
            childOptions.innerHTML = ``;
            childOptions.innerHTML =
                `
                    <label for="optionSelect1" class="form-label">option selelct</label>
                    <select class="form-select form-control" id="optionSelect${i}" name="childOption${i}" required>
                    <option value="" selected >ajout 50% chambre simple</option>
                </select>`;
        } else if (e.target.value >= 14) {
            console.log("well done !!!!!!")
            childOptions.innerHTML = ``;
            childOptions.innerHTML =
                `
                    <label for="optionSelect1" class="form-label">option selelct</label>
                    <select class="form-select form-control" id="optionSelect${i}" name="childOption${i}" required>
                    <option value="" >ajouter une chambre simple</option>
                    <option value="" >ajouter 70% chambre simple + lit</option>
                </select>`;
        }

    })

} */