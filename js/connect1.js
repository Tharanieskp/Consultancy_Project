/*callback fuction */
$(document).ready(function(){
    $("#submit1").click(function(){
        var pname = $("#pname").val();
        var category = $("#category").val();
        var email1 = $("#email1").val();
        var name1 = $("#name1").val();
        var phone1 = $("#phone1").val();
        var location1 = $("#location1").val();
        var que = $("#que").val();
        if(name1.length == "")
        {
            Swal.fire({
                position: 'center',
                icon: 'warning',
                title: 'Please Your Fill Name',
                showConfirmButton:false,
                timer: 2500,
                showClass: {
                    popup: 'animate_animated animate_fadeInDown'
                  },
                  hideClass: {
                    popup: 'animate_animated animate_fadeOutUp'
                  }
              });
            $("#name1").focus();            
            return false;
        }
        
        else if(email1.length == "")
        {
            
              Swal.fire({
                position: 'center',
                icon: 'warning',
                title: 'Please Fill Your Email',
                showConfirmButton:false,
                timer: 2500,
                showClass: {
                    popup: 'animate_animated animate_fadeInDown'
                  },
                  hideClass: {
                    popup: 'animate_animated animate_fadeOutUp'
                  }
              });
            $("#email1").focus();
            return false;
        
        }
        
        else if(location1.length == "")
        {
            
              Swal.fire({
                position: 'center',
                icon: 'warning',
                title: 'Please Fill Your location',
                showConfirmButton:false,
                timer: 2500,
                showClass: {
                    popup: 'animate_animated animate_fadeInDown'
                  },
                  hideClass: {
                    popup: 'animate_animated animate_fadeOutUp'
                  }
              });
            $("#location1").focus();
            return false;
        
        }
  
        else if(que.length == "")
        {
            
              Swal.fire({
                position: 'center',
                icon: 'warning',
                title: 'Please Fill Your Query',
                showConfirmButton:false,
                timer: 2500,
                showClass: {
                    popup: 'animate_animated animate_fadeInDown'
                  },
                  hideClass: {
                    popup: 'animate_animated animate_fadeOutUp'
                  }
              });
            $("#que").focus();
            return false;
        
        }
  
        else if(pname.length == "")
        {
            
              Swal.fire({
                position: 'center',
                icon: 'warning',
                title: 'Please Fill Your Product Name',
                showConfirmButton:false,
                timer: 2500,
                showClass: {
                    popup: 'animate_animated animate_fadeInDown'
                  },
                  hideClass: {
                    popup: 'animate_animated animate_fadeOutUp'
                  }
              });
            $("#pname").focus();
            return false;
        
        }
        
        else if(category.length == "")
        {
            
              Swal.fire({
                position: 'center',
                icon: 'warning',
                title: 'Please Fill Your Category Name',
                showConfirmButton:false,
                timer: 2500,
                showClass: {
                    popup: 'animate_animated animate_fadeInDown'
                  },
                  hideClass: {
                    popup: 'animate_animated animate_fadeOutUp'
                  }
              });
            $("#category").focus();
            return false;
        
        }
  
        else if(phone1.length == "")
        {
            Swal.fire({
                position: 'center',
                icon: 'warning',
                title: 'Please fill Your Phone Number',
                showConfirmButton:false,
                timer: 2500,
                showClass: {
                    popup: 'animate_animated animate_fadeInDown'
                  },
                  hideClass: {
                    popup: 'animate_animated animate_fadeOutUp'
                  }
              })
            $("#phone1").focus();
            return false;
        }
    })
  })
  /* call back form*/