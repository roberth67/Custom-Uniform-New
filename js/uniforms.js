function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
        $('#logo-img1').attr('src', e.target.result);
        $('#logo-img2').attr('src', e.target.result);
        localStorage.setItem("srcLogo", e.target.result);
        localStorage.setItem("statusLogo", "started");
      }
      reader.readAsDataURL(input.files[0]);
    }
  }
  $("#imgInp").change(function(){
    readURL(this);
  });
  $("#imgInp1").change(function(){
    readURL(this);
  });

  