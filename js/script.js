function makeRequest(url, method, formData, callback) {
    fetch(url, {
        method: method,
        body: formData
    }).then((data) => {
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
    }

)};

function updateHoroscope() {
    console.log('This also works!');
}

function deleteHoroscope() {
    console.log('Aaand this one too!');
}