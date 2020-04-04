let http = require('http');

function onRequest(request, response) {
    let reqUrl = request.url;

    if(reqUrl == '/home') {

        response.writeHead(404, {"Content-Type": "text/html"});

        response.write("<h1>Welcome to the Home Page</h1>");

        response.end();

    } else if (reqUrl == '/getData') {

        var myJson = '{"name":"Fangyi Li","class":"cs313"}';
        var jsonObj = JSON.parse(myJson);
        var jsonData = JSON.stringify(jsonObj);

        response.writeHead(200, {"Content-Type": "application/json"});      

        response.write(jsonData);

        response.end();

    } else {

        response.writeHead(404, {"Content-Type": "text/html"});

        response.write("<h2>404 Page Not Found</h2>");

        response.end();
    }

}

let server = http.createServer(onRequest);

server.listen(8888);

console.log("The server is now listening on port 8888...");