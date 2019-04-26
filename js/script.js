var date = document.querySelector('#birthdate');
var dateValue = document.querySelector('#birthdate').value;
var output = document.querySelector('.sign');


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
    requestData.append("inputDate", dateValue);
    var url = "./php/function.php";

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
        return response;
    })
}

function updateHoroscope() {
    console.log('This works!');
}

function deleteHoroscope() {

    var requestData = new FormData();
    url = "./php/deleteHoroscope.php";
    requestData.append("collectionType", "HoroscopeList")

    makeRequest(url, "DELETE", requestData, (response) => {

        if(response) {
           output.innerText = 'The horoscope was deleted';
        }
        
    })

}