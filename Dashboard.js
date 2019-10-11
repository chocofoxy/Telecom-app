
function date(){
	var x = new Date() ;
	document.getElementById('datec').valueAsDate = new Date();
	}

function delete_this(x) {

	var id = x.parentNode.parentNode.id ;
	x.parentNode.parentNode.style.display = "none" ;
    var xhr = new XMLHttpRequest();
    xhr.open('POST', './supp.php',true);
 		xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
     };
    xhr.send("ref="+id) ;
}

function control_db(x,y,z) {
	var xhr = new XMLHttpRequest() ;
	xhr.open('POST','./control.php',true);
	var r = document.createElement("SPAN") ;
	r.innerHTML = " Please Wait ... "  ;
	r.style.color = "orange" ;
	document.getElementById("add").appendChild(r);
	xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhr.onreadystatechange = function() {
	r.innerHTML = this.response ;
		if ( this.response.indexOf("Failed") != -1  )
		{ r.style.color = "red" ; }
		else {
			r.style.color = "#0FB82C" ;
		}
	setTimeout(function () { document.getElementById("add").removeChild(r); } , 2000 )
	}
	xhr.send("action="+x+"&type="+y+"&value="+z.parentNode.childNodes[2].value);
}

function add_more (x,id) {
	var y = x.parentNode ;
	if ( document.getElementsByName(id).length < 3 ){
		z = y.cloneNode(true);
		z.childNodes[2].id += document.getElementsByName(id).length  ;
		z.removeChild(z.childNodes[4]) ;
		var img  = document.createElement("IMG");
		img.setAttribute("src", "./close_red.png");
		img.className = "img" ;
    img.onclick = function () {
			document.getElementById("insert").removeChild(this.parentNode);
		}
		z.appendChild(img);
		document.getElementById("insert").insertBefore(z,y.nextSibling)   ;
}

}
function show_insert () {

	document.getElementById("insert").style.display =  "flex" ;
  document.getElementById("add").style.display = "none" ;
}

function order ( x ) {

  var url = window.location;
  if ( url.href.indexOf("type") != -1 ) {
		 url.replace( url.href.replace("Ref",x) ) ;
		 url.replace( url.href.replace("DateC",x) ) ;
		 url.replace( url.href.replace("Router",x) ) ; }
	else {

     url.href = "./Dashboard.php?order=" +  x + "#display" ;

	}


}

function show_add () {

	document.getElementById("insert").style.display =  "none"    ;
  document.getElementById("add").style.display = "flex" ;
}

/*function Json_to_front ( json ) {

	var	data = JSON.prase( json );
	data.forEach(function(element) {
	var tr = document.createElement('tr') ;
	tr.innerHTML = "<td>" + element.doc  + "</td><td>" + element. + "</td><td>" + element. + "</td><td>" +  + "</td><td>" +  + "</td><td>" +  + "</td><td>" +  + "</td><td>" +  + "</td><td>" +  + "</td>" ;
	document.getElementsByTagName('table')[0].appendChild(tr)
	});

} */
function modify (x) {

	var tr = x.parentNode.parentNode ;
  var id = new Array('ndoc','client','ref','router_select','module_select','module_select1','module_select2','carte_select','carte_select1','carte_select2','datec','com') ;
	add_more (document.getElementById('module_select').nextSibling,'module_select[]') ;
	add_more (document.getElementById('module_select').nextSibling,'module_select[]') ;
	add_more (document.getElementById('carte_select').nextSibling,'carte_select[]') ;
	add_more (document.getElementById('carte_select').nextSibling,'carte_select[]') ;
  for ( i = 0 ; i < id.length ; i++ ) {
		var y = document.getElementById(id[i]) ;
		y.value = tr.getElementsByTagName("p")[i].innerHTML ;
		if ( i < 4 ) { y.readOnly = true ; }
	}
	 document.getElementById("type_select").value = tr.getAttribute('value') ;
   document.getElementById("insert").action = "./update.php" ;
	 document.getElementById("title").innerHTML = "MODIFY AN ITEM FROM STOCK" ;
	 window.location.href += "#insert" ;

}

function search (x) {
  if ( x == '' ) { window.location.href = "./Dashboard.php?order=Ref" ;  }
	else {
  var xhr = new XMLHttpRequest() ;
	xhr.open('POST','./affichage.php',true);
	xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhr.onreadystatechange = function() {
  document.getElementById("displaytab").innerHTML = xhr.responseText ;
	}
  xhr.send('search='+x);}
}

/*
function search (x) {

  var xhr = XMLHttpRequest() ;
	xhr.open('POST','./affichage.php',true);
	xhr.onreadystatechange = function() {
  Json_to_front(xhr.response()) ;
	}
  xhr.send("class="+x);
} */
