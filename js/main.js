
const canvas = new fabric.Canvas('c', {
    backgroundColor : "#fff",
    width: '500',
    height: '500'
});

canvas.add();

document.getElementById("upload_widget_opener").addEventListener("click", function() {
    cloudinary.openUploadWidget({ cloud_name: 'dubg2bkhg', upload_preset: 'jzshfuxk'}, 
      function(error, result) { 
        const image = result[0].thumbnail_url;
        const newImage = image.replace('h_60', 'h_400').replace(',w_90','');
        fabric.Image.fromURL(newImage, function(obj) {
            canvas.add(obj.set({
                hasControls: true,
                selection: true,       
                lockRotation:false,
                transparentBorder: true,
                height: 400,
                angle: 0,
                cornersize: 10,
                left: 102, 
                top: 52,
                crossOrigin: 'anonymous'
            }));
            canvas.setActiveObject(obj);
            obj.moveTo(-1);
            canvas.renderAll();
            }.bind(this),{
                crossOrigin: 'anonymous'
            }
        );
    });
    
}, false);

let bg = null;

fabric.Image.fromURL("img/bg.png", function(obj) {
    bg = obj;
    canvas.add(obj.set({
        width: 500,
        hasControls: false,
        selection: false,       
        lockRotation:true,
        transparentBorder: true,
        height: 500,
        angle: 0,
        lockMovementX: true,
        lockMovementY: true,
        cornersize: 10,
        left: 0, 
        top: 0
    }));
    obj.moveTo(5);
    canvas.renderAll();
});

$("#set").on('click', function(e){
    e.preventDefault();
    canvas.setActiveObject(bg);
    canvas.renderAll();
})

$(".startover").on("click", function(e){
    e.preventDefault();
    location.reload();
})

$(".save").on("click",function(e){
    e.preventDefault();
    $.ajax({
        type: 'POST',
        url: 'save.php',
        data: {task: 'save', img: canvas.toDataURL('png')},
        success: function(json) {
            json = JSON.parse(json);
            $('#output').html('<img src="' + json.data.url + '">');

            $(".saveContainer").removeClass('hide');
        }
    });
})
