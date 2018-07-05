function getVote(int)
    {
    var answer = confirm("Apakah Anda akan memilih pasangan kandidat ini?")
    if (answer){
      if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
        }
      else
        {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
      
      xmlhttp.open("GET","save.php?vote="+int,true);
      xmlhttp.send();

      alert("Pilihan Anda telah masuk di Database kami")
      }
    else{
      }
    }

     function getPosition(String)
    {
    if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
      }
    else
      {// code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }

    xmlhttp.open("GET","vote.php?position="+String,true);
    xmlhttp.send();
    }