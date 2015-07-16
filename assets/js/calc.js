var xmlHttp = createXmlHttpRequestObject();

function createXmlHttpRequestObject(){
    var xmlHttp;

    if(window.ActiveXObject){
        try{
            xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
        }catch(e){
            xmlHttp = false;
        }
    }else{
        try{
            xmlHttp = new XMLHttpRequest();
        }catch(e){
            xmlHttp = false;
        }
    }

    if(!xmlHttp)
        alert("Cant create that object !")
    else
        return xmlHttp;
}

function process(){
    if(xmlHttp.readyState==0 || xmlHttp.readyState==4){
        wi = encodeURIComponent(document.getElementById("wlist").value);
        hi = encodeURIComponent(document.getElementById("hlist").value);
        db = encodeURIComponent(document.getElementById("dbase").value);
        qn = encodeURIComponent(document.getElementById("quantity").value);
        xmlHttp.open("GET", "calc.php?wi="+wi+"&hi="+hi+"&db="+db+"&quantity="+qn,true);
        xmlHttp.onreadystatechange = handleServerResponse;
        xmlHttp.send(null);
    }else{
        setTimeout('process()',1000);
    }
}

function handleServerResponse(){
    if(xmlHttp.readyState==4){
        if(xmlHttp.status==200){
            xmlResponse = xmlHttp.responseXML;
            xmlDocumentElement = xmlResponse.documentElement;
            message1 = xmlDocumentElement.getElementsByTagName("price-current");
            message2 = xmlDocumentElement.getElementsByTagName("price-prev");
            message3 = xmlDocumentElement.getElementsByTagName("current-width");
            message4 = xmlDocumentElement.getElementsByTagName("current-length");

            var staf1='';
            staf1 = message1.item(0).firstChild.data;
            staf2 = message2.item(0).firstChild.data;
            staf3 = message3.item(0).firstChild.data;
            staf4 = message4.item(0).firstChild.data;
            document.getElementById("price-current1").innerHTML = staf1;
            document.getElementById("price-current").innerHTML = staf1;
            document.getElementById("price-prev").innerHTML = staf2;
            document.getElementById("current-width").innerHTML = staf3;
            document.getElementById("current-length").innerHTML = staf4;

            setTimeout('process()', 1000);
        }else{
            alert('Someting went wrong !');
        }
    }
}