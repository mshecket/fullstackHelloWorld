var request = new XMLHttpRequest()

request.open('GET', 'https://www.mikeshecket.com/helloworld.php', true)

request.onload = function () {
    var data = JSON.parse(this.response)
}

request.send()

document.getElementById("root").innerHTML = data.message
