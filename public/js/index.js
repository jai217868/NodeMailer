 function saveRecord(){
            var order = new Object();
            order.to = document.getElementById("email").value;
            order.subject = document.getElementById("subject").value;
            order.message = document.getElementById("message").value;
           
           // alert(JSON.stringify(order))
                var ajaxRequest = new XMLHttpRequest();
                if (ajaxRequest) 
                {
                    ajaxRequest.onreadystatechange = ajaxResponse;
                    ajaxRequest.open("POST","/email");
                    ajaxRequest.setRequestHeader("Content-Type", "application/json");// Where?
                    ajaxRequest.send(JSON.stringify(order));
                }
               function ajaxResponse() 
                {
                    if(ajaxRequest.readyState != 4)
                    {
                        console.log("its in process")

                    }else if(ajaxRequest.status == 200)
                    {
                        alert("Mail Send Successfully");
                        location.reload();
                    }
                    else
                    {
                        console.log("Error")
                    }

          }

        }