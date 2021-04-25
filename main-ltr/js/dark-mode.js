var mode=localStorage.getItem("mode");

if (mode == 'dark'){

$( "body" ).addClass( "dark-skin" );
} else {
$( "body" ).addClass( "light-skin" );

} 


  function myFunction() {

if( $( "body" ).hasClass( "dark-skin" )) {
$( "body" ).removeClass( "dark-skin" );
localStorage.setItem("mode","light");
//   $( ".inner-switch" ).text( "OFF" );
} else {
$( "body" ).addClass( "dark-skin" );
//   alert('set');
localStorage.setItem("mode","dark");
// alert("hi"+localStorage.getItem("mode"));
//   $( ".inner-switch" ).text( "ON" );
}
}