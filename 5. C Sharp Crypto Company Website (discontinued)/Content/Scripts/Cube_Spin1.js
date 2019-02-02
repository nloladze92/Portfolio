
const backgroundColor = 0x010414;

/*////////////////////////////////////////*/

var renderCalls = [];
function render () {
  requestAnimationFrame( render );
  renderCalls.forEach((callback)=>{ callback(); });
}
render();

/*////////////////////////////////////////*/

var scene = new THREE.Scene();
scene.fog = new THREE.Fog(backgroundColor, 30, 300);

var camera = new THREE.PerspectiveCamera(10, window.innerWidth / window.innerHeight, 0.1, 1000 );
scene.add( camera );
camera.position.set(12, 11, 12);
camera.lookAt(new THREE.Vector3(0,0,0));

var renderer = new THREE.WebGLRenderer( { antialias: true } );
renderer.setPixelRatio( window.devicePixelRatio );
renderer.setSize( window.innerWidth, window.innerHeight );
renderer.setClearColor( backgroundColor );

window.addEventListener( 'resize', function () {
  camera.aspect = window.innerWidth / window.innerHeight;
  camera.updateProjectionMatrix();
  renderer.setSize( window.innerWidth, window.innerHeight );
}, false );

document.body.appendChild( renderer.domElement);

function renderScene(){ renderer.render( scene, camera ); }
renderCalls.push(renderScene);


/* ////////////////////////////////////////////////////////////////////////// */

// var controls = new THREE.OrbitControls( camera );

// controls.rotateSpeed = 0.4;
// controls.zoomSpeed = 0.3;
// controls.panSpeed = 0;

// controls.enableDamping = true;
// controls.dampingFactor = 0.1;

// renderCalls.push(function(){
//   controls.update()
// });

/* ////////////////////////////////////////////////////////////////////////// */


function alphaMap(){
    var canvas = document.createElement('canvas'),
        ctx = canvas.getContext('2d'),
        width = canvas.width = 128,
        height = canvas.height = 128;

  ctx.fillStyle = '#eeebd9';
  ctx.fillRect(0, 0, width, height);
  ctx.globalAlpha = 0.8;
  ctx.fillStyle = '#eeebd9';
  ctx.fillRect(1, 1, width - 2, height - 2);

  //let sprite = 
  var textureLoader = new THREE.TextureLoader();
  var texture = textureLoader.load(canvas.toDataURL());
  return texture;
}

var tex = alphaMap();
tex.magFilter = THREE.NearestFilter;
tex.wrapS = THREE.ClampToEdgeWrapping;
tex.wrapT = THREE.ClampToEdgeWrapping;
tex.anisotropy = 2;

var geo = new THREE.BoxGeometry(1,1,1);
var mat = new THREE.MeshBasicMaterial({ 
  depthTest: false,
  depthWrite: false,
  transparent: true,
  alphaMap: tex,
  opacity: 2,
  side: THREE.DoubleSide
});

var cube = new THREE.Mesh(geo, mat);

cube.material.color.set('#010414');//setHSL(0, 1.0, 0.6);
cube.material.color.offsetHSL(0.02, 0.02, 0);

var cubes = new THREE.Group();

for (var i = 0, total = 8; i < total; i++) {
  var clone = cube.clone();
  clone.material = clone.material.clone();
  clone.material.color.offsetHSL( 
    0.15 * (i / total), 
    0, 
    0.15 * (i / total)
  );
  clone.scale.set(
    1 - 0.9 * (i/total), 
    1, // + 0.6 * (i/total), 
    1 - 0.9 * (i/total)
  );
  cubes.add(clone);
}

scene.add(cubes);


/* ////////////////////////////////////////////////////////////////////////// */


var tl = new TimelineMax({
  repeat: -1,
  repeatDelay: 0.3,
  yoyo: true
});

tl.timeScale(0.8);

cubes.children.forEach((cube,i,arr)=>{

  tl.addLabel(
    'cube'+i, 
    0.75 * Power2.easeOut.getRatio( 1 - i / arr.length )
  );

  tl.to(
    cube.rotation, 
    5, 
    {
      z: Math.PI * 2,
      x: Math.PI * -2,
      ease:  Expo.easeInOut, 
    }, 
    'cube'+i);

  tl.to(
    cube.scale, 
    1.25, 
    {
      y: 1 - 0.9 * (i/arr.length), 
      ease: Expo.easeInOut, 
    }, 
    'cube'+i);

  tl.to(
    cube.scale, 
    1.25, 
    {
      y: 1, 
      ease: Expo.easeInOut, 
    }, 
    3 + ( 0.75 * Power2.easeIn.getRatio( i / arr.length ))
  );

});


tl.to(
  tex.offset, 
  1.25, 
  {
    x: 1,
    y: 1,
    ease: Power2.easeIn
  },2.25);


tl.to(
  cubes.rotation, 
  5.75, 
  {
    x: Math.PI * 2,
    z: Math.PI * -2,
    ease: Expo.easeInOut,
  }, 
  0.25);