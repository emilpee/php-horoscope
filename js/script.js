var date = document.querySelector('#birthdate');

var output = document.querySelector('.sign');

function makeRequest(url, method, formData, callback) {
    var headers;
    if(method == "GET" || !formData) {
        headers = {
            method: method
        }
    } else {
        headers = {
            method: method,
            body: formData
        }
    }
    fetch(url, headers).then((data) => {
        return data.json();
    }).then((result) => {
        callback(result);
    }).catch((err) => {
        console.log(err);
    })
}

function viewHoroscope() {
    var url = "./php/viewHoroscope.php";
    makeRequest(url, "GET", undefined, (response) => {
        if(response) {
            output.innerHTML = `You are: ${response[0].horoscopeSign}`;
        } 
    })
}


function saveHoroscope() {
    var requestData = new FormData();
    // Convert input year to year stated in database
    var dateValue = new Date(document.querySelector('#birthdate').value);
    dateValue.setFullYear("2019");
    var dateToSave = dateValue.toISOString().substring(0, 10);
    requestData.append("inputDate", dateToSave);
    var url = "./php/addHoroscope.php";

   makeRequest(url, "POST", requestData, (response) => {
        console.log(response);
        viewHoroscope();
    }) 

};

function updateHoroscope() {
    var requestData = new FormData();
    // Convert input year to year stated in database
    var dateValue = new Date(document.querySelector('#birthdate').value);
    dateValue.setFullYear("2019");
    var dateToSave = dateValue.toISOString().substring(0, 10);
    requestData.append("inputDate", dateToSave);
    var url = "./php/updateHoroscope.php";

    makeRequest(url, "POST", requestData, (response) => {
        console.log(response);
        viewHoroscope();
    })
}

function deleteHoroscope() {
    url = "./php/deleteHoroscope.php";

    makeRequest(url, "DELETE", undefined, (response) => {
        console.log(response);
        if(response) {
            viewHoroscope();
            output.innerText = 'Your horoscope was deleted';
            setTimeout(() => {
                window.location.reload();
            }, 1500);
        }
    })
}

viewHoroscope();