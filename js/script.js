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
    
    var requestData = new FormData();
    requestData.append("collectionType", "HoroscopeList")
    requestData.append("inputDate", "save");
    var url = "./php/request.php";

    makeRequest(url, "POST", requestData, (response) => {
        
        if(response) {
            console.log(response);

            console.log(requestData.value);

            //viewHoroscope();

            var date = document.querySelector('#birthdate');
            var output = document.querySelector('.sign');
            
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
        console.log(response);
    })
}

function updateHoroscope() {
    console.log('This also works!');
}

function deleteHoroscope() {
    url = "./php/deleteHoroscope.php";
    makeRequest(url, "DELETE", (response) => {
        console.log(response);
    })
}