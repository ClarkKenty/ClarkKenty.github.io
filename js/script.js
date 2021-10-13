document.onmousemove = (e)=>{
    let compass = document.getElementById('compass');
    compassClient = compass.getBoundingClientRect()
   
    let dx = compassClient.left+30-e.clientX;
    let dy = compassClient.top+30-e.clientY;
    let tan = dy/dx;
    let angle;
    if(dx>=0){
        angle = Math.atan(tan)*57.2957795+180;
    }
    else{
        angle = Math.atan(tan)*57.2957795;
    }
    document.getElementById('compass').style.transform = `rotate(${angle}deg)`;

}


