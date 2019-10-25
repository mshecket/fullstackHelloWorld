var request = new XMLHttpRequest()

request.open('GET', 'https://helloworld.mikeshecket.com/helloworld.php', true)

request.onload = function () {
    var data = JSON.parse(this.response)
    document.getElementById("root").innerHTML = data.message
}

request.send()
