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

function getHoroscope() {
    
    var requestData = new FormData();
    requestData.append("collectionType", "HoroscopeList")
    requestData.append("action", "getHoroscope");
    var url = "./php/request.php";

    makeRequest(url, "POST", requestData, (response) => {
        console.log(response);

        var date = document.querySelector('#birthdate').value;
        var output = document.querySelector('.sign');
        
        output.innerHTML = date;

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
    console.log('Aaand this one too!');
}