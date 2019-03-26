$('#first').zenith({
    layout: 'slider',
    width: '90%', 
    height: '600px', 
    slideSpeed: 600, 
    style: 'shadow', 
    customNavs: ['#tf_thumbs', '.tf_thumb']
});
$('#second').zenith({
    layout: 'slider', 
    animation: 'Bounce', 
    width: '95%', 
    height: '760px', 
    slideSpeed: 670, 
    style: 'border', 
    customNavs: ['#tf_thumbs', '.tf_thumb'],
    fixedThumbs: false,
    thumbsBG : false
});
$('#third').zenith({
    layout: 'slider',
    width: '75%', 
    height: '600px', 
    slideSpeed: 600, 
    style: 'shadow', 
    customNavs: ['#tf_thumbs', '.tf_thumb'],
    navPosition: 'right',
    direction: 'vertical'
});