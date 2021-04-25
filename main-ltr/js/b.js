
  $(".bubble").hide();


  $(document).ready(function(){

    $("#myBtn").click(function(){
      $(".bubble").show();
      document.getElementById('foo').style.cssText = 'background-color: black; z-index:100';
        // alert('Congratulations for your coins');
    });
   
  });

  

