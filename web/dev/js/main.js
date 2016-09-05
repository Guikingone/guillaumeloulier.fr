var ajaxRequest = new XMLHttpRequest();
ajaxRequest.open("GET", 'http://localhost/projets/symfony/ReactJS/React/web/app_dev.php/api/articles/get', false);
ajaxRequest.send(null);

var data = JSON.parse(ajaxRequest.responseText);

console.log(data);