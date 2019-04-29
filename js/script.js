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
    requestData.append("inputDate", dateValue);
    var url = "./php/addHoroscope.php";

   makeRequest(url, "POST", requestData, (response) => {
        console.log(response);
        viewHoroscope();
        output.innerHTML = date.value;
        date.value = '';
    }) 

   };

function viewHoroscope() {
    var url = "./php/viewHoroscope.php";
    var requestData = new FormData();
    requestData.append("collectionType", "HoroscopeList");
    
    makeRequest(url, "GET", requestData, (response) => {
        console.log(response);
    })
}

function updateHoroscope() {
    console.log('This works!');
}

function deleteHoroscope() {

    var requestData = new FormData();
    url = "./php/deleteHoroscope.php";
    requestData.append("inputDate", dateValue);

    makeRequest(url, "DELETE", requestData, (response) => {
        console.log(response);
        if(response) {
            viewHoroscope();
            output.innerText = 'The horoscope was deleted';
        }
        
    })

}
