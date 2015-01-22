var canvas = new fabric.Canvas('c',{backgroundColor : "#0ff",width: '600',height: '500'});
console.log(canvas);
canvas.add(
);


    fabric.Image.fromURL("img/thompson.png", function(obj) {
    canvas.add(obj.set({
        width: 394,
        hasControls: true,
        //cornerColor: 'green',cornerSize: 16,transparentCorners: false,
        selection: false,       
        lockRotation:false,
        //lockMovement: false,lockMovementY: false,lockMovementX: false,
        //lockUniScaling: false,lockScalingY:false, lockScalingX:false,
        transparentBorder: true,
        height: 394,
        angle: 0,
        cornersize: 10,
        left: 102, 
        top: 52
    }));
    canvas.setActiveObject(canvas.item(0));
    //img.bringToFront();
    canvas.renderAll();
    });



var img = new Image();
img.onload = function(){
   canvas.setBackgroundImage(img.src, canvas.renderAll.bind(canvas), {
            originX: 'left',
            originY: 'top',
            left: 0,
            top: 0,
            backgroundImageStretch: true,
        });
};
img.src = "img/cat2.png";



$(".cat1").on("click",function(){

  var img = new Image();
  img.onload = function(){
   canvas.setBackgroundImage(img.src, canvas.renderAll.bind(canvas), {
            originX: 'left',
            originY: 'top',
            left: 0,
            top: 0,
            backgroundImageStretch: true,
        });
  };
  img.src = "img/cat1.jpg";
  canvas.renderAll();

})

$(".cat2").on("click",function(){

  var img = new Image();
  img.onload = function(){
   canvas.setBackgroundImage(img.src, canvas.renderAll.bind(canvas), {
            originX: 'left',
            originY: 'top',
            left: 0,
            top: 0,
            backgroundImageStretch: true,
        });
  };
  img.src = "img/cat2.png";
  canvas.renderAll();

})

$(".cat3").on("click",function(){

  var img = new Image();
  img.onload = function(){
   canvas.setBackgroundImage(img.src, canvas.renderAll.bind(canvas), {
            originX: 'left',
            originY: 'top',
            left: 0,
            top: 0,
            backgroundImageStretch: true,
        });
  };
  img.src = "img/cat3.png";
  canvas.renderAll();

})


$(".cat4").on("click",function(){

  var img = new Image();
  img.onload = function(){
   canvas.setBackgroundImage(img.src, canvas.renderAll.bind(canvas), {
            originX: 'left',
            originY: 'top',
            left: 0,
            top: 0,
            backgroundImageStretch: true,
        });
  };
  img.src = "img/cat4.png";
  canvas.renderAll();

})


$(".cat5").on("click",function(){

  var img = new Image();
  img.onload = function(){
   canvas.setBackgroundImage(img.src, canvas.renderAll.bind(canvas), {
            originX: 'left',
            originY: 'top',
            left: 0,
            top: 0,
            backgroundImageStretch: true,
        });
  };
  img.src = "img/cat5.png";
  canvas.renderAll();

})


$(".cat6").on("click",function(){

  var img = new Image();
  img.onload = function(){
   canvas.setBackgroundImage(img.src, canvas.renderAll.bind(canvas), {
            originX: 'left',
            originY: 'top',
            left: 0,
            top: 0,
            backgroundImageStretch: true,
        });
  };
  img.src = "img/cat6.png";
  canvas.renderAll();

})


$(".ryan").on("click",function(){
      fabric.Image.fromURL("img/ryan.png", function(obj) {
    canvas.add(obj.set({
        width: 394,
        hasControls: true,
        //cornerColor: 'green',cornerSize: 16,transparentCorners: false,
        selection: false,       
        lockRotation:false,
        //lockMovement: false,lockMovementY: false,lockMovementX: false,
        //lockUniScaling: false,lockScalingY:false, lockScalingX:false,
        transparentBorder: true,
        height: 394,
        angle: 0,
        cornersize: 10,
        left: 102, 
        top: 52
    }));
    canvas.setActiveObject(canvas.item(0));
    //img.bringToFront();
    canvas.renderAll();
    });
    })

$(".cat7").on("click",function(){

  var img = new Image();
  img.onload = function(){
   canvas.setBackgroundImage(img.src, canvas.renderAll.bind(canvas), {
            originX: 'left',
            originY: 'top',
            left: 0,
            top: 0,
            backgroundImageStretch: true,
        });
  };
  img.src = "img/cat7.png";
  canvas.renderAll();

})

$(".save").on("click",function(){
  canvasURL = canvas.toDataURL();
var image = new Image();
image.src = canvas.toDataURL("image/png");
$('.saved').replaceWith(image);
return false;
})
