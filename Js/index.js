if(window.location.pathname === "/Project_Pegasus/create_user.php"){
    window.onload = ()=>{
        var icon = document.getElementById("icon");
        console.log(icon);
        console.log(icon.className);
        icon.addEventListener("click",(e)=>{

                if(icon.className==="fa fa-eye-slash"){
                    document.getElementById("sec").setAttribute("type","text");
                    icon.className="fa fa-eye";
                    console.log(icon.className);
                }
                else{
                    document.getElementById("sec").setAttribute("type","password");
                    icon.className="fa fa-eye-slash";
                }
        })
    }
}

/* Password check */
if(window.location.pathname === "/Project_Pegasus/create_user.php"){
    window.onload = () =>{
        
        var trigger = document.getElementById("trigger");

        trigger.addEventListener("click",(e)=>{
            var pass = document.getElementById("sec1").value;
            var re_pass = document.getElementById("sec").value;

            if(pass != re_pass){
                alert("Passwords do not match");
            }
        });

        var icon = document.getElementById("icon");
        console.log(icon);
        console.log(icon.className);
        icon.addEventListener("click",(e)=>{

                if(icon.className==="fa fa-eye-slash"){
                    document.getElementById("sec").setAttribute("type","text");
                    icon.className="fa fa-eye";
                    console.log(icon.className);
                }
                else{
                    document.getElementById("sec").setAttribute("type","password");
                    icon.className="fa fa-eye-slash";
                }
        })
        
    }
}

if(window.location.pathname === "/Project_Pegasus/home.php"){
    function load(name){
        var inp = document.getElementById("data");
        inp.value = name;

        document.getElementById("form1").submit();
    }
}

if(window.location.pathname === "/Project_Pegasus/booking.php"){
    function calc(){
        var c = document.getElementById("cost1").innerHTML;
        var d = document.getElementById("cost2");
        d.innerHTML = c;

        var seats = document.getElementsByClassName("inp")[2].value
        var amount = c*seats;

        d.innerHTML = amount;
    }

    function load(){
        var inp = document.getElementById("data");
        inp.value = document.getElementById("cost2").innerHTML;

        document.getElementById("form2").submit();
    }
}

