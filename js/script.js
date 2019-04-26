function makeRequest(url, method, formData, callback) {
    var headers;
    if(method == "GET") {
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

function saveHoroscope() {

    var date = document.querySelector('#birthdate');
    var dateValue = document.querySelector('#birthdate').value;
    var output = document.querySelector('.sign');
    
    var requestData = new FormData();
    requestData.append("collectionType", "HoroscopeList")
    requestData.append("inputDate", dateValue);
    var url = "./php/request.php";

    makeRequest(url, "POST", requestData, (response) => {
        
        if(response) {
            console.log(response);
            
            output.innerHTML = date.value;
            date.value = '';
        }

    }

)};

function viewHoroscope() {
    var requestData = new FormData();
    requestData.append("collectionType", "HoroscopeList")
    var url = "./php/viewHoroscope.php";
    
    makeRequest(url, "GET", (response) => {

    })
}

function updateHoroscope() {
    console.log('This also works!');
}

function deleteHoroscope() {
    url = "./php/deleteHoroscope.php";
    makeRequest(url, "DELETE", (response) => {
        if(response) {

            var output = document.querySelector('.sign');
            output.innerHTML = "Your horoscope was deleted!";
            
        }
    })
}