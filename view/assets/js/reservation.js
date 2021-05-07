let localTypeSelect = document.querySelector("#localType");
let Appt = document.querySelector("#Appartement");
let place = document.querySelector("#place");
let place2 = document.querySelector("#place2");

/* let bungalow = document.querySelector("#country > option:nth-child(3)");
let room = document.querySelector("#country > option:nth-child(4)"); */

localTypeSelect.addEventListener("change", chooseYourLocal);

// choose your local type - appartement / bungalow / room

function chooseYourLocal() {
    let index = localTypeSelect.value;

    console.log(index);

    // -------------------------------------------------------
    // ----------------- appartement choice ------------------
    // -------------------------------------------------------
    if (index == "Appartement") {
        place.innerHTML = ``;
        place2.innerHTML = ``;
        place.innerHTML = `
        <label for="pensionType" class="form-label">Pension Type</label>
        <select class="form-select form-control" id="pensionType" required>
            <option value="" selected hidden>Choose type of your Pension</option>
            <option>Full</option>
            <option>Whitout Pension</option>
            <option>Half</option>
        </select>
        <div class="invalid-feedback">
            Please select a valid type of pension.
        </div>`;

        pensionType.addEventListener("change", choosePensionType);

        function choosePensionType() {
            index2 = document.querySelector("#pensionType").value;

            console.log(index2);

            if (index2 == "Half") {
                place2.innerHTML = ``;
                place2.innerHTML = `
            <label for="localType" class="form-label">Local Type</label>
            <select class="form-select form-control" id="halfType" required>
                <option value="" selected hidden>Choose what type of half</option>
                <option>petit dej/dej</option>
                <option>petit dej/din</option>
            </select>
            <div class="invalid-feedback">
                Please select a valid type of type of half .
            </div>`;
            }
        }

        // -------------------------------------------------------
        // ----------------- bungalow choice ---------------------
        // -------------------------------------------------------
    } else if (index == "Bungalow") {
        place.innerHTML = ``;
        place2.innerHTML = ``;
        place.innerHTML = `
            <label for="pensionType" class="form-label">Pension Type</label>
            <select class="form-select form-control" id="pensionType" required>
                <option value="" selected hidden>Choose type of your Pension</option>
                <option>Full</option>
                <option>Whitout Pension</option>
                <option>Half</option>
            </select>
            <div class="invalid-feedback">
                Please select a valid type of pension.
            </div>`;
        let pensionType = document.querySelector("#pensionType");

        pensionType.addEventListener("change", choosePensionType);

        function choosePensionType() {
            index2 = document.querySelector("#pensionType").value;

            console.log(index2);

            if (index2 == "Half") {
                place2.innerHTML = ``;
                place2.innerHTML = `
                <label for="localType" class="form-label">Type of Half</label>
                <select class="form-select form-control" id="halfType" required>
                    <option value="" selected hidden>Choose what type of half</option>
                    <option>petit dej/dej</option>
                    <option>petit dej/din</option>
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
        // ------------------- Room Type - Simple Room / Double Room ----------------
        place.innerHTML = ``;
        place2.innerHTML = ``;
        place.innerHTML = `
        <label for="localType" class="form-label">Room Type</label>
        <select class="form-select form-control" id="roomType" required>
            <option value="" selected hidden>Choose type of room</option>
            <option>Simple Room</option>
            <option>Double Room</option>
        </select>
        <div class="invalid-feedback">
            Please select a valid type of local.
        </div>`;

        /* let roomType = document.querySelector("#roomType"); */

        roomType.addEventListener("change", chooseRoomType);

        console.log(roomType);
        // -------------------------------------------------
        // choose your room type - Simple Room / Double Room
        // -------------------------------------------------

        function chooseRoomType() {
            index2 = roomType.value;
            /* if (index2 == ) {} */
            console.log(index2);

            if (index2 == "Simple Room") {
                // -------------------- Simple Room view - internal view / external view --------------------
                place2.innerHTML = ``;
                place2.innerHTML = `
            <label for="roomView" class="form-label">Room View</label>
            <select class="form-select form-control" id="singleRoomView" required>
                <option value="" selected hidden>Choose type of view</option>
                <option>internal view</option>
                <option>external view + 20% simple room</option>
            </select>
            <div class="invalid-feedback">
                Please select a valid type of view .
            </div>`;
            } else {
                // -------------------- Double Room Type - double bed / 2 simple beds -----------------------
                place2.innerHTML = ``;
                place2.innerHTML = `
            <label for="doubleRoomType" class="form-label">Double Room Type</label>
            <select class="form-select form-control" id="doubleRoomType" required>
                <option value="" selected hidden>Choose type of double room</option>
                <option>double bed</option>
                <option>2 simple beds</option>
            </select>
            <div class="invalid-feedback">
                Please select a valid type of bed .
            </div>`;

                document
                    .querySelector("#doubleRoomType")
                    .addEventListener("change", chooseDoubleRoomType);

                function chooseDoubleRoomType() {
                    index2 = doubleRoomType.value;

                    if (index2 == "double bed") {
                        place2.innerHTML = ``;
                        place2.innerHTML = `
                <label for="roomView" class="form-label">Room View</label>
                <select class="form-select form-control" id="doubleRoomView" required>
                    <option value="" selected hidden>Choose type of view</option>
                    <option>internal view</option>
                    <option>external view + 20% double room</option>
                </select>
                <div class="invalid-feedback">
                    Please select a valid type of view .
                </div>`;

                        document
                            .querySelector("#doubleRoomView")
                            .addEventListener("change", chooseDoubleRoomView);

                        function chooseDoubleRoomView() {}
                    }
                }
            }
        }
    }
}