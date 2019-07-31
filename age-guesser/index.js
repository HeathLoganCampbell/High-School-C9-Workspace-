var canvas = document.getElementById('display');
var ctx = canvas.getContext('2d')
var camera = document.getElementById('camera');
var age = "???";

canvas.width = screen.width; //document.width is obsolete
canvas.height = screen.height - 200; //document.height is obsolete

navigator.mediaDevices.getUserMedia({video: true}).then(function(stream)
{
    camera.src = URL.createObjectURL(stream);

}).catch(function()
{
    alert("Please click allow <3 camera access")
});


function takeSnapshot(camera, callback, errorCallback)
{
     var hidden_canvas = document.getElementById('imageScreen'),
         context = hidden_canvas.getContext('2d');

     var width = camera.videoWidth,
         height = camera.videoHeight;

     if (width && height)
     {
          hidden_canvas.width = width;
          hidden_canvas.height = height;
          context.drawImage(camera, 0, 0, width, height);
          var imgPng = hidden_canvas.toDataURL('image/png');
          
		$.ajax({
			url:  "https://australiaeast.api.cognitive.microsoft.com/face/v1.0/detect?returnFaceAttributes=emotion,age,makeup,glasses",
			beforeSend: function(xhrObj)
               {
                    xhrObj.setRequestHeader("Content-Type", "application/octet-stream");
                    xhrObj.setRequestHeader("Ocp-Apim-Subscription-Key", "7bdb69ccadb44ee7a65ca28614e88221");
			},
			type: "POST",
			data: makeblob(imgPng),
			processData: false,
		}).done(function(data,status)
          {
               callback(data, status)
          }).fail(function(err)
          {
               errorCallback(err);
          });
     }
}

function makeblob(dataURL)
{
     var BASE64_MARKER = ';base64,';
     if (dataURL.indexOf(BASE64_MARKER) == -1) {
          var parts = dataURL.split(',');
          var contentType = parts[0].split(':')[1];
          var raw = decodeURIComponent(parts[1]);
          return new Blob([raw], { type: contentType });
     }
     var parts = dataURL.split(BASE64_MARKER);
     var contentType = parts[0].split(':')[1];
     var raw = window.atob(parts[1]);
     var rawLength = raw.length;

     var uInt8Array = new Uint8Array(rawLength);

     for (var i = 0; i < rawLength; ++i) {
          uInt8Array[i] = raw.charCodeAt(i);
     }
     return new Blob([uInt8Array], { type: contentType });
 }


function draw() {
 ctx.drawImage(camera, 0, 0, canvas.width, canvas.height); 
 ctx.fillStyle = "#FFFFFF";
 ctx.font="80px Calibre";
 ctx.fillText("Your age is " + age, 50, 100)
 requestAnimationFrame(draw);
 
};

requestAnimationFrame(draw)

var self = this;
function guessAge()
{
    console.log("guessing...")
    takeSnapshot(camera, (data, status) => {
        if(data == undefined || data[0] == undefined) return;
        
        self.age = data[0]['faceAttributes']['age'];
        alert("I think your age is " + self.age)
        console.log(data[0]['faceAttributes']['age'])
    }, () => {})
}